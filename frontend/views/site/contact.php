<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use common\models\Sites; 
use yii\helpers\Url;   
$this->title = 'Contact';



//print_r($site);exit;

?>
 <!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><?= Html::a('Home ', ['/site/index'], []) ?> <i> /</i></li>
				<li><?= $this->title ?></li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
<!--/content-inner-section-->
				  <div class="w3_content_agilleinfo_inner">
					    <div class="container">
							<div class="inner-agile-w3l-part-head">
					           <h2 class="w3l-inner-h-title"><?= Html::encode($this->title) ?></h2>								
							</div>
									<div class="w3_mail_grids">
                                                <?php $form = ActiveForm::begin(['id' => 'contact-form' ]); ?>
											<div class="col-md-6 w3_agile_mail_grid">

                                                 <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                                                 <?= $form->field($model, 'email') ?>
                                                 <?php  $form->field($model, 'subject') ?>
                                                
							
												
											</div>
											<div class="col-md-6 w3_agile_mail_grid">
                                                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>												
                                                 <?= Html::submitButton('Submit', ['class'=>'contact-button','name' => 'contact-button']) ?>
											</div>
											<div class="clearfix"> </div>
										<?php ActiveForm::end(); ?>
							</div>
					   </div>
							<div class=" map">
							    
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.0033132376043!2d73.89123770208931!3d18.438158697768692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ebab6a2f6751%3A0x7579cfc9d6ee4026!2sAnand+Chaya+Boys+Hostel!5e0!3m2!1sen!2sin!4v1499319837230" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
				  </div>
			<!--//content-inner-section-->
<?php
foreach($site as $site){
	?>
<div class="w3l_contact-bottom">
		<div class="container">
			
			<div class="w3ls_con_grids">
				
				<div class="w3ls_footer_grid">
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Location</h4>
							<p><?= $site->address ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Email</h4>
							<a href="mailto:<?= $site->email ?>"><?= $site->email ?></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Call Us</h4>
							<p><?= $site->contact ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>