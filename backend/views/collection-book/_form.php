<?php

use common\models\base\Collection;
use common\models\base\Book;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/** @var yii\web\View $this */
/** @var common\models\base\CollectionBook $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="collection-book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'collectionid')->dropDownList(
        ArrayHelper::map(Collection::find()->all(),'id', 'collectionname'),
        [
            'prompt'=>'Chọn bộ sưu tập'
        ]
    ) ?>

    <?= $form->field($model, 'idbook')->dropDownList( 
        ArrayHelper::map(Book::find()->all(),'id', 'bookname'),
        [
            'prompt'=>'Chọn sách'
        ]
    )?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
