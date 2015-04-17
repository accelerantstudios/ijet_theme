
/*
Timeline = {
  onLoad: function(e) {
    var onRender = new CustomEvent("onTimelineRender", {
      detail: {
        timeline: e.target
      }
    });
    document.dispatchEvent(onRender);
  },
  scrape: function(target) {
    var tDoc = target.contentWindow.document;
    var tweetText = tDoc.querySelectorAll('.e-entry-title')[0].innerHTML;
    jQuery('#twittterfoot2').html(tweetText);
    var tweetTimestamp = tDoc.querySelectorAll('[data-scribe="element:mini_timestamp"]')[0].innerHTML;
    jQuery('#twittter_timestamp').html(tweetTimestamp);
   // jQuery('#twitter0').html('');
  }
};
*/