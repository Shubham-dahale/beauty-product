<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use common\models\Products;
$this->title = 'SubProduct';
?>

<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><?= Html::a('Home ', ['/site/index'], []) ?> <i> /</i></li>
				<li><?= Html::a('Product ', ['/site/products'], []) ?><i> /</i></li>
				<li> <?= $this->title ?></li>
			</ul>
		</div>
	</div>
<br><br>
	<h3 class="tittle">SubProducts</h3>
	
<div class="container subpro">
      
 <?php
// echo '<span class="city1">' . $product->description. '</span>';


  foreach($model1 as $m1){ 

                         ?>

<div class="col-md-3 col-lg-3 col-xs-6">
	
<!-- <div class="special featured"> -->
            

				<!-- services -->
							
							<div class="w3_agileits_services_grids">
								
								<div class="col-md-3 w3_agileits_services_grid1 hvr-overline-from-center abc">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
										<a href="<?php echo Url::toRoute(['site/product','id'=>$m1->id]);?>" >
											<img src="images/<?php echo $m1->subproduct_img; ?>" alt="service-img" style="width:100%;"></a>
										</div>
										
										<p class="shu text-center"><?php echo $m1->subproduct_name; ?></p>
									</div>
								</div>
								
								<!-- <div class="clearfix"> </div> -->
							</div>
				<!-- //services -->
		   <!-- </div> -->
    </div>
<?php
}
?>
    </div>


