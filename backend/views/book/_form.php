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

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

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

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')-> fileInput() ?>

    <?= $form->field($model, 'file_pdf')->fileInput() ?>

    <?= $form->field($model, 'qrcode')->hiddenInput(['id'=>'qrcode'])->label(false)?>

    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <script>
        var loadFile = function(event){
            var fileReader = new FileReader();
            fileReader.onload = function(){
                var output = document.createElement("img");
                output.src = fileReader.result;
                output.style.width = "100px";
                output.style.height = "80px";
                document.getElementById("image-preview").innerHTML = "";
                document.getElementById("image-preview").appendChild(imgElement);
        };
        reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <?php ActiveForm::end(); ?>


</div>
