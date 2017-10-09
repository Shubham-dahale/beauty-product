<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Product';
// $this->params['breadcrumbs'][] = $this->title;
?>
 <!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.html">Home</a> <i> /</i></li>
				<li>Product</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
 <div class="special featured">
		  <div class="container">
				<!-- services -->
							<h3 class="tittle">Product</h3>
							<div class="w3_agileits_services_grids">
								<?php foreach($facility as $facility){?>
								<div class="col-md-3 w3_agileits_services_grid hvr-overline-from-center">
									<div class="w3_agileits_services_grid_agile">
										<div class="w3_agileits_services_grid_1">
											<img src="images/<?php echo $facility->images; ?>" alt="service-img" width="100%">
										</div>
										
										<p><?php echo $facility->description; ?></p>
									</div>
								</div>
								<?php
									}
								?>
								<div class="clearfix"> </div>
							</div>
				<!-- //services -->
		   </div>
    </div>




    //////////////////////////////////////////////////////////////////////////////////
    <?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Product';
// $this->params['breadcrumbs'][] = $this->title;
?>
<!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.html">Home</a> <i> /</i></li>
				<li>Product</li>
			</ul>
		</div>
	</div>
	</br>
	</br></br>
<!-- //breadcrumb -->
<h3 class="tittle">Product</h3>
 <div class="container" > 
<div class="row">
  <?= 
    \yii\widgets\ListView::widget([
      'dataProvider' => $dataProvider,
      'options' => [
        'tag' => 'div',
        'class' => 'list-wrapper',
        'id' => 'list-wrapper',
      ],
      'layout' => "{summary}\n<div class='row'>{items}</div>\n\n<div class='row'>{pager}</div>",
      'itemView' => '_pro',
    ]);
  ?>
</div> 	
<!-- ////////////////////////////////////////////////// -->








<!-- ////////////////////////////////////////// -->
<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

// $this->title = $name;
?>

<script type="text/javascript">
    $(document).ready(function() {
        
   /* activate the carousel */
   $("#modal-carousel").carousel({interval:false});

   /* change modal title when slide changes */
   $("#modal-carousel").on("slid.bs.carousel",       function () {
        $(".modal-title")
        .html($(this)
        .find(".active img")
        .attr("title"));
   });

   /* when clicking a thumbnail */
   $(".row .thumbnail").click(function(){
    var content = $(".carousel-inner");
    var title = $(".modal-title");
  
    content.empty();  
    title.empty();
  
    var id = this.id;  
     var repo = $("#img-repo .item");
     var repoCopy = repo.filter("#" + id).clone();
     var active = repoCopy.first();
  
    active.addClass("active");
    title.html(active.find("img").attr("title"));
    content.append(repoCopy);

    // show the modal
    $("#modal-gallery").modal("show");
  });

});
  </script>
</head>
<body>
<div class="container">
  <div class="row">
    <h1>Bootstrap 3 lightbox hidden gallery using modal</h1>
        <hr>
    
    <div class="row">
            
            <div class="col-12 col-md-4 col-sm-6">
          <a title="Image 1" href="#"> 
            <img class="thumbnail img-responsive" id="image-1" src="http://dummyimage.com/600x350/ccc/969696&amp;text=0xD10x810xD00xB50xD10x800xD10x8B0xD00xB9">
          </a>
        </div>
      
        <div class="col-12 col-md-4 col-sm-6">
          <a title="Image 2" href="#"> 
            <img class="thumbnail img-responsive" id="image-2" src="http://dummyimage.com/600x350/2255EE/969696&amp;text=0xD10x810xD00xB80xD00xBD0xD00xB80xD00xB9">
          </a>

        </div>
        <div class="col-12 col-md-4 col-sm-6">
          <a title="Image 3" href="#"> 
            <img class="thumbnail img-responsive" id="image-3" src="http://dummyimage.com/600x350/449955/FFF&amp;text=0xD00xB70xD00xB50xD00xBB0xD00xB50xD00xBD0xD10x8B0xD00xB9">
          </a>
        </div>
    </div>
    
    <hr>
    
  </div>
</div>

  <div class="hidden" id="img-repo">
    
    <!-- #image-1 -->
    <div class="item" id="image-1">
      <img class="thumbnail img-responsive" title="Image 11" src="http://dummyimage.com/600x350/ccc/969696">
    </div>
    <div class="item" id="image-1">
      <img class="thumbnail img-responsive" title="Image 12" src="http://dummyimage.com/600x600/ccc/969696">
    </div>
    <div class="item" id="image-1">
      <img class="thumbnail img-responsive" title="Image 13" src="http://dummyimage.com/300x300/ccc/969696">
    </div>
      
    <!-- #image-2 -->
    <div class="item" id="image-2">
      <img class="thumbnail img-responsive" title="Image 21" src="http://dummyimage.com/600x350/2255EE/969696">
    </div>
    <div class="item" id="image-2">
      <img class="thumbnail img-responsive" title="Image 21" src="http://dummyimage.com/600x600/2255EE/969696">
    </div>
    <div class="item" id="image-2">
      <img class="thumbnail img-responsive" title="Image 23" src="http://dummyimage.com/300x300/2255EE/969696">
    </div>   
      
    <!-- #image-3-->
    <div class="item" id="image-3">
      <img class="thumbnail img-responsive" title="Image 31" src="http://dummyimage.com/600x350/449955/FFF">
    </div>
    <div class="item" id="image-3">
      <img class="thumbnail img-responsive" title="Image 32" src="http://dummyimage.com/600x600/449955/FFF">
    </div>
    <div class="item" id="image-3">
      <img class="thumbnail img-responsive" title="Image 33" src="http://dummyimage.com/300x300/449955/FFF">
    </div>        
    
  </div>

<div class="modal" id="modal-gallery" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">×</button>
          <h3 class="modal-title"></h3>
      </div>
      <div class="modal-body">
          <div id="modal-carousel" class="carousel">
   
            <div class="carousel-inner">           
            </div>
            
            <a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            
          </div>
      </div>
      <div class="modal-footer">
      <div>
      <p>Creates a new Plans model.
* If creation is successful, the browser will be redirected to the 'view' page.
* @return mixed</p></div>
          <button class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /////////////////////////////////////////////// -->