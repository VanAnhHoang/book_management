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

<!DOCTYPE html>

<head>

    <link rel="stylesheet" href="<link rel=" stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
    <div class="wrapper">

        <header>
            <h1>CreateBook</h1>
        </header>

        <div class="book-form">

            <?php $form = ActiveForm::begin(); ?>
            <div class="sections">

                <section class="active">

                    <div class="bookname">
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                        <?= $form->field($model, 'bookname')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div id="category"></div>
                    <?= $form->field($model, 'idcategory')->dropDownList(
                        ArrayHelper::map(Category::find()->all(), 'id', 'categoryname'),
                        [
                            'prompt' => 'Chọn thể loại'
                        ]
                    ) ?>
            </div>

            <div>
                <?= $form->field($model, 'idauthor')->dropDownList(
                    ArrayHelper::map(Author::find()->all(), 'id', 'authorname'),
                    [
                        'prompt' => 'Chọn tác giả'
                    ]
                ) ?>
            </div>

            <div>
                <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="images">
                <div class="pic">
                    <?= $form->field($model, 'file')->fileInput(['style' => 'display: none; visibility: none']) ?>
                    <label class="control-label" for="book-file"><i class="fa fa-cloud-upload"></i></label>
                </div>
            </div>

            <div class="images1">
                <div class="pdf">
                    <?= $form->field($model, 'file_pdf')->fileInput(['style' => 'display: none;  visibility: none']) ?>
                    <label class="control-label" for="book-file_pdf"><i class="fa fa-cloud-upload"></i></label>
                </div>

            </div>

            <div>
                <?= $form->field($model, 'qrcode')->hiddenInput(['id' => 'qrcode'])->label(false) ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>

            </div>

            </section>
    </div>

        <?php ActiveForm::end(); ?>
</body>



<style>
    body {
        background-color: #363940;
        display: flex;
        flex-direction: column;
        padding: 20px;
        position: relative;

    }

    .wrapper {
        background-color: #fff;
        padding: 25px;
        border-radius: 5px;
        width: 720px;
        max-width: 100%;
        margin: 50px auto;
        align-self: center;
        box-sizing: border-box;
    }

    header {
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 20px;
        display: flex;
    }

    h1 {
        flex: 3;
        padding: 0;
        margin: 0;
        font-size: 16px;
        letter-spacing: 1px;
        font-weight: 700;
        color: #7A7B7F;
    }

    section {
        display: none;
    }

    section.active {
        display: block;
    }

    section input,
    section textarea {
        display: block;
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #ddd;
        outline: 0;
        background-color: #F5F7FA;
        padding: 10px;
        margin-bottom: 10px;
        letter-spacing: 1.4px;
    }

    section textarea {
        min-height: 200px;
    }

    section select {
        display: none;
    }


    .images {
        display: flex;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .images1 {
        display: flex;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .images .img,
    .images .pic {
        flex-basis: 31%;
        margin-bottom: 10px;
        border-radius: 4px;
    }

    .images1 .img,
    .images1 .pdf {
        flex-basis: 31%;
        margin-bottom: 10px;
        border-radius: 4px;
    }

    .images .img {
        width: 112px;
        height: 93px;
        background-size: cover;
        margin-right: 10px;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .images .img:nth-child(3n) {
        margin-right: 0;
    }

    .images .img span {
        display: none;
        text-transform: capitalize;
        z-index: 2;
    }

    .images .img::after {
        content: '';
        width: 100%;
        height: 100%;
        transition: opacity .1s ease-in;
        border-radius: 4px;
        opacity: 0;
        position: absolute;
    }

    .images .img:hover::after {
        display: block;
        background-color: #000;
        opacity: .5;
    }

    .images .img:hover span {
        display: block;
        color: #fff;
    }

    .images .pic {
        background-color: #F5F7FA;
        align-self: center;
        text-align: center;
        padding: 40px 0;
        text-transform: uppercase;
        color: #848EA1;
        font-size: 12px;
        cursor: pointer;
    }

    .images1 .pdf {
        background-color: skyblue;
        align-self: center;
        text-align: center;
        padding: 40px 0;
        text-transform: uppercase;
        color: #848EA1;
        font-size: 12px;
        cursor: pointer;
    }

    @media screen and (max-width: 400px) {
        .wrapper {
            margin-top: 0;
        }

        header {
            flex-direction: column;
        }

        header span {
            text-align: left;
            margin-top: 10px;
        }

        .ways li,
        section input,
        section textarea,
        .select-option .head,
        .select-option .option div {
            font-size: 8px;
        }

        .images .img,
        .images .pic {
            flex-basis: 100%;
            margin-right: 0;
        }
    }

    .wrapper footer ul {
        margin: 0;
        margin-top: 30px;
        display: flex;
        list-style: none;
        padding: 0;
    }

    .wrapper footer ul li {
        flex: 1;
    }

    .wrapper footer li span {
        text-transform: capitalize;
        cursor: pointer;
    }

    .wrapper footer li:first-child {
        color: #999;
        text-align: left;
        font-size: 12px;
    }

    .wrapper footer li:first-child span {
        display: inline-block;
        border-bottom: 1px solid #ddd;
    }

    .wrapper footer li:last-child {
        text-align: right;
    }

    .wrapper footer li:last-child span {
        background-color: #22A4E6;
        padding: 10px 20px;
        color: #fff;
        border-radius: 3px;
    }
</style>

<script>
                    var loadFile = function (event) {
                        var fileReader = new FileReader();
                        fileReader.onload = function () {
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
