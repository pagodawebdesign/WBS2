$(document).ready(function() {
	// ==================================================
	// change menu on mobile version
	// ==================================================
	domready(function(){
		selectnav('mainmenu', {
			label: 'Menu',
			nested: true,
			indent: '-'
		});
	});
	

	
	// ==================================================
	// filtering gallery
	// ==================================================	
	var $container = $('#gallery');
		$container.isotope({
			itemSelector: '.item',
			filter: '*',
	});
	$('#filters a').click(function(){
		var $this = $(this);
		if ( $this.hasClass('selected') ) {
			return false;
			}
		var $optionSet = $this.parents();
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected');
				
		var selector = $(this).attr('data-filter');
		$container.isotope({ 
		filter: selector,
	});
	return false;
	});
	
	
	// ==================================================
	// prettyPhoto function
	// ==================================================	
	$("area[rel^='prettyPhoto']").prettyPhoto();
	$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
	$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
	$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
		custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
		changepicturecallback: function(){ initialize(); }
	});
	$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
		custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
		changepicturecallback: function(){ _bsap.exec(); }
	});
	
	
	// ==================================================
	// scroll to top
	// ==================================================	
	$().UItoTop({ easingType: 'easeOutQuart' });
	  
	// ==================================================
	// gallery hover
	// ==================================================	
	$('.gallery .item').hover(function() {
	$('.gallery .item').not($(this)).stop().animate({opacity: .3}, 100);
	}, function() {
	$('.gallery .item').stop().animate({opacity: 1});}, 100);
	
	
	// ==================================================
	// resize
	// ==================================================	
	window.onresize = function(event) {
		$('#gallery').isotope('reLayout');
  	};
	
	
	// ==================================================
	// show / hide slider navigation
	// ==================================================	
	$('.callbacks_nav').hide();
	
	$('#slider').hover(function() {
	$('.callbacks_nav').stop().animate({opacity: 1}, 100);
	}, function() {
	$('.callbacks_nav').stop().animate({opacity: 0});}, 100);
	
	
	
	
	$(function () {
      // Slideshow 4
      $(".pic_slider").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });
    });
	
	
	
	
	// ==================================================
	// lazyload
	// ==================================================	
	 $(function() {
          $("img").lazyload({
              effect : "fadeIn",
			  effectspeed: 900 
          });
      });


	// Logo click.
	var LadyYou = $('#logo .inner, .footerSignIn')
	LadyYou.on('click', function(){
		window.location="index.php";
	})
	LadyYou.css({'cursor':'pointer'})


	// Language changer google
	var leftNav = $('#leftNav');
	  var leftPop = $('#leftPop');
	  var PopClose = $('#PopClose')

	  leftNav.on('click', function(){
	    leftNav.css({'display':'none'})
	    leftPop.css({'display':'block'})
	  })

	  PopClose.on('click', function(){
	    leftNav.css({'display':'block'})
	    leftPop.css({'display':'none'})
	  })



    

		    
		 
  
	
}); // doc ready



function FixHeight()
{


var WindowHeight = $(window).height()
if($("header")){
var TopBarHeight = $("header").height()
}
else{var TopBarHeight =0;}

var mainContainerHeight = $("#containAll").height()
var FooterHeight = $("footer").height()

var mainContainer = $("#containAll")

$('#test').append(WindowHeight, " ", TopBarHeight, " ", mainContainerHeight,  " ",FooterHeight)
//377

console.log(mainContainer)
mainContainer[0].style.minHeight = (WindowHeight - TopBarHeight - FooterHeight -40) + "px"


}

// Make this a style change instead
window.onload = FixHeight;
$("footer")[0].style.margin = "0px"
window.onresize = FixHeight;