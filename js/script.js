(function($) {
	
	"use strict";
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(300);
		}
	}
	
	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.sticky-header');
			var scrollLink = $('.scroll-to-top');
			if (windowpos >= 200) {
				siteHeader.addClass('now-visible');
				scrollLink.fadeIn(300);
			} else {
				siteHeader.removeClass('now-visible');
				scrollLink.fadeOut(300);
			}
		}
	}
	
	headerStyle();

	//Submenu Dropdown Toggle
	if($('.main-header .navigation li.dropdown ul').length){
		$('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><Span class="fa fa-angle-down"></span></div>');
		
		//Dropdown Button
		$('.main-header li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});
		
		
		//Disable dropdown parent link
		$('.navigation li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
	}
	
	
	//Revolution Slider
	if($('.main-slider .tp-banner').length){
		
		var MainSlider = $('.main-slider');
		var strtHeight = MainSlider.attr('data-start-height');
		var slideOverlay =  "'"+ MainSlider.attr('data-slide-overlay') +"'";
		
		$('.main-slider .tp-banner').show().revolution({
		  dottedOverlay: slideOverlay,
		  delay:5000,
		  startwidth:1200,
		  startheight:strtHeight,
		  hideThumbs:600,

		  thumbWidth:80,
		  thumbHeight:50,
		  thumbAmount:5,

		  navigationType:"bullet",
		  navigationArrows:"0",
		  navigationStyle:"preview3",

		  touchenabled:"on",
		  onHoverStop:"off",

		  swipe_velocity: 0.7,
		  swipe_min_touches: 1,
		  swipe_max_touches: 1,
		  drag_block_vertical: false,

		  parallax:"mouse",
		  parallaxBgFreeze:"on",
		  parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

		  keyboardNavigation:"off",

		  navigationHAlign:"center",
		  navigationVAlign:"bottom",
		  navigationHOffset:0,
		  navigationVOffset:50,

		  soloArrowLeftHalign:"left",
		  soloArrowLeftValign:"center",
		  soloArrowLeftHOffset:20,
		  soloArrowLeftVOffset:0,

		  soloArrowRightHalign:"right",
		  soloArrowRightValign:"center",
		  soloArrowRightHOffset:20,
		  soloArrowRightVOffset:0,

		  shadow:0,
		  fullWidth:"on",
		  fullScreen:"off",

		  spinner:"spinner4",

		  stopLoop:"off",
		  stopAfterLoops:-1,
		  stopAtSlide:-1,

		  shuffle:"off",

		  autoHeight:"off",
		  forceFullWidth:"on",

		  hideThumbsOnMobile:"on",
		  hideNavDelayOnMobile:1500,
		  hideBulletsOnMobile:"on",
		  hideArrowsOnMobile:"on",
		  hideThumbsUnderResolution:0,

		  hideSliderAtLimit:0,
		  hideCaptionAtLimit:0,
		  hideAllCaptionAtLilmit:0,
		  startWithSlide:0,
		  videoJsPath:"",
		  fullScreenOffsetContainer: ""
	  });
	}
	
	
	//Single Item Carousel
	if ($('.single-item-carousel').length) {
		$('.single-item-carousel').owlCarousel({
			loop:true,
			margin:125,
			nav:true,
			smartSpeed: 700,
			autoplay: 5000,
			navText: [ '<span class="fa fa-arrow-left"></span>', '<span class="fa fa-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				760:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				}
			}
		});
	}
	
	//Three Item Carousel
	if ($('.three-item-carousel').length) {
		$('.three-item-carousel').owlCarousel({
			loop:true,
			margin:125,
			nav:true,
			smartSpeed: 700,
			autoplay: 5000,
			navText: [ '<span class="fa fa-arrow-left"></span>', '<span class="fa fa fa-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				760:{
					items:2
				},
				1024:{
					items:3
				},
				1100:{
					items:3
				}
			}
		});
	}
	
	
	if ($('.client-testimonial-carousel').length && $('.client-thumbs-carousel').length) {

		var $sync1 = $(".client-testimonial-carousel"),
			$sync2 = $(".client-thumbs-carousel"),
			flag = false,
			duration = 500;

			$sync1
				.owlCarousel({
					loop:false,
					items: 1,
					margin: 0,
					nav: false,
					navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
					dots: false,
					autoplay: true,
					autoplayTimeout: 5000
				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = false;
						$sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});

			$sync2
				.owlCarousel({
					loop:false,
					margin:10,
					items: 1,
					nav: false,
					navText: [ '<span class="icon fa fa-long-arrow-left"></span>', '<span class="icon fa fa-long-arrow-right"></span>' ],
					dots: false,
					center: false,
					autoplay: true,
					autoplayTimeout: 5000,
					responsive: {
						0:{
				            items:1,
				            autoWidth: false
				        },
				        400:{
				            items:1,
				            autoWidth: false
				        },
				        600:{
				            items:1,
				            autoWidth: false
				        },
				        1000:{
				            items:1,
				            autoWidth: false
				        },
						1200:{
				            items:1,
				            autoWidth: false
				        }
				    },
				})
				
		.on('click', '.owl-item', function () {
			$sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
		})
		.on('changed.owl.carousel', function (e) {
			if (!flag) {
				flag = true;		
				$sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
				flag = false;
			}
		});
	}
	
	
	// Team Carousel
	if ($('.team-content-carousel').length && $('.team-thumbs-carousel').length) {

		var $sync3 = $(".team-content-carousel"),
			$sync4 = $(".team-thumbs-carousel"),
			flag = false,
			duration = 500;

			$sync3
				.owlCarousel({
					loop:false,
					items: 1,
					margin: 0,
					nav: false,
					navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
					dots: false,
					autoplay: true,
					autoplayTimeout: 5000
				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = false;
						$sync4.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});

			$sync4
				.owlCarousel({
					loop:false,
					margin: 15,
					items: 1,
					nav: true,
					navText: [ '<span class="icon fa fa-arrow-left"></span>', '<span class="icon fa fa-arrow-right"></span>' ],
					dots: false,
					center: false,
					autoplay: true,
					autoplayTimeout: 5000,
					responsive: {
						0:{
				            items:2,
				            autoWidth: false
				        },
				        600:{
				            items:3,
				            autoWidth: false
				        },
				        800:{
				            items:4,
				            autoWidth: false
				        },
				        1000:{
				            items:5,
				            autoWidth: false
				        },
						1200:{
				            items:5,
				            autoWidth: false
				        }
				    },
				})
				
		.on('click', '.owl-item', function () {
			$sync3.trigger('to.owl.carousel', [$(this).index(), duration, true]);
		})
		.on('changed.owl.carousel', function (e) {
			if (!flag) {
				flag = true;		
				$sync3.trigger('to.owl.carousel', [e.item.index, duration, true]);
				flag = false;
			}
		});

	}
	
	
	//Sponsors Carousel
	if ($('.sponsors-style-one .sponsors-carousel').length) {
		$('.sponsors-style-one .sponsors-carousel').owlCarousel({
			loop:true,
			margin:48,
			nav:false,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				800:{
					items:4
				},
				1024:{
					items:4
				},
				1200:{
					items:5
				}
			}
		});    		
	}

    
 
	
	// Fact Counter
	function factCounter() {
		if($('.fact-counter').length){
			$('.fact-counter .counter-column.animated').each(function() {
		
				var $t = $(this),
					n = $t.find(".count-text").attr("data-stop"),
					r = parseInt($t.find(".count-text").attr("data-speed"), 10);
					
				if (!$t.hasClass("counted")) {
					$t.addClass("counted");
					$({
						countNum: $t.find(".count-text").text()
					}).animate({
						countNum: n
					}, {
						duration: r,
						easing: "linear",
						step: function() {
							$t.find(".count-text").text(Math.floor(this.countNum));
						},
						complete: function() {
							$t.find(".count-text").text(this.countNum);
						}
					});
				}
				
			});
		}
	}
	
	
	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			var targetParent = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			if($(this).hasClass('active')!==true){
			$(targetParent).find('.accordion .acc-btn').removeClass('active');
			}
			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(targetParent).find('.accordion').removeClass('active-block');
				$(targetParent).find('.accordion .acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);
			}
		});	
	}
	
	
	//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}
	
	
	//Mixitup Gallery
	if($('.filter-list').length){
		$('.filter-list').mixItUp({});
	}
	
	
	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		});
	}
	
	
	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				subject: {
					required: true
				},
				message: {
					required: true
				}
			}
		});
	}
	
	
	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1000);
	
		});
	}
	
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',
			animateClass: 'animated',
			offset:       0,
			mobile:       true,
			live:         true
		  }
		);
		wow.init();
	}


/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
		factCounter();
	});
	
/* ==========================================================================
   When document is loaded, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
	});

    
    $('.sponsors-one').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
       
        
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
    
    
     $('.guardsSlider').owlCarousel({
         autoplayHoverPause: true,
    loop:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:false,
    nav: true,
         dots:false,
    margin:10,
         navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
    
	

})(window.jQuery);


$(document).ready( function (){
   $('.tp-banner a').click ( function (){
      //  alert('hi');
       $(".centerContact ul li:first-child").removeClass("active"); 
       $(".centerContact ul li:nth-child(2)").addClass("active"); 
       
       $("#datos").removeClass("active in"); 
       $("#servicios").addClass("active in"); 
    }); 
    
     $(".set > a").on("click", function (e) {
                e.preventDefault();


                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this)
                        .siblings(".content")
                        .slideUp(200);
                    $(".set > a i")
                        .removeClass("fa-minus")
                        .addClass("fa-plus");
                } else {
                    $(".set > a i")
                        .removeClass("fa-minus")
                        .addClass("fa-plus");
                    $(this)
                        .find("i")
                        .removeClass("fa-plus")
                        .addClass("fa-minus");
                    $(".set > a").removeClass("active");
                    $(this).addClass("active");
                    $(".content").slideUp(200);
                    $(this)
                        .siblings(".content")
                        .slideDown(200);
                }
            });

            $(function () {
                $('input[type=file]').change(function () {
                    var t = $(this).val();
                    var labelText = 'File : ' + t.substr(12, t.length);
                    $(this).prev('label').text(labelText);
                })
            });
    
     $.fn.extend({
            popoverClosable: function (options) {
                var defaults = {
                    template: '<div class="popover">\
<div class="arrow"></div>\
<div class="popover-header">\
<button type="button" class="close" data-dismiss="popover" aria-hidden="true">&times;</button>\
<h4 class="popover-title"></h4>\
</div>\
<div class="popover-content"></div>\
</div>'
                };
                options = $.extend({}, defaults, options);
                var $popover_togglers = this;
                $popover_togglers.popover(options);
                $popover_togglers.on('click', function (e) {
                    e.preventDefault();
                    $popover_togglers.not(this).popover('hide');
                });
                $('html').on('click', '[data-dismiss="popover"]', function (e) {
                    $popover_togglers.popover('hide');
                });
            }
        });

        $(function () {
            $('[data-toggle="popover"]').popoverClosable();
        });
    
     function valWindowSize() {
            "use strict";
            var width = $(window).width();
            if (width < 768) {
                $('ul[data-id="menu"]').removeClass();
                $('ul[data-id="menu"]').addClass('nav navbar-nav');
            } else {
                $('ul[data-id="menu"]').removeClass();
                $('ul[data-id="menu"]').addClass('nav nav-tabs');
            }
        }

    
       $(".tab_content").hide();
                $(".tab_content:first").show();

                /* if in tab mode */
                $("ul.tabs li").click(function () {

                    $(".tab_content").hide();
                    var activeTab = $(this).attr("rel");
                    $("#" + activeTab).fadeIn();

                    $("ul.tabs li").removeClass("active");
                    $(this).addClass("active");

                    $(".tab_drawer_heading").removeClass("d_active");
                    $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

                });
                /* if in drawer mode */
                $(".tab_drawer_heading").click(function () {

                    $(".tab_content").slideUp();
                    var d_activeTab = $(this).attr("rel");
                    $("#" + d_activeTab).slideDown();

                    $(".tab_drawer_heading").removeClass("d_active");
                    $(this).addClass("d_active");

                    $("ul.tabs li").removeClass("active");
                    $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
                });


                /* Extra class "tab_last" 
                   to add border to right side
                   of last tab */
                $('ul.tabs li').last().addClass("tab_last");

                var tabs = document.getElementsByClassName('Tab');

                Array.prototype.forEach.call(tabs, function (tab) {
                    tab.addEventListener('click', setActiveClass);
                });

                function setActiveClass(evt) {
                    Array.prototype.forEach.call(tabs, function (tab) {
                        tab.classList.remove('active');
                    });

                    evt.currentTarget.classList.add('active');
                }

            /*
                Load more content with jQuery - May 21, 2013
                (c) 2013 @ElmahdiMahmoud
            */   

           /* $(function () {
                $(".dataLoad div.default-gallery-item").slice(0, 8).show();
                $(".loadMore").on('click', function (e) {
                    e.preventDefault();
                    $(".dataLoad  div.default-gallery-item:hidden").slice(0, 8).slideDown();
                    if ($(".dataLoad  div.default-gallery-item:hidden").length == 0) { 
                        $("#load").fadeOut('slow');
                        $('.loadMore').replaceWith("<p class='noData'>No More Images</p>");
                    }
                   
                });
            });*/


	    $(function () {

		//var first_key  = "<?php echo $first_key; ?>";
		
		var first_key  = "facility";
	//var first_key = $("#first).val();
		//alert(first_key);
		//var val = $(".Tabs__tab Tab active").attr('rel');
//alert(val);
                loadimages(first_key);
            });
          
            
            function loadimages(rel){

		//var first_key  = "<?php echo $first_key; ?>";
		//alert(first_key);
                //$(".dataLoad div.default-gallery-item").slice(0, 8).show();
 		$("."+rel).slice(0, 8).show();
                $(".loadMore").on('click', function (e) {
                    var training_key = $(this).attr('training_keys');
                    e.preventDefault();
                    $(".dataLoad  div."+ training_key +":hidden").slice(0, 8).slideDown();
                    if ($(".dataLoad  div.default-gallery-item:hidden").length == 0) { 
                        $("#load").fadeOut('slow');
                        $('.loadMore').replaceWith("<p class='noData'>No More Images</p>");
                    }
                   
                }); 
            }
            
            
            
            $(".Tab").click(function(){
		var rel = $(this).attr('rel');
                loadimages(rel);
            });


          
});

