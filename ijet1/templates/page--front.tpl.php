<?php      
//kpr($page);
?>
<div id="header">

  <!--div id="topbar">Search <input type="search" name="search" id="search"></div -->

  <!-- div id="mainmenu" -->

  <div id="navigation">
  	
    <div id="search_div"><?php print render ($page['header_top_right']); ?></div>
    <div style="clear:both"></div>
    <div id="toplogo" style="display:inline;"><a href="/"><img src="/sites/default/files/mock/images/logo.png" width="157" height="92" alt="iJet Integrated Risk Management"/></a></div>

    <?php print render ($page['header']); ?>


  </div>
</div>
<div style="clear:both"></div>
	<!-- SLIDER, DRUPAL SLIDESHOW -->

    <?php print render ($page['highlighted']); ?>

	<!-- END SLIDER --> 

<div id="page">
  <div id="content">
    <div id="newstab">
      <div id="Tabs1">
        <ul>
          <li><a href="#block-views-front-page-news-tab-block">NEWS</a></li>
          <li><a href="#tabs-2">EVENTS</a></li>
          <li><a href="#tabs-3">TRAINING</a></li>
        </ul>
    <?php print render ($page['fp_tabs']); ?>            
      </div> <!-- END Tabs1 (as opposed to tabs-1) -->
    </div> <!-- END newstab -->
    <div style="clear:both">&nbsp;</div>	
    <div id="featurebox">
      <h2>Front Lines </h2>
      <?php print render ($page['frontlines_boxes']); ?>
    </div>
    <div id="productbox">
      <?php print render ($page['featured_product']); ?>
    </div>
  </div>
</div>

<div id="twitterfooter"> 
    <div id="twitter_box">&nbsp;
      <a class="twitter-timeline" width="520" href="https://twitter.com/iJETIntl" data-widget-id="555090486432890880" data-chrome="nofooter"  data-tweet-limit="1">
      	 <h2 style="color:#999;padding:0 80px 0 80px">Loading Twitter ...</h2>
      </a> 
    </div> 
    <?php print render ($page['footer_first']); ?>
    <!--
    <?php if ($messages && stristr ($messages , 'You are subscribed')): ?> 
        <div id="subscribe_message"> You are subscribed.  Thank you. </div>
    <?php endif; ?>
    <?php if ($messages && stristr ($messages , 'by subscribing')&& stristr ($messages , 'required')): ?> 
        <div id="subscribe_message"> Email is Required </div>
    <?php endif; ?>
    -->
</div>

<div id="footer">
<div id="footercontent">
<div id="footermenu"> 
    <?php print render ($page['footer']); ?>
</div>

<div class="footermenu"><img src="/sites/default/files/mock/images/logo_footer.gif" width="159" height="83" alt=""/>
<label for="search">Search:</label>
  <input type="search" name="search" id="search">
</div>

      <?php print render ($page['footer_third']); ?>
</div>
</div>
<script type="text/javascript">
jQuery(function() {
	jQuery( "#Tabs1" ).tabs(); 
});
</script>
