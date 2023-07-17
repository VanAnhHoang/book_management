<?php

/** @var \yii\web\View $this */
/** @var string $content */


use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
$formLogout = 
            Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'dropdown-item']
            )
            . Html::endForm();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="nav-md">
<?php $this->beginBody() ?>


<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Book-Reviews!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Category</h3>
                <ul class="nav side-menu">

                <?php if (Yii::$app->user->identity->idrole == 1) { ?>
                  <li>
                    <a><i class="fa fa-home"></i> Quản lý tài khoản <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li>
                        <?php echo Html::a('Tạo tài khoản', ['/user/create']) ?>
                    </li>

                    <li>
                        <?php echo Html::a('Danh sách tài khoản', ['/user']) ?>
                    </li>
                    </ul>
                  </li>
                <?php } ?>
                <?php if (Yii::$app->user->identity->idrole == 1) { ?>
                <?php } ?>
                  <li><a><i class="fa fa-edit"></i> Hồ sơ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li>
                      <?php echo Html::a('Tạo profile') ?>
                    </li>

                    <li>
                      <?php echo Html::a('Danh sách tài khoản') ?>
                    </li>
                    </ul>

                  </li>
                  <li>
                    <a><i class="fa fa-desktop"></i> Quản lý sách <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li>
                      <?php echo Html::a('Thêm sách', ['/book/create']) ?>
                    </li>
                    <li>
                      <?php echo Html::a('Sửa thông tin sách', ['/book']) ?>
                    </li>
                    </ul>
                  </li>

                  <li>
                    <a><i class="fa fa-desktop"></i> Danh mục sách <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li>
                      <?php echo Html::a('Thêm mục mới', ['/category/create']) ?>
                    </li>
                    <li>
                      <?php echo Html::a('Sửa danh mục', ['/category']) ?>
                    </li>
                    </ul>
                  </li>

                  <li>
                    <a><i class="fa fa-table"></i> Bộ sưu tập sách <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li>
                      <?php echo Html::a('Thêm bộ sưu tập mới', ['/collection/create']) ?>
                    </li>
                    <li>
                      <?php echo Html::a('Tông hợp bộ sưu tập', ['/collection']) ?>
                    </li>
                    <li>
                      <?php echo Html::a('Thêm sách vào bộ sưu tập', ['/collection-book/create']) ?>
                    </li>
                    <li>
                      <?php echo Html::a('Tổng hợp sách theo bộ sưu tập', ['/collection-book']) ?>
                    </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-sitemap"></i> Top Rate <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Top View <span class="label label-success pull-right"></span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img  alt="">Người dùng
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href= "/book-reviews/frontend/web/index.php?r=site%2Flogin" > Login </a>
                <div>
                    
                </div>
                    <?=$formLogout ?>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>

          <!-- top tiles -->
          
          <!-- /top tiles -->



          

        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();