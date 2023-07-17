<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\base\Book $model */

$this->title = $model->bookname;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="book-view">

    <h1>
        <?= Html::encode($this->title) ?>
    </h1>

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

    

<div>
    <section class = "book">
        <div class = "container">
            
            <div class = "book-content row">
                <div class = "book-content-left row">
                    <div class = "book-content-left-img">
                        <img src="<?php echo '../../uploads/' .$model->image?>">
                    </div>
                </div>
                <div class="book-content-right">
                    <div class = "book-content-right-book-name">
                        <h1>
                            <?= Html::encode($this->title) ?>
                        </h1>
                    </div>


                    <div class = "book-content-right-book-author">
                        <p>
                            Tác giả: <?php echo $model->author->authorname?>
                            
                        </p>
                    </div>

                    <div class = "book-content-right-book-category">
                        <p>
                            Thể loại: <?php echo $model->categoryName->categoryname?>
                        </p>
                    </div>
                    <div class = "book-content-right-book-rating">
                        <p>
                            Đánh giá: <?php echo $model->idauthor?>
                        </p>
                    </div>
                    <div class = "book-content-right-book-view">
                        <p>
                            Số lượt xem: <?php echo $model->id?>
                        </p>
                    </div>

                    <div class = "book-content-right-book-description">
                        <p>
                            Mô tả: <?php echo $model->description?>
                        </p>
                    </div>
                    <div class = "book-content-right-book-qr">
                        <img src="<?php echo '../../qr/' .$model->qrcode?>">
                    </div>
                </div>

            </div>

        </div>

    </section>
</div>

<style>
    .book{
        padding: 100px 0;
    }
    .book-top {
        margin-bottom: 30px ;
    }
    .book-top p {
        font-family: var(--main-text-font);
        margin: 0 12px;
        font-size: 12px;
    }
   
    .book-content-left {
        width: 50%;
    }
    .book-content-right {
        color:black;
        width: 50%;
    }
    .book-content-left-img {
        width: 80% ;
        padding-right: 50px;
    }
    .book-content-left-img img {
        width: 90%;
        margin-left: 35px;
        height: 400px;
    }
    .book-content-right {
        width: 50%;
        padding-right: 40px;
    }

    .book-content-right-book-qr img{
        width: 50px;
        height: 50px;
    }
    .book-content-right-book-rating p{
        color: red;
    }
    .book-content-right-book-view p{
        color: red;
    }
</style>
</div>