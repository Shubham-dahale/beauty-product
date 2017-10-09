<?php
    use yii\helpers\Url;
?>
<div class="col-md-3 col-lg-3 col-xs-6">
	<div class="container containerpro1">	  
<!-- <div class="special featured"> -->
            

				<!-- services -->
							
							<div class="w3_agileits_services_grids">
								
								<div class="col-md-3 w3_agileits_services_grid1 hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
										<a href="<?php echo Url::toRoute(['site/subproduct','id'=>$model->id]);?>" >
											<img src="backend/images/products/imagedisplay/<?php echo $model->imgdisplay; ?>" alt="service-img" style="width:100%;"></a>
										</div>
										
										
									</div>
                                     <p class="shu text-center"><?php echo $model->description; ?></p>
								</div>
								
								<!-- <div class="clearfix"> </div> -->
							</div>
				<!-- //services -->
		   <!-- </div> -->
    </div></div>