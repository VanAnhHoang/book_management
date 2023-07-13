<?php

namespace backend\controllers;

use common\models\Book;
use common\models\search\BookSearch;
use Endroid\QrCode\QrCode;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use backend\components\PngWriter;
use yii\data\ActiveDataFilter;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Book models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Book model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Book model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Book();

            if ($model->load($this->request->post())) {
                $model -> file = UploadedFile::getInstance($model,'file');
                $model->file_pdf = UploadedFile::getInstance($model, 'file_pdf');
                $model->qr_code;

                
                if($model -> file) {
                    $model -> file-> saveAs('../../uploads/'.$model->file->name);
                    $model -> image = $model -> file ->name;
                }
                if ($model->file_pdf) {
                    $model->file_pdf->saveAs('../../uploads/' .$model->file_pdf->name);
                    $model->files = $model->file_pdf->name;
                }
                if (!empty($model->qr_code)) {
                    $qrImg = Yii::getAlias('@book_management/qr/') . $model->qr_code->name;
                    $model->qr_code->saveAs($qrImg);
                } else {
                    $qrPath = $model->createQR();
                    $model->qrcode = basename($qrPath);
                    $model->setAttribute('qrcode', $model->qrcode);
                    $model->qr_code = UploadedFile::getInstance($model, 'qr_code');
                }

                if ($model -> save(false)) {
                    //Yii::$app->session->addFlash('success', 'Thêm mới thành công');
                    return $this->redirect((['view', 'id' => $model->id]));
                } else {
                    //Yii::$app->session->addFlash('danger', 'Thêm mới không thành công');
                    return $this->render('create', [
                        'model' => $model,
                    ]);
                }
            
            } else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

    }

    /**
     * Updates an existing Book model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Book model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $model = $this -> findModel($id);
        $model -> delete();
        unlink('../../uploads/'. $model->image);
        return $this->redirect(['index']);
    }
    
    

    /**
     * Finds the Book model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Book the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Book::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
