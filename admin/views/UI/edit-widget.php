<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="lpp_modal_2 columnWidgetPopup">
  <div class="lpp_modal_wrapper">
  <div class="edit_form" style="width: 95% !important;">
    <div class="wdt-left">
      <div class="btn closeWidgetPopup">Close</div>
      <br>
      <br>
      <div class="pbp-widgets wdt-editor" style="display:none">
          <?php 
          $settings = array('media_buttons'=> true,'columnContent','tinymce' => true, 'editor_height' => 425);
          wp_editor(" ","columnContent",$settings); ?>
      </div>
      <div class="pbp-widgets wdt-img" style="display:none">
        <label>Upload Image :</label>
        <input id="image_location1" type="text" class=" ftr-img upload_image_button2"  name='lpp_add_img_1' value='' placeholder='Insert Image URL here' />
        <input id="image_location1" type="button" class="upload_bg" data-id="2" value="Upload" />
        <br>
        <br>
        <br>
        <br>
        <label>Select Size :</label>
        <select name="ftr-img-size" id="ftr-img-size">
          <option value="original">Original</option>
          <option value="large">Large</option>
          <option value="medium">Medium</option>
          <option value="small">Small</option>
        </select>
        <br>
        <br>
        <label>Select Alignment :</label>
        <select name="ftr-img-alignment" id="ftr-img-alignment">
          <option value="default">Default</option>
          <option value="left">Left</option>
          <option value="right">Right</option>
          <option value="center">Center</option>
        </select>
      </div>
      <div class="pbp-widgets wdt-menu" style="display:none">

        <label for="ftr-menu-style-1"> Style 1 <img src="<?php echo LAULPB_PLUGIN_URL.'/images/menu/menu-style-1.png'; ?>" class='menu-select'> </label>
        <input type="radio" class="ftr-menu-style" id='ftr-menu-style-1' name="ftr-menu-select-style" value='menu-style-1'>
        <br>
        <br>
        <label for="ftr-menu-style-2"> Style 2 (Sticky) <img src="<?php echo LAULPB_PLUGIN_URL.'/images/menu/menu-style-2.png'; ?>" class='menu-select'> </label>
        <input type="radio" class="ftr-menu-style" id='ftr-menu-style-2' name="ftr-menu-select-style" value='menu-style-2'>
        <br>
        <br>
        <label for="ftr-menu-style-3"> Style 3 (Without Logo) <img src="<?php echo LAULPB_PLUGIN_URL.'/images/menu/menu-style-3.png'; ?>" class='menu-select'> </label>
        <input type="radio" class="ftr-menu-style" id='ftr-menu-style-3' name="ftr-menu-select-style" value='menu-style-3'>
        <br>
        <br>
        <label>Select Menu :</label>
        <select name="ftr-menu-select" id="ftr-menu-select">
        <option value="Select">Choose</option>
          <?php
          $menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) ); 
            foreach($menus as $menu){
              echo "<option value='$menu->name'>$menu->name</option>";
            }
           ?>
        </select>
        <br>
        <br>
        <label>Menu Text Color :</label>
        <input type="text" class="btn_color-picker ftr-menu-color" id="ftr-menu-color" value='#333333'>
        <br>
      </div>
      <div class="pbp-widgets wdt-smuzform" style="display:none">
        <?php

        if (is_plugin_active( 'contact-form-add/forms.php' )) {
            echo "active";

          $args = array(
          'posts_per_page'   => 99,
          'offset'           => 0,
          'orderby'          => 'date',
          'order'            => 'ASC',
          'post_type'        => 'smuzform',
          'post_status'      => 'publish',
        );
        
        $wppb_smuzforms = get_posts( $args );
        ?>
        <br>
        <br>
        <label for="select_smuz_form">Please select a form to display : </label>
        <select  id="select_smuz_form">
        <option value="Select">Select</option>
        <?php
        foreach ($wppb_smuzforms as $form) {
          $currentID = $form->ID;
          $title = get_the_title($currentID);
        ?>
        <option value="[sform  id='<?php echo $currentID ?>']" > <?php echo $title ?> </option>
        <?php
        } ?>
        </select>
        <?php } else{ echo "<div class='ftr-widget'>Please install the Form Builder Plugin : <a href='http://web-settler.com/form-builder/?ref=pluginops' target='_blank'>Install Now</a></div> "; }   ?>
      </div>
      <div class="pbp-widgets wdt-slider" style="display:none">
        <?php
        if (is_plugin_active('WPRocketLayerSlider/rocketlayerslider.php')) {

          $args = array(
          'posts_per_page'   => 99,
          'offset'           => 0,
          'orderby'          => 'date',
          'order'            => 'ASC',
          'post_type'        => 'wprls_slider',
          'post_status'      => 'publish',
        );
        
        $wppb_smuz_slider = get_posts( $args );
        ?>
        <br>
        <br>
        <label for="select_smuz_slider">Please select a slider to display : </label>
        <select  id="select_smuz_slider">
        <option value="Select">Select</option>
        <?php
        foreach ($wppb_smuz_slider as $slider) {
          $currentID = $slider->ID;
          $title = get_the_title($currentID);
        ?>
        <option value="[sform  id='<?php echo $currentID ?>']" > <?php echo $title ?> </option>
        <?php
        } ?>
        </select>

        <?php } else{ echo "<div class='ftr-widget'>Extension not found - Please install the Slider Plugin : <a href='http://web-settler.com/layer-slider-plugin/?ref=pluginops' target='_blank'>Install Now</a></div> "; }   ?>
      </div>
      <div class="pbp-widgets wdt-sForm" style="display:none">
        <?php
        if (is_plugin_active('mailchimp-subscribe-sm-premium/subcribe-me.php')) {

          $args = array(
          'posts_per_page'   => 99,
          'offset'           => 0,
          'orderby'          => 'date',
          'order'            => 'ASC',
          'post_type'        => 'subscribe_me_forms',
          'post_status'      => 'publish',
        );
        
        $wppb_subscribe_form = get_posts( $args );
        ?>
        <br>
        <br>
        <label for="select_subscribe_form">Please select a subscribe form to display : </label>
        <select  id="select_subscribe_form">
        <option value="Select">Select</option>
        <?php
        foreach ($wppb_subscribe_form as $sForm) {
          $currentID = $sForm->ID;
          $title = get_the_title($currentID);
        ?>
        <option value="[sform  id='<?php echo $currentID ?>']" > <?php echo $title ?> </option>
        <?php
        } ?>
        </select>

        <?php } else{ echo "<div class='ftr-widget'>Extension not found - Please install the Subscribe Form Plugin : <a href='http://web-settler.com/mailchimp-subscribe-form/?ref=pluginops' target='_blank'>Install Now</a></div> "; }   ?>
      </div>
      <div class="pbp-widgets wdt-postsSlider" style="display:none">
        <?php
        if (is_plugin_active('Posts-Slider-premium/Posts-Slider.php')) {

          $args = array(
          'posts_per_page'   => 99,
          'offset'           => 0,
          'orderby'          => 'date',
          'order'            => 'ASC',
          'post_type'        => 'mpsp_slider',
          'post_status'      => 'publish',
        );
        
        $wppb_posts_slider = get_posts( $args );
        ?>
        <br>
        <br>
        <label for="select_posts_slider">Please select a slider to display : </label>
        <select  id="select_posts_slider">
        <option value="Select">Select</option>
        <?php
        foreach ($wppb_posts_slider as $postsSlider) {
          $currentID = $postsSlider->ID;
          $title = get_the_title($currentID);
        ?>
        <option value="[mpsp_posts_slider  id='<?php echo $currentID ?>']" > <?php echo $title ?> </option>
        <?php
        } ?>
        </select>

        <?php } else{ echo "<div class='ftr-widget'>Extension not found - Please install the Posts Slider Plugin : <a href='http://web-settler.com/posts-slider/?ref=pluginops' target='_blank'>Install Now</a></div> "; }   ?>
      </div>
      <div class="pbp-widgets wdt-testimonialSlider" style="display:none">
        <?php
        if (is_plugin_active('testimonial-add-premium/Testimonial-Slider.php')) {

          $args = array(
          'posts_per_page'   => 99,
          'offset'           => 0,
          'orderby'          => 'date',
          'order'            => 'ASC',
          'post_type'        => 'tss_slider',
          'post_status'      => 'publish',
        );
        
        $wppb_testimonials_slider = get_posts( $args );
        ?>
        <br>
        <br>
        <label for="select_testimonials_slider">Please select a slider to display : </label>
        <select  id="select_testimonials_slider">
        <option value="Select">Select</option>
        <?php
        foreach ($wppb_testimonials_slider as $testimonialsSlider) {
          $currentID = $testimonialsSlider->ID;
          $title = get_the_title($currentID);
        ?>
        <option value="[tss_slider  id='<?php echo $currentID ?>']" > <?php echo $title ?> </option>
        <?php
        } ?>
        </select>

        <?php } else{ echo "<div class='ftr-widget'>Extension not found - Please install the Testimonial Slider Plugin : <a href='http://web-settler.com/testimonials-plugin/?ref=pluginops' target='_blank'>Install Now</a></div> "; }   ?>
      </div>
      <div class="pbp-widgets wdt-socialFeed" style="display:none">
        <?php
        if (is_plugin_active('social-feed-premium/plugin.php')) {

          $args = array(
          'posts_per_page'   => 99,
          'offset'           => 0,
          'orderby'          => 'date',
          'order'            => 'ASC',
          'post_type'        => 'wssf_social_feed',
          'post_status'      => 'publish',
        );
        
        $wppb_social_feed = get_posts( $args );
        ?>
        <br>
        <br>
        <label for="select_socialFeed">Please select a feed to display : </label>
        <select  id="select_socialFeed">
        <option value="Select">Select</option>
        <?php
        foreach ($wppb_social_feed as $socialfeed) {
          $currentID = $socialfeed->ID;
          $title = get_the_title($currentID);
        ?>
        <option value="[socialfeed  id='<?php echo $currentID ?>']" > <?php echo $title ?> </option>
        <?php
        } ?>
        </select>

        <?php } else{ echo "<div class='ftr-widget'>Extension not found - Please install the Social Feed Plugin : <a href='http://web-settler.com/wordpress-facebook-feed/?ref=pluginops' target='_blank'>Install Now</a></div> "; }   ?>
      </div>
      <div class="pbp-widgets wdt-btn-gen" style="display:none; ">
      <div class="ftr-widget">
      Premium Extension : <a href='http://pluginops.com/landing-page-builder/?ref=widgetbutton' target='_blank'>Go Premium</a>
      </div>
        <h1 id="btn-gen" class="widgetHeader">Button Generator</h1>
        <div id="btn-gen" class="pbp_form">
          <label>Button Text :</label>
          <input type="text" class="btnText" style="width: 250px;" placeholder="Button Text">
          <br>
          <br>
          <label>Button Link :</label>
          <input type="URL" class="btnLink" placeholder="Link URL">
          <br>
          <br>
          <label>Set Height: </label>
          <input type="number" class="btnHeight">
          <br>
          <br>
          <label>Set width: </label>
          <input type="number" class="btnWidth">
          <br>
          <br>
          <label>Button Background Color :</label>
          <input type="text" class="btn_color-picker btnBgColor" id="btnBgColor" value='#333333'>
          <br>
          <label>Button Hover Color :</label>
          <input type="text" class="btn_color-picker btnHoverBgColor" id="btnHoverBgColor" data-alpha='true' value='#333333'>
          <br>
          <label>Button Text Color :</label>
          <input type="text" class="btn_color-picker btnColor" id="btnColor">
          <br>
          <label>Button Font size : </label>
          <input type="number" class="btnFontSize">
          <br>
          <br>
          <label>Border Width: </label>
          <input type="number" class="btnBorderWidth">
          <br>
          <br>
          <label>Border Color: </label>
          <input type="text" class="btn_color-picker btnBorderColor" id="btnBorderColor" value='#ffffff'>
          <br>
          <label>Border Radius: </label>
          <input type="number" class="btnBorderRadius" max="100" min="0">
          <br>
          <br>
          <label>Button Alignment :</label>
          <select class="btnButtonAlignment" id="btnButtonAlignment">
            <option value="default">Default</option>
            <option value="left">Left</option>
            <option value="right">Right</option>
            <option value="center">Center</option>
          </select>
        </div>
        <div class="btn-preview">
            <button id="btn-prev"></button>
        </div>
      </div>
      <div class="pbp-widgets wdt-video pbp_video pbp_form" style="display: none;">
        <br>
        <br>
        <label>Video (MP4) :</label>
        <input id="image_location7" type="text" class="videoMpfour upload_image_button7"  name='lpp_add_img_1' value='' placeholder='Insert Video URL here' style="width:40%;" />
        <input id="image_location7" type="button" class="upload_bg" data-id="7" value="Upload" />
        <br><br>
        <label>Video (WebM) :</label>
        <input id="image_location6" type="text" class="videoWebM upload_image_button6"  name='lpp_add_img_6' value='' placeholder='Insert Video URL here' style="width:40%;" />
        <input id="image_location6" type="button" class="upload_bg" data-id="6" value="Upload" />
        <br><br>
        <label>Video Thumbnail :</label>
        <input id="image_location8" type="text" class="videoThumb upload_image_button8"  name='lpp_add_img_1' value='' placeholder='Insert Image URL here' style="width:40%;" />
        <input id="image_location8" type="button" class="upload_bg" data-id="8" value="Upload" />
        <br><br><br>
        <label>Auto Play</label>
        <select class="vidAutoPlay">
          <option value="no">No</option>
          <option value="autoplay">Yes</option>
        </select>
        <br><br><br>
        <label>Loop</label>
        <select class="vidLoop">
          <option value="no">No</option>
          <option value="loop">Yes</option>
        </select> 
        <br><br><br>
        <label>Video Controls</label>
        <select class="vidControls">
          <option value="controls">Yes</option>
          <option value="no">No</option>
        </select> 
      </div>
      
      <div class="pbp-widgets wdt-pb-form pbp_form" style="display: none;">
        <?php include_once('/widgets/widget-form.php'); ?>
      </div>
    </div>
    <div class="wdt-right">
      <div class="wdt-fields pbp_form" style="margin:40px 0 0 75px;">
        <label>Background Color :</label>
        <input type="text" name="widgetBgColor" class="color-picker widgetBgColor" data-alpha='true' value='transparent' style="margin-left: -150px;">
        <br>
        <br>
        <label>Set Margin Top: </label>
        <input type="number" class="widgetMtop">
        <br>
        <br>
        <label>Set Margin Bottom: </label>
        <input type="number" class="widgetMbottom">
        <br>
        <br>
        <label>Set Margin Left: </label>
        <input type="number" class="widgetMleft">
        <br>
        <br>
        <label>Set Margin Right: </label>
        <input type="number" class="widgetMright">
        <br>
        <br>
        <span class="ulp-note">The unit is percentage so set values accordingly.</span>
        <label>Custom Styling (CSS) :</label>
        <br>
        <br>
        <textarea  style="min-width: 250px; min-height: 250px;" class="widgetStyling"></textarea>
      </div>
    </div>
    </div>
  </div>
</div>