/* any js code that is likely to be used on most pages in this theme.  Assumes jQuery loaded */

// Code from twitter, to render a timeline.  

window.twttr = (function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0], t = window.twttr || {};
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src= "https://platform.twitter.com/widgets.js";	
  fjs.parentNode.insertBefore(js, fjs);
  t._e = []; 
  t.ready = function (f) { 
  	t._e.push(f); 
  };
  return t;
}(document, "script", "twitter-wjs"));



jQuery(document).ready(function(){
/*
var ix=1;
function waitForTwitter(){
	  //return false;
    if(jQuery('.twitter-timeline-rendered').css('display')){
      jQuery('.twitter-timeline-rendered').css('width','640px');
    }
    else{
        setTimeout(function(){
        	console.log(ix++);
          waitForTwitter();
        },300);
    }
}
 waitForTwitter();
*/

  jQuery('#block-menu-block-8 li.first ~ li').hide();
	
  jQuery('#block-menu-block-8 li.first').mouseover(function(){
    jQuery('#block-menu-block-8 li').show();
  });
  
  	
  jQuery('#block-menu-block-8 ul').mouseleave(function(){
    jQuery('#block-menu-block-8 li.first ~ li').hide();
  });
  
  


  
});
