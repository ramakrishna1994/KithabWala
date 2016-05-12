/*

NNNNNNNNNNNNNNNNNNmdhs+-                     .:+shdmNNNNNmmdys+:`                        
MMMMMMMMMMMMMMMMMMMMMMMMms-              ./ymNMMMMMMMMMMMMMMMMMMNms/`                    
MMMMMMMMMMMMMMMMMMMMMMMMMMNs`          /hNMMMMMMMMMMMMMMMMMMMMMMMMMMNy:                  
MMMMMMMMMMMMMMMMMMMMMMMMMMMMh        /dMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMd/                
MMMMMMMMMMMddddmNMMMMMMMMMMMMo     .hMMMMMMMMMMMMMMMMMNNMMMMMMMMMMMMMMMMMh.              
MMMMMMMMMMN``````/NMMMMMMMMMMm    :NMMMMMMMMMMMMds+:.....-:oymMMMMMMMMMMMMm:             
MMMMMMMMMMN       /MMMMMMMMMMM`  /NMMMMMMMMMMNs-`            `:hMMMMMMMMMMMN:            
MMMMMMMMMMN       +MMMMMMMMMMM` .NMMMMMMMMMMd-                 `/NMMMMMMMMMMm`           
MMMMMMMMMMN    `./NMMMMMMMMMMd  hMMMMMMMMMMd`                    -NMMMMMMMMMMs           
MMMMMMMMMMMddddmmMMMMMMMMMMMM: -MMMMMMMMMMM.                      /MMMMMMMMMMN`          
MMMMMMMMMMMMMMMMMMMMMMMMMMMMo  oMMMMMMMMMMh                        NMMMMMMMMMM:          
MMMMMMMMMMMMMMMMMMMMMMMMMMm/   sMMMMMMMMMMo                        dMMMMMMMMMM/          
MMMMMMMMMMMMMMMMMMMMMMMNh/`    sMMMMMMMMMMs                    .   dMMMMMMMMMM/          
MMMMMMMMMMMmmmmmmmddyo/.       +MMMMMMMMMMm                  .smy:.MMMMMMMMMMM.          
MMMMMMMMMMN.....```            .MMMMMMMMMMM/               `/mMMMMmMMMMMMMMMMd           
MMMMMMMMMMN                     yMMMMMMMMMMN/             -hMMMMMMMMMMMMMMMMM:           
MMMMMMMMMMN         ```   .-.`  .mMMMMMMMMMMNs.          +NMMMMMMMMMMMMMMMMMo            
MMMMMMMMMMN       `o/-+s` hy:d   -NMMMMMMMMMMMms-`       .oNMMMMMMMMMMMMMMMy             
MMMMMMMMMMN       :y  +s` `.sm    -dMMMMMMMMMMMMMmhso+//+oydMMMMMMMMMMMMMMMms-           
MMMMMMMMMMN      :ooo: ./ohhs.     `sNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMN+          
MMMMMMMMMMN     sM:   o+-.d          -yNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMm/           
MMMMMMMMMMN     mM:   /y..d            .odNMMMMMMMMMMMMMMMMMMMMMMMNmdMMMMMNs`            
MMMMMMMMMMN     -dmo:--:+s-               ./sdNNMMMMMMMMMMMMMNNmy+-  :yNMd-              
:::::::::::       .:///:.                     `-:/+osyyysso+/-`        ./                
                                                                                      
*/

var el = {
	loading		:	$('#loading'),
	header 		: 	$('#banner'),
	reservation	: 	$('.reservations-wrapper'),
	bannerMenu 	: 	$('#banner .main-nav'),
	lowerMenu 	: 	$('#content-wrapper .main-nav'),
	lowerBrand 	: 	$('#content-wrapper .branding'),
	content 	: 	$('#content-wrapper'),
	menus 		: 	$('#content-wrapper section#menu'),
	about 		: 	$('#content-wrapper section#about'),
	gallery 	: 	$('#photo-gallery'),
	visit 		: 	$('#content-wrapper section#visit')		

};

var win = {
	scrolled 	:	'',
	height		:	''
};

var top = {
	nav			:	'',
	content		:	'',
	menus		:	'',
	about		:	'',
	visit		:	''
};

var mobileBreak = 1080;
var lastScrollTop = 0;
var isFirefox = typeof InstallTrigger !== 'undefined'; 

$(document).ready(function(){
	$(this).scrollTop(0);
    outdatedBrowser({
        bgColor: '#f25648',
        color: '#ffffff',
        lowerThan: 'borderSpacing',
        languagePath: $templateURL+'/assets/js/vendor/outdatedbrowser/lang/en.html'
    })

	el.loading.find('#animation').addClass('start');
	
	incrementProgress(15);
	
	if($ie){
		$('html').addClass('ie');
	}
	if(isFirefox){
		$('html').addClass('ff');
		
	}
		
	incrementProgress(30);	

		 
	// smooth scrolling for all anchors with hashbang
	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      // add a little offset for the menu nav
	      if($(this).parent().parent().parent().attr('id') == 'menu-nav'){
		     	offset = -200;
		      if($(this).attr('id') == 'drinks-menu-btn'){			      
			     target = $('#menu-wrapper .drinks'); 
		      }
	      } else if(target[0].id == 'menu'){
		      if(!$('html').hasClass('mobile')){
		     	 offset = 200;
		      } else{
			      offset = 0;
		      }
		  } else{
		      offset = 0;
	      }
	      
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top + offset
	        }, 666);
	        return false;
	      }
	    }
  	});
 	
	incrementProgress(70);	
	
  	el.reservation.find('.message h1').fitText(0.6, { maxFontSize: '150px' });
  	
  	el.about.find('h1').fitText(0.6);
  	el.about.find('#about-newsletter-signup-front span').fitText(1.8);
	el.about.find('#about-gallery-btn span.curved').arctext({radius: 200})
	
	// click something, do something
	el.about.find('#about-gallery-btn').click(function(e){
		$('html').addClass('gallery-open');

		if($('#photo-gallery').length == 0){
			$.ajax({
			    url: $templateURL+'/includes/gallery.php',
			    type: 'post',
			    success: function (data) { 
			    	$('body').append(data);
					setupGallery();
					$('#photo-gallery-close-btn span.curved').arctext({radius: 60})
			    }
			    
			});
		} else{
			if($('#photo-gallery').length > 0){
				setupGallery();
			}
		}
		e.preventDefault();
	}).hover(function(){
		el.about.find('#about-gallery-btn span.curved').arctext('set', {
			radius		: 60, 
			animation	: {
				speed	: 300,
				easing  : 'ease-out'
			}
		});
	}, function(){
		el.about.find('#about-gallery-btn span.curved').arctext('set', {
			radius		: 50, 
			animation	: {
				speed	: 300,
				easing  : 'ease-out'
			}
		});		
	});
	
	$('.branding .logo').click(function(e){
		e.preventDefault();
		if($('html').hasClass('mobile')){
			$('html').addClass('reveal-mobile-nav');
		} else{
			$('html,body').animate({
				'scrollTop' : 0
			}, 666)
		}
	});
	
	$('#mobile-menu-icon').click(function(){
		$('html').addClass('reveal-mobile-nav');
		$(this).removeClass('shown');
	});

	$('#mobile-menu a, #mobile-menu .close-btn').click(function(){
		$('html').removeClass('reveal-mobile-nav');
	});
	
	$(document).on('click','#photo-gallery-close-btn', function(e){
		$('#photo-gallery').removeClass('loaded');
		$('html').removeClass('gallery-open');
		$('#photo-gallery-images li.active').removeClass('active');
		$('#photo-gallery-images').css('left','0');
		if(!$ie){
			History.replaceState(null, $baseTitle, $baseURL+"#about");
		}
		$(window).scrollTop($('section#about').offset().top);
		setTimeout(function(){
			$('#photo-gallery-images').scrollTop(0);
		},500);
		e.preventDefault();
	}).on('mouseenter','#photo-gallery-close-btn',function(){
		$(document).find('#photo-gallery-close-btn span.curved').arctext('set', {
			radius		: 80, 
			animation	: {
				speed	: 300,
				easing  : 'ease-out'
			}
		});
	}).on('mouseleave','#photo-gallery-close-btn',function(){
		$(document).find('#photo-gallery-close-btn span.curved').arctext('set', {
			radius		: 60, 
			animation	: {
				speed	: 300,
				easing  : 'ease-out'
			}
		});		
		
	});
	
	$(document).on('click','#photo-gallery-nav a', function(e){
		$picCount = $('#photo-gallery-images li').length;
		$picW = $(window).width();

		if($(this).attr('id') == 'photo-gallery-right'){
			$myIndex = $('#photo-gallery-images li.active').index()+1;
			$moveMe = $myIndex * $picW *-1;
			if($myIndex == $picCount){
				$('#photo-gallery-images').css('left', '0');
				$('#photo-gallery-images li:nth-child(1)').addClass('active');
				$currIndex = 1;				
			} else{
				$('#photo-gallery-images li.active').addClass('prev').removeClass('active');
				$('#photo-gallery-images').css('left', $moveMe);
				$('#photo-gallery-images li.prev').next().addClass('active');					
			}				
		} else{
			$myIndex = $('#photo-gallery-images li.active').index() - 1;
			$moveMe = $myIndex * $picW *-1;
			if($myIndex == -1){
				$('#photo-gallery-close-btn').click();
			} else{
				$('#photo-gallery-images li.active').addClass('prev').removeClass('active');
				$('#photo-gallery-images').css('left', $moveMe);
				$('#photo-gallery-images li.prev').prev().addClass('active');
			}
		}
		
		if($myIndex > 0){
			$('#photo-gallery-left').removeClass('hidden');
		} else{
			$('#photo-gallery-left').addClass('hidden');

		}
		
		$('#photo-gallery-images li.prev').removeClass('prev');
		$currIndex = $('#photo-gallery-images li.active').index()+1;
	
		$('#photo-gallery-count-current').html($currIndex);
		e.preventDefault();
	});
	
	$(document).on('click','#photo-gallery-images', function(){
		$('#photo-gallery-right').click();
	});
	
	$(document).on('click','#mobile-close-btn', function(e){
		$('#photo-gallery-close-btn').click();
		e.preventDefault();
	});

	// newsletter signup
	el.about.find('#about-newsletter-signup-back form input[type=email]').focus(function(){
		$(this).parent().parent().parent().addClass('focused');
	});

	el.about.find('#about-newsletter-signup-back form input[type=email]').blur(function(){
		$(this).parent().parent().parent().removeClass('focused');
	});
	
	$('.branding .reservations, #mobile-menu #reservations-btn').click(function(e){
		$('html').addClass('reserving');
		if(!$ie){
			History.replaceState(null, $baseTitle, $baseURL+"#reservations");
		}
		e.preventDefault();
	});	

	$('.reservations-wrapper .close-btn, .reservations-wrapper .cancel-btn').click(function(e){
		$('html').removeClass('reserving');
		if(!$ie){
			History.replaceState(null, $baseTitle, $baseURL);
		}
		e.preventDefault();
	});	


	el.menus.find('h3').click(function(){
		if($(this).parent().hasClass('expand')){
			$(this).parent().removeClass('expand');
		} else{
			$('.menu.expand').removeClass('expand');
			$(this).parent().addClass('expand');
			if(!$('html').hasClass('mobile')){
				myOffset = -200;
			} else{
				myOffset = 0;
			}
			setTimeout(function(){
				$('html,body').animate({
					'scrollTop' : parseInt($('.menu.expand').offset().top) + myOffset
				},222);
			}, 600);
		}
		$('.menu ul.col').attr('style','');
	});
	
	

	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
	    input.val('');
	    input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
	    input.addClass('placeholder');
	    input.val(input.attr('placeholder'));
	  }
	}).blur();
	
	//incrementProgress(100);	
});

function setupGallery(){
	$picCount = $('#photo-gallery-images li').length;
	//$('html').addClass('gallery-open');
	$picWidth = $(window).width();
	if(!$ie){
		History.replaceState(null, null, $baseURL+"#gallery");
	}
	
	$('#photo-gallery-left').addClass('hidden');
	
	if($('html').hasClass('mobile')){
		//$('#photo-gallery-images').height($picCount * $(window).height()/2);
		$('#photo-gallery').css('opacity','1');	
		$('#photo-gallery').addClass('loaded');	
	} else{
		$('#photo-gallery-images').width($picCount * $picWidth);
		$('#photo-gallery-images li').width($picWidth);
		$('#photo-gallery').css('opacity','1');	
		$('#photo-gallery-count-current').html('1');
		$('#photo-gallery-images li:nth-child(1)').addClass('active');
		$('#photo-gallery-count-total').html($picCount);
		$('#photo-gallery').addClass('loaded');		
	}
	$('#photo-gallery-images li').anystretch();
}

function scrollStuff(scrolled, winH, winW){
	win.scrolled = scrolled;
	win.height = winH;
	win.width = winW;
	top.content = el.content.offset().top;
	top.menus = el.menus.offset().top;
	top.about = el.about.offset().top;
	top.visit = el.visit.offset().top;

	var menuH = el.bannerMenu.find('.nav-item').actual('outerHeight');
	
	// nav hover states to only show when at the top of the page
 	if(win.scrolled > 10){ 
		el.header.addClass('scrolled');
 	} else{
		el.header.removeClass('scrolled');	 	
 	}
 	
 	if(isFirefox){
 		el.bannerMenu.css('margin-top',win.scrolled);
 	}
 	
 	if($('html').hasClass('reveal-mobile-nav')){
	 	//$('html').removeClass('reveal-mobile-nav');
 	}

	// add styles to lower menu for temporary movement with scroll and repositioning
    if(win.scrolled > top.content/2 + ($('.nav-item').actual('outerHeight')/2)){
       el.lowerMenu.addClass('move');
    } else{
	   el.lowerMenu.removeClass('move'); 
    }
    
    // fix lower menu to top of screen
    if(win.scrolled > win.height) {
       el.lowerMenu.addClass('sticky');
    } else{
	   el.lowerMenu.removeClass('sticky'); 
    }
    
    // do stuff when first section is reached
    if(win.scrolled > top.content-10){
    	el.lowerBrand.addClass('tucked');
    	//el.bannerMenu.hide();
    } else{
    	el.lowerBrand.removeClass('tucked');
		if(!$('html').hasClass('loading') && !$('html').hasClass('mobile') && !$('html').hasClass('ie') && !isFirefox){
			// subtle parallax on header photo
			$('#banner #background').css({
				'transform': 'translateY(' + ((win.scrolled * .2) + 0) + 'px) scale('+(1 + (win.scrolled/9000))+')'
			});

		}		
		
		$('body').attr('class','banner');
		if(!$('html').hasClass('mobile')){
			el.bannerMenu.show();
			
		} 
		if(!$ie){
		 	History.replaceState(null, $baseTitle, $baseURL);
		 }
    }

	var st = win.scrolled;

	if($('html').hasClass('mobile') && win.scrolled < el.menus.offset().top){
		$('#mobile-menu-icon').removeClass('shown');
	} else{
		if (st > lastScrollTop && $('html').hasClass('mobile')){
		   $('#mobile-menu-icon').removeClass('shown');
		} else {
		  $('#mobile-menu-icon').addClass('shown');
		}		
		
	}
	lastScrollTop = st;

	// set body class for menu
	if(win.scrolled > top.menus  && win.scrolled < top.about-(win.height/3)){
		$('body').attr('class',el.menus.attr('id'));	
	}

	// fade in/out individual menus based on position
	el.menus.find('.menu').each(function(){
		myTop = $(this).offset().top;
		myBottom = $(this).offset().top + $(this).outerHeight();
		myID = $(this).attr('id');
		// if the menu is coming into view (scroll amount plus the window height) 
		if(win.scrolled+((win.height)) >= myTop + win.height/2 && win.scrolled <= myBottom - 300){
			$(this).addClass('in-view');
			clearTimeout( $.data( this, "scrollCheck" ) );
			
			$.data( this, "scrollCheck", setTimeout(function() {
				if($('.in-view').length > 0){
					myURL = $('.menu.in-view').attr('id');
					el.menus.find('#menu-nav a#'+myURL+'-btn').addClass('active');
					el.menus.find('#menu-nav a:not(#'+myURL+'-btn)').removeClass('active');
					el.menus.find('#menu-backgrounds div#'+myURL+'-bg').addClass('shown');
					el.menus.find('#menu-backgrounds div:not(#'+myURL+'-bg)').removeClass('shown');
				} else{
					myURL = '';
				}
				if(!myURL){
					myURL = '';
				}
				

				if($('.in-view').hasClass('drinks')){
					el.menus.find('#menu-nav li.drinks').addClass('shown');
					if(!$ie){
						History.replaceState(null, $baseTitle, $baseURL+"#"+myURL);
					}
				} else{
					el.menus.find('#menu-nav li.drinks').removeClass('shown');
					if(!$ie){
						History.replaceState(null, $baseTitle, $baseURL+"#"+myURL);
					}
				}
				
			}, 250) );

		} else{
			$(this).removeClass('in-view');
		}
	});

	// show/hide navigation for menus
	if(win.scrolled > top.content-10 && win.scrolled < (top.about - (win.height/2))){
		el.menus.find('#menu-nav').addClass('shown');
	} else{
    	el.menus.find('#menu-nav').removeClass('shown');
	}

	// set body class for about
	if(win.scrolled > top.about-(win.height/3) && win.scrolled < top.visit){
		$('body').attr('class',el.about.attr('id'));	
		clearTimeout( $.data( this, "scrollCheck" ) );
		$.data( this, "scrollCheck", setTimeout(function() {
			if(!$ie){
				History.replaceState(null, $baseTitle, $baseURL+"#about");
			}
		},200));

		setTimeout(function(){
			el.about.find('#about-gallery-btn span.curved').arctext('set', {
				radius		: 50, 
				animation	: {
					speed	: 300,
					easing  : 'ease-out'
				}
			});
		},600);
	} else{
		setTimeout(function(){
			el.about.find('#about-gallery-btn span.curved').arctext('set', {
				radius		: 300, 
				animation	: {
					speed	: 100,
					easing  : 'ease-out'
				}
			});		
		},100);
	}

	// set body class for visit
	if(win.scrolled > top.visit-(win.height/3)){
		$('body').attr('class',el.visit.attr('id'));	
		clearTimeout( $.data( this, "scrollCheck" ) );
		$.data( this, "scrollCheck", setTimeout(function() {
			if(!$ie){
				History.replaceState(null, $baseTitle, $baseURL+"#visit");
			}
		},200));
	}

}

// preloading stuff
var oldNumber = 0;
function incrementProgress(percentage){
	wWidth = $(window).width();
	el.loading.find('#status').css('width',wWidth * percentage/100);
	if(percentage == 100){
		setTimeout(function(){
			$('html').removeClass('loading');
			el.loading.addClass('removing').delay(123).animate({'opacity':0},123, function(){
				$(this).remove();
			});				
		}, 666);
	}
}

$(document).on('mousemove load', function(e){
    $('#loading #animation').css({
       left:  e.pageX,
       top:   e.pageY
    });
});

// adjustments for initial load, window resized, or whenever else it may be needed
function adjustLayout(){
	// position the lower nav to line up with banner nav for scroll transition effect
	win.scrolled = $(window).scrollTop();
	
	if($('html').hasClass('gallery-open')){
		$('#photo-gallery-images li').width($(window).width());
		$('#photo-gallery-images li').anystretch();
	}
	
	if($('html').hasClass('mobile')){
		$('.menu ul.col').attr('style','');
	} else{
		el.menus.find('.menu').each(function(){
			var maxHeight = 0;
			$('ul.col', this).each(function(){
			    $(this).attr('style','');
			    if ($(this).height() > maxHeight) {
			      maxHeight = $(this).height();
			    }
			}).height(maxHeight);
		});		
	}

	if($(window).height() <= 700){
		$('html').addClass('short');
	} else{
		$('html.short').removeClass('short');
	}
	maxHeight = -1;
	$('#banner .main-nav blockquote').each(function(){
		maxHeight = maxHeight > $(this).actual('height') ? maxHeight : $(this).actual('height');
	});
	
	$('#banner .main-nav blockquote').each(function() {
    	$(this).height(maxHeight);
	});


	top.nav = Math.round(($(window).height()/2 - el.bannerMenu.find('li').actual('outerHeight')/2) + el.bannerMenu.find('.port').actual('height') + 50 + (el.bannerMenu.find('.nav-item').actual('outerHeight'))/2)
	
	//console.log($(window).height()/2  - el.bannerMenu.find('li').actual('outerHeight')/2);
	
	el.lowerMenu.css('top',top.nav);
	
	incrementProgress(100);	
}

$(window).smartresize(function(){
	scrollStuff($(window).scrollTop(), $(window).height(), $(window).width());
	if($(window).width() <= mobileBreak){
		$('html').addClass('mobile');
	} else{
		$('html').removeClass('mobile');
	}
	
});

$(window).load(function(){

	$hash = window.location.hash;
	if($hash == '#reservations'){
		setTimeout(function(){
			$('.branding a.reservations').click();
			if(!$ie){
				History.replaceState(null, null, $baseURL+"#reservations");
			}
		},300);
	} else if($hash == '#gallery'){
		setTimeout(function(){
			$('a#about-gallery-btn').click();
		},300);
		
	} else{
		
	}
	
	scrollStuff($(window).scrollTop(), $(window).height(), $(window).width());
	
	if($(window).width() <= mobileBreak){
		$('html').addClass('mobile');
	} else{
		$('html').removeClass('mobile');
	}
	setTimeout(adjustLayout, 500);
});

$(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
        $('#photo-gallery-left').click();
        break;
        
        case 39: // right
        $('#photo-gallery-right').click();
        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});

$(window).scroll(function() {
	scrollStuff($(window).scrollTop(), $(window).height(), $(window).width());
});