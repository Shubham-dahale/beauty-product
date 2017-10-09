<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Gallery';
// $this->params['breadcrumbs'][] = $this->title;
?>
 <!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.html">Home</a> <i> /</i></li>
				<li><?= $this->title ?></li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="container">
					      <div class="inner-agile-w3l-part-head">
					            <h2 class="w3l-inner-h-title">Gallery</h2>
							</div>
				                <div class="gallery-grids">
					<?php 
					foreach($galleries as $gallery){
					?>
					<div class="col-md-4 gallery-grid">
						<div class="grid">
							<figure class="effect-apollo">
								<a class="example-image-link" href="images/<?= $gallery->name ?>" data-lightbox="example-set" data-title="<?= $gallery->description ?>">
									<img src="images/<?= $gallery->name ?>" alt="<?= $gallery->name ?>" width="100%" height="250px">
									<figcaption>
										<p>Anand <span>Chaya</span></p>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<?php } ?>
					
					<div class="clearfix"> </div>
					
			</div>

					</div>
				</div>
			<!--//content-inner-section-->