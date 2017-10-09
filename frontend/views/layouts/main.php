<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Sites;    
use yii\helpers\Url;

$model = new Sites();
$sites = $model->find()->where(['id'=>1])->all();
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
         <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all"> -->
         <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
        

        <!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
        <!-- <script src="bootstrap-touch-slider.js"></script> -->
        
        <script type="text/javascript">
            $('#bootstrap-touch-slider').bsTouchSlider();
        </script>
        

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php 
	foreach($sites as $sites){
 ?>
<div class="wrap">
   <!--/main-header-->
  <!--/banner-section-->
  <div class="w3layouts-top-strip">
			<div class="top-srip-agileinfo">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="https://www.facebook.com/Anandchhaya-Boys-Hostel-1858309274386459/" target="_BLANK"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="https://www.instagram.com/anandchhaya.hostel/" target="_BLANK"><i class="fa fa- fa-instagram"></i></a>
					<a class="pinterest" href="https://plus.google.com/109014202386799664461" target="_BLANK"><i class="fa fa-google-plus"></i></a>
				</div>
				<div class="agileits-contact-info text-right">
					<ul>
						<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <?= $sites->contact?></li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:<?= $sites->email?>"><?= $sites->email?></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<div>
	
		<div class="demo-inner-content">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">
                     <nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<h1><a href="<?php echo Url::toRoute('site/index'); ?>"><span>S</span>harvari <p class="s-log">Group</p></a></h1>
									</div>
                                    <?php
                                        $menuItems = [
                                            ['label' => 'Home', 'url' => ['/site/index']],
                                            ['label' => 'About', 'url' => ['/site/about']],
                                            ['label' => 'Product', 'url' => ['/site/products']],
                                            // ['label' => 'Facilities', 'url' => ['/site/facilities']],
                                            ['label' => 'Contact', 'url' => ['/site/contact']],
                                        ];
                                        echo Nav::widget([
                                            'options' => ['class' => 'nav navbar-nav navbar-right'],
                                            'items' => $menuItems,
                                        ]);   
                                    ?>	
					            </nav>
							</div> 

			
		<!--//header-w3l-->
		</div>
		   </div>
    </div>
  <!--/banner-section-->

    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


 <!-- Footer -->
	<div class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
				<div class="col-md-4 footer-info-grid links">
					<h4>Quick links</h4>
					<ul>
						       <li><a href="<?php echo Url::toRoute('site/index'); ?>">Home</a></li> 
								<li><a href="<?php echo Url::toRoute('site/about'); ?>">About</a></li> 
								
								<li><a href="<?php echo Url::toRoute('site/products'); ?>">Product</a></li> 
								<li><a href="<?php echo Url::toRoute('site/contact'); ?>">Contact</a></li> 
					</ul>
				</div>
				<div class="col-md-4 footer-info-grid address">
					<h4>Address</h4>
					<address>
						<ul>
							
							<li><?= $sites->address?></li>
							<li>Telephone :  <?= $sites->contact?></li>
							<li>Email : <a class="mail" href="mailto:<?= $sites->email?>"><?= $sites->email?></a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-4 footer-info-grid">
				<div class="connect-social">
					<h4>Connect with us</h4>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="https://www.facebook.com/Anandchhaya-Boys-Hostel-1858309274386459/" target="_BLANK"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon pin" href="https://www.instagram.com/anandchhaya.hostel/" target="_BLANK"><i class="fa fa- fa-instagram"></i></a></li>
							<li><a class="icon gp" href="https://plus.google.com/109014202386799664461" target="_BLANK"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>

				</div>
					

					
				</div>
				<div class="clearfix"></div>
			</div>
	   </div>
     </div>

		
			<div class="w3agile_footer_copy">
				    <p>&copy; <?= date('Y')?> <?= $sites->name?>. All rights reserved | Design by <a href="http://www.webingeer.com/">Webingeer</a></p>
			</div>
            <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
          
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php } ?>