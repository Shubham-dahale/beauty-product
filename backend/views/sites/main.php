<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
use common\models\Sites;    

$model = new Sites();
$site = $model->find()->where(['id'=>1])->all();
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<?php
    foreach($site as $site){
    ?>
 
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap" id="wrapper">
     <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Url::toRoute('site/index');?>"><?= $site->name ?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                   <ul class="dropdown-menu dropdown-user">
                       <li><a href="<?php echo Url::toRoute('sites/index');?>"><i class="fa fa-gear fa-fw"></i> Site Settings</a>
                        </li>
                        <li><?= Html::a('Logout', ['site/logout'], ['data-method' => 'post']) ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo Url::toRoute('site/index');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('enquiry/index');?>"><i class="fa fa-volume-control-phone fa-fw"></i> Enquiries</a>
                            
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('admissions/index');?>"><i class="fa fa-user-plus fa-fw"></i> Admissions</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('masters/index');?>"><i class="fa fa-black-tie fa-fw"></i> Masters</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('gallery/index');?>"><i class="fa fa-picture-o fa-fw"></i> Gallery</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('testimonials/index');?>"><i class="fa fa-quote-right fa-fw"></i> Testimonials</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('plans/index');?>"><i class="fa fa-sliders fa-fw"></i> Plans</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('facilities/index');?>"><i class="fa fa-plus-square fa-fw"></i> Facilities</a>
                        </li>
                        <li>
                            <a href="<?php echo Url::toRoute('sites/index');?>"><i class="fa fa-cogs fa-fw"></i> Site Settings</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

    <div id="page-wrapper">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php 
}
?>