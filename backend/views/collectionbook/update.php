<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\base\CollectionBook $model */

$this->title = 'Update Collection Book: ' . $model->collectionid;
$this->params['breadcrumbs'][] = ['label' => 'Collection Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->collectionid, 'url' => ['view', 'collectionid' => $model->collectionid, 'idbook' => $model->idbook]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="collection-book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
