<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\base\CollectionBook $model */

$this->title = 'Create Collection Book';
$this->params['breadcrumbs'][] = ['label' => 'Collection Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collection-book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
