<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\base\CollectionBook $model */

$this->title = $model->collectionid;
$this->params['breadcrumbs'][] = ['label' => 'Collection Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="collection-book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'collectionid' => $model->collectionid, 'idbook' => $model->idbook], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'collectionid' => $model->collectionid, 'idbook' => $model->idbook], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'collectionid',
            'idbook',
        ],
    ]) ?>

</div>
