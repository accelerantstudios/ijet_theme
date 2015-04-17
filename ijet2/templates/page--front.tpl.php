<?php      
//kpr($page);
?>
  <div id="above_nav">
    &nbsp;<?php print render ($page['above_nav']); ?>
  </div>
  
  <div id="logo_and_nav" style="clear:both">
  	<div id="logo_and_nav_inner">
  	  <div id="top_logo">
      	<a href="/"><img src="/sites/default/files/mock/images/logo.png" alt="iJet Integrated Risk Management"/></a>
      </div>
      <div id="top_menu">
        <?php print render ($page['top_nav']); ?>
      </div>
    </div>
  </div>
  
  <div id="fp_slideshow">
    <?php print render ($page['widebox_1']); ?>
  </div>
  <div style="clear:both">
  <div id="fp_frontlines">
    <?php print render ($page['widebox_2']); ?>
  </div>
  
  <div id="fp_featured_product">
    <?php print render ($page['widebox_3']); ?>
  </div>  
  
  <div id="fp_experts">
    <?php print render ($page['widebox_4']); ?>
  </div> 
  <div style="clear:both"></div>
  <div id="twitterfooter">
    <div id="twitter_box">
      <?php print render ($page['social']); ?>
    </div>
  
    <div id="connect_box">
      <?php print render ($page['connect']); ?>
    </div>
  </div>  
  <div id="footer">
    <div id="footer_inner">
      <div id="footermenu"> 
        <?php print render ($page['footer_1']); ?>
        <div id="footer_logo"><a href="/"><img src="/sites/all/themes/ijet2/images/v2_images/logo_footer.png" alt="iJet Integrated Risk Management"/></a></div>
      </div>
      <div style="clear:both"></div>
      <div id="footerinfo"> 
        <?php print render ($page['footer_2']); ?>
      </div>
    </div>
  </div>
