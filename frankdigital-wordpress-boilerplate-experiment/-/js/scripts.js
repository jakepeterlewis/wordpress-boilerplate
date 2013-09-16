//@codekit-prepend "libs/jquery.royalslider.min.js";

// DOM Ready
$(function() {
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});


$(document).ready(function() {
		
	// executes when HTML-Document is loaded and DOM is ready
	$('.slider').royalSlider({
		arrowsNav: true,
		sliderDrag: false,
		imageAlignCenter: true,
		loop: true,
		keyboardNavEnabled: false,
		controlsInside: false,
		arrowsNavAutoHide: false,
		//imageScaleMode: 'fill',
		addActiveClass: true,
		slidesSpacing: 0,
		autoScaleSlider: false,
		controlNavigation: 'none',
		navigateByClick: false,
		startSlideId: 0,
		autoPlay: false,
		transitionType:'move'
	});
	
	// executes when HTML-Document is loaded and DOM is ready
	$('.slider-top').royalSlider({
		arrowsNav: true,
		sliderDrag: false,
		imageAlignCenter: true,
		loop: true,
		numImagesToPreload: 3,
		keyboardNavEnabled: false,
		controlsInside: false,
		arrowsNavAutoHide: false,
		imageScaleMode: 'fill',
		addActiveClass: true,
		slidesSpacing: 0,
		autoScaleSlider: true,
		controlNavigation: 'bullets',
		navigateByClick: true,
		startSlideId: 0,
		autoPlay: false,
		transitionType:'move'
	});
	
	var slider = $(".slider").data('royalSlider');

	$('.next-slide').click(function(){
		slider.prev();
	});
	$('.prev-slide').click(function(){
		slider.next();
	});
	
	var minDistance = 0;
	var startDistance = 155;
	var headerThreshold = startDistance - minDistance;
	var isScrolled = false;
	var $body = $('body');
	$(window).scroll(function() {
		var scrollTop = $(document).scrollTop();
		if (scrollTop > headerThreshold && !isScrolled) {
			$body.addClass('scrolled');
			isScrolled = true;
		} else if(scrollTop <= headerThreshold && isScrolled) {
			$body.removeClass('scrolled');
			isScrolled = false;
		}
	});

}); /* end of as page load scripts */

$(window).load(function () {
	$('body').addClass('loaded');
});

/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );

// Konami
var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
$(document).keydown(function(e) {
	kkeys.push( e.keyCode );
	if ( kkeys.toString().indexOf( konami ) >= 0 ){
		$(document).unbind('keydown',arguments.callee);
		
		$('body').append("<div class='container'><div class='pacman-holder moving'><div class='ghost ghost1'></div><div class='ghost ghost2'></div><div class='ghost ghost3'></div><div class='ghost ghost4'></div><div class='pacman-container'><div class='pacman-body'></div><div class='pacman-mouth'><div class='pacman'></div></div></div></div></div>");
	}
});