	<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
// $this->params['breadcrumbs'][] = $this->title;
?>
<?php
foreach($site as $site){
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
				<h2 class="w3l-inner-h-title">About</h2>
			</div>
			<div class="ab-w3l-spa" style="height: '500px'">
				<img src="images/<?php echo $site->logo; ?>" alt="" class="img-responsivex" height="350px" width="80%" >
				<h2><a id="target">Welcome</a></h2>
				<p><?= $site->aboutus ?></p>
			</div>
	</div>
</div>
<!--//content-inner-section-->
<?php } ?>