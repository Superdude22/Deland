jQuery(document).foundation();
/* 
Main Functions
*/




/*	Skrollr */

/*! viewportSize | Author: Tyson Matanich, 2013 | License: MIT */
(function(n){n.viewportSize={},n.viewportSize.getHeight=function(){return t("Height")},n.viewportSize.getWidth=function(){return t("Width")};var t=function(t){var f,o=t.toLowerCase(),e=n.document,i=e.documentElement,r,u;return n["inner"+t]===undefined?f=i["client"+t]:n["inner"+t]!=i["client"+t]?(r=e.createElement("body"),r.id="vpw-test-b",r.style.cssText="overflow:scroll",u=e.createElement("div"),u.id="vpw-test-d",u.style.cssText="position:absolute;top:-1000px",u.innerHTML="<style>@media("+o+":"+i["client"+t]+"px){body#vpw-test-b div#vpw-test-d{"+o+":7px!important}}<\/style>",r.appendChild(u),i.insertBefore(r,e.head),f=u["offset"+t]==7?i["client"+t]:n["inner"+t],i.removeChild(r)):f=n["inner"+t],f}})(this);

 /**
 * This demo was prepared for you by Petr Tichy - Ihatetomatoes.net
 * Want to see more similar demos and tutorials?
 * Help by spreading the word about Ihatetomatoes blog.
 * Facebook - https://www.facebook.com/ihatetomatoesblog
 * Twitter - https://twitter.com/ihatetomatoes
 * Google+ - https://plus.google.com/u/0/109859280204979591787/about
 * Article URL: http://ihatetomatoes.net/how-to-create-a-parallax-scrolling-website/
 */

( function( $ ) {
	
	// Setup variables
	$window = $(window);
	$slide = $('.homeSlide');
	$cartSlide = $('.cartSlide');
	$slideTall = $('.homeSlideTall');
	$slideTall2 = $('.homeSlideTall2');
	$body = $('body');
	
    //FadeIn all sections   
	$slide.imagesLoaded( function() {
		setTimeout(function() {
		      
		      // Resize sections
		      adjustWindow();
		      
		      // Fade in sections
			  $body.removeClass('loading').addClass('loaded');
			  
		}, 800);
	});
	
	function adjustWindow(){
		
		// Init Skrollr
		var s = skrollr.init({
			smoothScrolling: false,
		    render: function(data) {
		    
		        //Debugging - Log the current scroll position.
		        //console.log(data.curTop);
		    }
		});
		
		
		if (s.isMobile()) {
    		s.destroy();
		}
		
		// Get window size
	    winH = $window.height();
	    
	    // Keep minimum height 550
	    if(winH <= 550) {
			winH = 550;
		} 
	    
	    // Resize our slides
	    $slide.height(winH);
	    $cartSlide.height(winH*0.5);
	    $slideTall.height(winH*2);
	    $slideTall2.height(winH*3);
	    
	    // Refresh Skrollr after resizing our sections
	    s.refresh($('.homeSlide'));
	    
	}
		
} )( jQuery );

( function( $ ) {
	 var sticky  = document.getElementById("thingy"),
      sticky2 = sticky.cloneNode(true);

  sticky2.style.position = "fixed";
  sticky2.className += "at-top";
  document.body.appendChild(sticky2);

  function stickIt(){
    sticky2.style.visibility = sticky.getBoundingClientRect().top<0 ? "visible" : "hidden";
  }

  stickIt();
  window.addEventListener("scroll", stickIt, false );
	
		
} )( jQuery );



    
( function( $ ) {
	// Function to slabtext the H1 headings
        $("h5").slabText({
            // Don't slabtext the headers if the viewport is under 380px
            "viewportBreakpoint":380
        });

} )( jQuery );









/* 
These functions make sure WordPress 
and Foundation play nice together.
*/

jQuery(document).ready(function() {
    
    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();
    
	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );
	
	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video'/>");

});