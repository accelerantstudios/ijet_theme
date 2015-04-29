<?php      
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
  
<br style="clear:both">
<div id="page">
  
<?php if(!empty($page['sidebar_1'])){
	      print '<div id="sidebar">';
	      print render ($page['sidebar_1']);
	      print '</div>';
      } ?>

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
   <div id="<?php if(empty($page['sidebar_1']) && empty($page['sidebar_2'])){
   	                print'content_wide';
   	              } elseif(empty($page['sidebar_2'])){
   	              	print'content_medium';
   	              } else {
   	              	print'content_narrow';
   	              }
   	?>">
   <?php print render($page['content']); ?>
 </div>
  
   <?php if(!empty($page['sidebar_2'])){print render ($page['sidebar_2']);} ?>
  

  </div>
</div>
  <div style="clear:both;"></div>
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