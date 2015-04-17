<?php      
//kpr($page['content']['system_main']['nodes'][1]['body']['#object']->field_banner_subtitle['und'][0]['safe_value']);
?>
<div id="header">

  <!--div id="topbar">Search <input type="search" name="search" id="search"></div -->
  
  <!-- div id="mainmenu" -->
  <div id="navigation">
    <div id="search_div>"<?php print render ($page['header_top_right']); ?></div>
    <div id="toplogo" style="display:inline;"><a href="/"><img src="/sites/default/files/mock/images/logo.png" width="157" height="92" alt="iJet Integrated Risk Management"/></a></div>

    <?php print render ($page['header']); ?>
    
  </div>
</div>
<div id="topimage">
<img id="section_banner_img" src="/sites/default/files/headers/<?php print ($page['section_banner_img']); ?>"  alt=""/>
<div id="toptext">
   
   <?php print render($title_prefix); ?>
   
   <?php if ($title): ?>
   <h1 class="title" id="page-title" style="color:#fff; margin:14px 0 15px">
     <?php print $title; ?>
   </h1>
   <?php endif; ?>
   
   <?php print render($title_suffix); ?>
   
    <p> <?php 
    	    if(isset($page['banner_subtitle'])){print ($page['banner_subtitle']); }
    	  ?>
    </p>
    </div>
    

</div>
<div id="page">
  <div id="sidebar">
<?php print render ($page['sidebar_first']); ?>
  </div>
  
  
  <div id="contentsubpage">
      <?php if ($tabs): ?>
      <div class="tabs">
        <?php print render($tabs); ?>
      </div>
      <?php endif; ?>
      
      <?php print render($page['help']); ?>
      
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
  <?php print render($page['content']); ?>
  
  <?php if($page['featured_right']){
  	print render($page['featured_right']);
  } 
   ?>
  

  </div>
</div>
<div style="clear:both"> </div>
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
    <div class="footermenu">
    	<img src="/sites/default/files/mock/images/logo_footer.gif" width="159" height="83" alt=""/>
      <label for="search">Search:</label>
      <input type="search" name="search" id="search">
    </div>

      <?php print render ($page['footer_third']); ?>
  </div>
</div>