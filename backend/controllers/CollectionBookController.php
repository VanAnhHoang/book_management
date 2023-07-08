<?php

namespace backend\controllers;

use common\models\base\CollectionBook;
use common\models\search\CollectionBookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CollectionBookController implements the CRUD actions for CollectionBook model.
 */
class CollectionBookController extends Controller
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
     * Lists all CollectionBook models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CollectionBookSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CollectionBook model.
     * @param int $collectionid Collectionid
     * @param int $idbook Idbook
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($collectionid, $idbook)
    {
        return $this->render('view', [
            'model' => $this->findModel($collectionid, $idbook),
        ]);
    }

    /**
     * Creates a new CollectionBook model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CollectionBook();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'collectionid' => $model->collectionid, 'idbook' => $model->idbook]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CollectionBook model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $collectionid Collectionid
     * @param int $idbook Idbook
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($collectionid, $idbook)
    {
        $model = $this->findModel($collectionid, $idbook);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'collectionid' => $model->collectionid, 'idbook' => $model->idbook]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CollectionBook model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $collectionid Collectionid
     * @param int $idbook Idbook
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($collectionid, $idbook)
    {
        $this->findModel($collectionid, $idbook)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CollectionBook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $collectionid Collectionid
     * @param int $idbook Idbook
     * @return CollectionBook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($collectionid, $idbook)
    {
        if (($model = CollectionBook::findOne(['collectionid' => $collectionid, 'idbook' => $idbook])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
