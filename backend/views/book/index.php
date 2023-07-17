<?php

use common\models\base\Book;

use common\models\base\Author;
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
  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id'
            [
                'attribute' => 'image',
                'format' => 'html',             
                'value' => function ($model) {
                 return Html::img('../../uploads/'.$model['image'], ['width'=>'150']);
                }
            ],
            'bookname',
            [
                'attribute' => 'idauthor',
                'format' => 'html',             
                'value' => function ($model) {
                 return Html::encode($model->author->authorname);
                },
                
            ],
            [
                'attribute' => 'idcategory',
                'format' => 'html',             
                'value' => function ($model) {
                 return Html::encode($model->categoryName->categoryname);
                },
                    'filter' => Html::activeDropDownList(
                    $searchModel,
                    'idcategory',
                    \common\models\Book::getcategory(),
                    ['class' => 'form-control', 'prompt' => 'Chọn']
                ),    
            ],
            
            //'ngaxuatban',
            //'description:ntext',
            
            //'created_by',
           
            //'updated_by',
            
            //'files',
            

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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Book $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        

        ],
    ]); ?>


</div>
