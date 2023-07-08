<?php

use common\models\base\CollectionBook;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\CollectionBookSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Collection Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collection-book-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Collection Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'collectionid',
            'idbook',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CollectionBook $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'collectionid' => $model->collectionid, 'idbook' => $model->idbook]);
                 }
            ],
        ],
    ]); ?>


</div>
