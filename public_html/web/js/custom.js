




$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
});
$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
});
 $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
$(document).ready(function() {
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});


















/////////////////////////////////////////////////////////////////

//         	$(document).ready(function() {
        
//    /* activate the carousel */
//    $("#modal-carousel").carousel({interval:false});

//    /* change modal title when slide changes */
//    $("#modal-carousel").on("slid.bs.carousel",       function () {
//         $(".modal-title")
//         .html($(this)
//         .find(".active img")
//         .attr("title"));
//    });

//    /* when clicking a thumbnail */
//    $(".row .thumbnail").click(function(){
//     var content = $(".carousel-inner");
//     var title = $(".modal-title");
  
//     content.empty();  
//     title.empty();
  
//   	var id = this.id;  
//      var repo = $("#img-repo .item");
//      var repoCopy = repo.filter("#" + id).clone();
//      var active = repoCopy.first();
  
//     active.addClass("active");
//     title.html(active.find("img").attr("title"));
//   	content.append(repoCopy);

//     // show the modal
//   	$("#modal-gallery").modal("show");
//   });

// });
       
