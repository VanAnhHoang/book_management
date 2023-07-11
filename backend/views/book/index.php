<?php

use common\models\base\Book;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\BookSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id'
            'bookname',
            'idauthor',
            'idcategory',
            
            //'ngaxuatban',
            'description:ntext',
            
            //'created_by',
           
            //'updated_by',
            [
                'attribute' => 'image',
                'format' => 'html',             
                'value' => function ($model) {
                 return Html::img('../../uploads/'.$model['image'], ['width'=>'150']);
                }
            ],
            //'files',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Book $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],

            [
                'attribute' => 'qrcode',
                'format' => 'html',             
                'value' => function($model) {
                    return Html::img('../../qr/'.$model['qrcode'], ['width'=>'150']);
                }
            ],

            'files',

            'created_at',
            'updated_at',

        ],
    ]); ?>


</div>
