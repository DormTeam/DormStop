/* --------------------------------------------
 READY FUNCTION
-------------------------------------------- */	
$(document).ready(function() {
		
	/* --------------------------------------------
	 SCROLL NAVIGATION
	-------------------------------------------- */		
		$('.scroll').bind('click', function(event) {
			var $anchor = jQuery(this);
			var headerH = jQuery('#navigation').outerHeight();
				$('html, body').stop().animate({					
					scrollTop : $($anchor.attr('href')).offset().top + 1 + "px"
				}, 1200, 'easeInOutExpo');	
			event.preventDefault();
		});
		
	/* --------------------------------------------
	 PORTFOLIO SCRIPT / FILTERS
	-------------------------------------------- */			
		var $proJects = $('#projects').isotope();
			// filter items on button click
			$('#filters').on( 'click', 'li', function() {
			$(this).parent().find('li.active').removeClass('active');    
			$(this).addClass('active');
				var filterValue = $(this).attr('data-filter');
					$proJects.isotope({
					filter: filterValue
			});
		}); 
		
	/* --------------------------------------------
	 MENU HIDE AFTER CLICK --  mobile devices
	-------------------------------------------- */
		$('.nav li a').click(function () {
			 $('.navbar-collapse').removeClass('in');
		});

	/* --------------------------------------------
	 FIXED MENU ON SCROLL
	-------------------------------------------- */
		$("#sticky-section").sticky({topSpacing:0});	
	
	/* --------------------------------------------
	 ANIMATED ITEMS
	-------------------------------------------- */
		$('.animated').appear(function() {
			var elem = $(this);
				var animation = elem.data('animation');
					if ( !elem.hasClass('visible') ) {
					var animationDelay = elem.data('animation-delay');
						if ( animationDelay ) {			
							setTimeout(function(){
								elem.addClass( animation + " visible" );
							}, animationDelay);			
						} else {
					elem.addClass( animation + " visible" );
				}
			}
		});
	
	/* --------------------------------------------
	 ACTIVE NAVIGATION
	-------------------------------------------- */
		$('body').scrollspy({ 
			target: '#topnav',
			offset: 95
		})	

	/* --------------------------------------------
	 EFFECT OVERLAY 
	-------------------------------------------- */
		if (Modernizr.touch) {
			// show the close overlay button
			$(".close-overlay").removeClass("hidden");
			// handle the adding of hover class when clicked
			$(".img").click(function(e){
				if (!$(this).hasClass("hover")) {
					$(this).addClass("hover");
				}
			});
			// handle the closing of the overlay
			$(".close-overlay").click(function(e){
				e.preventDefault();
				e.stopPropagation();
				if ($(this).closest(".img").hasClass("hover")) {
					$(this).closest(".img").removeClass("hover");
				}
			});
		} else {
			// handle the mouseenter functionality
			$(".img").mouseenter(function(){
				$(this).addClass("hover");
			})
			// handle the mouseleave functionality
			.mouseleave(function(){
				$(this).removeClass("hover");
			});
		}
	
	/* --------------------------------------------
	 LIGHT BOX
	-------------------------------------------- */			
		$("a[data-rel^='prettyPhoto']").prettyPhoto({
			theme: "light_square",
		});	
	
	/* --------------------------------------------
	 CONTACT FORM
	-------------------------------------------- */		
		$('#contactform').bootstrapValidator({
			message: '',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {            
				contact_name: {
					validators: {
						notEmpty: {
							message: ''
						}
					}
				},
				contact_email: {
					validators: {
						notEmpty: {
							message: ''
						},
						emailAddress: {
							message: ''
						}
					}
				},			
				contact_message: {
					validators: {
						notEmpty: {
							message: ''
						}                    
					}
				}
			},
			submitHandler: function(validator, form, submitButton) {				
				$('.contact-form').addClass('ajax-loader');				
				var data = $('#contactform').serialize();				
				$.ajax({
						type: "POST",
						url: "process.php",					
						data: $('#contactform').serialize(),
						success: function(msg){
							$('.contact-form').removeClass('ajax-loader');
							$('.form-message').html(msg);
							$('.form-message').show();
							submitButton.removeAttr("disabled");
							resetForm($('#contactform'));
						},
						error: function(msg){
							$('.contact-form').removeClass('ajax-loader');
							$('.form-message').html(msg);
							$('.form-message').show();
							submitButton.removeAttr("disabled");
							resetForm($('#contactform'));
						}
				 });				 
				return false;
			},
		});		
		/* Contact Form 2 */
		$('#contactform1').bootstrapValidator({
				message: '',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {            
					contact_email: {
						validators: {
							notEmpty: {
								message: ''
							},
							emailAddress: {
								message: ''
							}
						}
					}			
				},
				submitHandler: function(validator, form, submitButton) {				
					$('.contact-form1').addClass('ajax-loader');				
					var data = $('#contactform1').serialize();				
					$.ajax({
							type: "POST",
							url: "subscription.php",					
							data: $('#contactform1').serialize(),
							success: function(msg){
								$('.contact-form1').removeClass('ajax-loader');
								$('.form-message1').html(msg);
								$('.form-message1').show();
								submitButton.removeAttr("disabled");
								resetForm($('#contactform1'));
							},
							error: function(msg){
								$('.contact-form1').removeClass('ajax-loader');
								$('.form-message1').html(msg);
								$('.form-message1').show();
								submitButton.removeAttr("disabled");
								resetForm($('#contactform1'));
							}
					 });				 
					return false;
				},
		});	
		function resetForm($form) {
			$form.find('input:text, input:password, input, input:file, select, textarea').val('');
			$form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
		}	
		
});
	
/* ---------------------------------------------------------------------
 LOAD FUNCTION
------------------------------------------------------------------------ */

$(window).load(function() {
	
	/* --------------------------------------------
	 PAGE LOADER
	-------------------------------------------- */
		$(".loader-item").delay(700).fadeOut();
		$("#pageloader").delay(800).fadeOut("slow");
		
		
	/* --------------------------------------------
	 HOME PAGE TEXT SLIDER
	-------------------------------------------- */		
		$('.text-slider').flexslider({
			animation: "slide",
			selector: ".slide-text li",
			controlNav: false,
			directionNav: false,
			slideshowSpeed: 4000,
			touch: true,
			useCSS: false,
			direction: "vertical",
			before: function(slider){        
			var height = $('.text-slider').find('.flex-viewport').innerHeight();
			$('.text-slider').find('li').css({ height: height + 'px' });
			}		
		});	
		
	/* --------------------------------------------
	 CLIENT 
	-------------------------------------------- */
		$("#flexiselDemo").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
					changePoint:480,
					visibleItems: 1
					},
					landscape: {
					changePoint:640,
					visibleItems: 2
					},
					tablet: {
					changePoint:768,
					visibleItems: 3
					}
				}
		});
		
	/* --------------------------------------------
	 TESTIMONIALS
	-------------------------------------------- */	
		$("#flexiselDemo1").flexisel({
			visibleItems: 3,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3500,
			pauseOnHover: false,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
				changePoint:480,
				visibleItems: 1
				},
				landscape: {
				changePoint:640,
				visibleItems: 2
				},
				tablet: {
				changePoint:768,
				visibleItems: 3
				}
			}
		});	
		
	/* --------------------------------------------
	 SPECIAL PACKAGE FLEX SLIDER
	-------------------------------------------- */	
		$(function() {
			$('#carousel').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: true,
				slideshow: false,
				itemWidth: 240,
				itemMargin: 4,
				asNavFor: '#slider'
			});
		
			$('#slider').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: true,
				slideshow: false,
				sync: "#carousel",
			});
		});
		
	/* -------------------------------------------- 
	 PORTFOLIO SCRIPTS
	-------------------------------------------- */
		$(function() {
			$('.gallery-col-4').imagesLoaded( function() {
				$('.gallery-col-4').isotope({
					layoutMode: 'masonry',
					itemSelector: '.gallery-items',
					transformsEnabled: false,
					resizesContainer: true   
				}); 
			});
			
			$(window).resize(function() { 
				$('.gallery-col-4').imagesLoaded( function() {
					$('.gallery-col-4').isotope({
					layoutMode: 'masonry',
					itemSelector: '.gallery-items',
					transformsEnabled: false,
					resizesContainer: true   
					}); 
				});
			});
		});
	
});
/* --------------------------------------------
 LOAD FUNCTION ENDS
-------------------------------------------- */