<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\base\CollectionBook $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="collection-book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'collectionid')->textInput() ?>

    <?= $form->field($model, 'idbook')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
