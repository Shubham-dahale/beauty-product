<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;

// foreach($facility as $facility){
// 	echo $facility->masters->name;
// 	echo $facility->description;
// 	echo $facility->images;
// }

// $this->title = 'Home';
?>


         <!-- End  bootstrap-touch-slider Slider -->
<section id="slider">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
 <?php
    $i = 0;
    foreach ($sliders as $slider) {
?>
<div class="item <?php if($slider['id'] == 1){ echo 'active'; }?>">
  <img src="images/<?= $slider['image_file'] ?>" class="img-responsive" style="width: 100%;">

      </div>
<?php
$i++;
}
?>
  </div>   

  <ol class="carousel-indicators">
<!--     <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
    <?php for ($j=0; $j < $i; $j++) { 
    ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $j; ?>" class="active"></li>
  <?php  # code...
    }
  ?>
  </ol>  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
 <!--//main-header-->
  <!-- <?php  
 // // $images = '[';
 // foreach($sliders as $slider)
 // {
	 // $images .= '"images/'.$slider->image_file.'",';
 
 // $slider_images = rtrim($images, ',')."]";
 ?>
 	// <! <div  id="demo-1" data-zs-src='<?php  $slider_images; ?>' data-zs-overlay="dots"></div> -->
     <div class="special featured">
		  <div class="container ">
				   <div class="ab-w3l-spa">
				        <h3 class="tittle">Welcome !</h3>
						 <?php 
	foreach($w as $w){
 ?>
						<p>
						   <!--  We are the most luxurious, comfortable and affordable hostel for students and working men in kondhwa.We provide shared,equipped and well furnished rooms.Experienced management with 10+ years of experience in hostels makes us first choice of students. -->
						   <?= $w->welcome?>
						</p>

						<?php } ?>
				   </div>
				<!-- services -->
							<h3 class="tittle">Products</h3>
							<div class="w3_agileits_services_grids indexgrids">
								<?php 
								$i=0;
								foreach($products as $p){
								if($i > 3) break;
								?>
								<div class=" w3_agileits_services_grid hvr-overline-from-center indexpro">
									<div class="col-md-3 col-xs-6 w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
												<a href="<?php echo Url::toRoute(['site/subproduct','id'=>$p->id]);?>" >
											<img src="backend/images/products/imagedisplay/<?php echo $p->imgdisplay; ?>" alt="service-img" style=""></a>
										</div>
										 <!-- <h3><?php ;?></h3> -->
										
									</div>
									<p class="indexshu"><?php echo $p->description; ?></p>
								</div>
								<?php
								$i++;
									}
								?>
								<div class="clearfix"> </div>
							</div>
				<!-- //services -->
				           <div class="agileinf-button">   
							   <a class="read" href="<?php echo Url::toRoute('site/products'); ?>">View More</a>
							</div>
		   </div>
    </div>
    <!-- <a href="http://localhost/beauty/public_html/index.php?r=site%2Fabout#target">Link</a> -->
	
	<!-- about-bottom -->
	<!-- //about -->
	<!-- /plans -->

      
<!-- testimonials -->
	<div class="guests-agile">
			<h3 class="tittle">Our Feedback</h3>
			<div class="w3_agileits_testimonial_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							
								<?php 
							//	print_r($testimonials);
									 foreach($reviews as $testimonial)
									 {
									
									?>

										<li>
											<div class="w3_agileits_testimonial_grid">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
												<p id="feedback"><?php echo $testimonial->content ?></p>
												<!--<img src="web/images/admin.jpg" alt=" " class="img-responsive" />-->
												<p >- By <?php echo $testimonial->author ?></p>
											</div>
										</li>			
								<?php
									}
								?>	
						</ul>
					</div>
				</section>
				
				<!-- //flexSlider -->
			</div>
	</div>
<!-- //testimonials -->