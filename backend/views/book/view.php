<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\base\Book $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="book-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'bookname',
            'idauthor',
            'idcategory',
            'description:ntext',
            

        [
            'attribute' => 'image',
            'format' => 'html',             
            'value' => Html::img('../../uploads/'.$model['image'], ['width'=>'150'])
        ],
            
        [
            'attribute' => 'qrcode',
            'format' => 'html',             
            'value' => Html::img('../../qr/'.$model['qrcode'], ['width'=>'150'])
        ],
        [
            'attribute' => 'files',
            'format' => 'html',             
            'value' =>$this->render('pdf/real3d-demo 2/index.html',['model' => $model])
        ],
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',

            
        ],
    ]) ?>

</div>
