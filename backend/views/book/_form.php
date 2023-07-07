<?php

use common\models\base\Author;
use common\models\base\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\base\Book $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bookname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idauthor')->dropDownList(
        ArrayHelper::map(Author::find()->all(),'id', 'authorname'),
        [
            'prompt'=>'select author'
        ]
    ) ?>

    <?= $form->field($model, 'idcategory')->dropDownList(
        ArrayHelper::map(Category::find()->all(),'id', 'categoryname'),
        [
            'prompt'=>'select category'
        ]
    ) ?>

    <?= $form->field($model, 'idfile')->textInput() ?>

    <?= $form->field($model, 'ngaxuatban')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')-> fileInput() ?>

    <?= $form->field($model, 'files')-> fileInput() ?>

    <?= $form->field($model, 'qr_code')->hiddenInput(['id_products'=>'qr_code'])->label(false)?>

    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
