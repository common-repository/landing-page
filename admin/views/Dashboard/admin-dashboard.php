<div id="ulpb_dash_container">
	<h2 style="font-size:25px; font-weight: normal;">Page Builder Dashboard</h2>

	<div class="tabs">
		<ul class="tab-links">
		    <li class="active"><a href="#tab1" class="tab_link">Welcome</a></li>
		    <li><a href="#tab2" class="tab_link">Video Tutorials</a></li>
		    <li><a href="#tab3" class="tab_link">Pro Features</a></li>
	  	</ul>

		<div class="tab-content">
			<div id="tab1" class="tab active">
				<h2>Welcome to Page Builder by PluginOps</h2>
				<p>Thank you for choosing the Page Builder plugin and welcome to the community. Find some useful information below and learn how to create beautiful pages in minutes.</p>
				<br>
				<h3>Getting Started - Build Your First Standalone Page</h3>
        <br>
        <a href="<?php echo admin_url('post-new.php?post_type=ulpb_post'); ?>" target="_blank" style="font-size:14px; font-weight: bold;">Page Builder - Add New Custom Page</a>
        <p>Ready to start creating pages ? Jump into the page builder by clicking the Add new Page button under the Page builder menu.</p>
        <div style="margin-top:8%; width: 100%;">
          <hr>
          <br>
          <h3>Features Coming Soon</h3>
          <li>Export Custom Templates</li>
          <li>New Templates</li>
          <li>New Widgets</li>
			  </div>
      </div>
      <div id="tab2" class="tab">
        <div class="video-card">
          <iframe width="460" height="255" src="https://www.youtube.com/embed/e2hnpm9RN74" frameborder="0" allowfullscreen></iframe>
          <h3>Page Builder Plugin Intro</h3>
        </div>
        <div class="video-card">
          <iframe width="460" height="255" src="https://www.youtube.com/embed/VCnep3RyE8M" frameborder="0" allowfullscreen></iframe>
          <h3>Page Builder Plugin Basics</h3>
        </div>
        <div class="video-card">
          <iframe width="460" height="255" src="https://www.youtube.com/embed/CRbR7Wy9YBc" frameborder="0" allowfullscreen></iframe>
          <h3>How to embed a video.</h3>
        </div>
      </div>
      <div id="tab3" class="tab">
        <div id="ftr-list">
        <br>
        <h2 style="font-size:16px; text-align: center;" >Features you will get with premium version.</h2>
          <ul style="font-size:16px; list-style: square; text-align: left; margin-left:40px;">
            <li>Responsive Templates</li>
            <li>Rows and Widgets Duplication</li>
            <li>Pre Designed Navigation Menu</li>
            <li>Button Generator Extension</li>
            <li>Subscribe Form Extension</li>
            <li>More features in updates.</li>
          </ul>
          <br>
          <a href="http://pluginops.com/landing-page-builder/?ref=dashboard" target="_blank" style="text-align: center;"><div class="btn" style="float: inherit; width: 65%; margin-left: 15px; padding:15px 30px; font-size: 19px; background:#2196F3; text-align: center;">Get Started</div></a>
          <br>
        </div>
      </div>
		</div>
	</div>
</div>

<style type="text/css">
	.tab_link{
  text-decoration:none;
}
.tabs {
  width:auto;
  display:inline-block;
}
 
   
.tab-links:after {
  display:block;
  clear:both;
  content:'';
}

.video-card{
  display: inline-block;
  float: left;
  max-width:460px;
  max-height:400px;
  background: #fff;
  border:1px solid #d3d3d3;
  text-align: center;
  margin-right: 15px;
  margin-bottom: 40px;
}
.tab-links li {
  margin:0px 5px;
  float:left;
  list-style:none;
}

.tab-links a {
  padding:9px 20px;
  display:inline-block;
  border-radius:7px 7px 0px 0px;
  background:#353535;
  font-size:16px;
  font-weight:600;
  color:#fff;
  transition:all linear 0.15s;
}
 
.tab-links a:hover {
background:#7b7b7b;
text-decoration:none;
}
 
li.active a, li.active a:hover {
  background:#fff;
  color:#4c4c4c;
}
 

.tab-content {
  border-radius:3px;
  box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
  background:#fff;
}
 
.tab {
	padding: 20px 40px;
  display:none;
  min-width: 60%;
  min-height: 600px
}
 
.tab.active {
  display:block;
}
</style>

<script type="text/javascript">
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
</script>