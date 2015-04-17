/* any js code that is likely to be used on most pages in this theme.  Assumes jQuery loaded */

// Code from twitter, to render a timeline.  With an added callback 
window.twttr = (function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0], t = window.twttr || {};
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src= "https://platform.twitter.com/widgets.js";
  // added callback:
	js.setAttribute('onload', "twttr.events.bind('rendered',function(e) {Timeline.onLoad(e)});");
	
  fjs.parentNode.insertBefore(js, fjs);
  t._e = []; 
  t.ready = function (f) { 
  	t._e.push(f); 
  };
  return t;
}(document, "script", "twitter-wjs"));



jQuery(document).ready(function(){
	//twttr.widgets.createFollowButton('iJETIntl', document.getElementById('twittterfoot3'));
 
  var data;
    document.addEventListener('onTimelineRender', function(e) {
    Timeline.scrape(e.detail.timeline); // copies the elements we want from Twitter's iframe and puts them in our DOM
  });
 
 
  jQuery('#block-menu-block-8 li.first ~ li').hide();
	
  jQuery('#block-menu-block-8 li.first').mouseover(function(){
    jQuery('#block-menu-block-8 li').show();
  });
  
  	
  jQuery('#block-menu-block-8 ul').mouseleave(function(){
    jQuery('#block-menu-block-8 li.first ~ li').hide();
  });
  
  


  
});
