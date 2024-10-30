<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="lpp_modal edit_column">
  <div class="lpp_modal_wrapper">
    <div class="edit_options_left">
      <h1 class="banner-h1">Column Options</h1>
      <label>Background Color :</label>
      <input type="text" name="columnBgColor" class="color-picker columnBgColor" id="columnBgColor" data-alpha='true' value='#ffffff'>
      <br>
      <br>
      <label>Column Width :</label>
      <input type="number" name="columnWidth" class="columnWidth" id="columnWidth" value='0'>
      <br>
      <span style="font-size: 12px;">(In percentage)</span>
      <br>
      <br>
      <div id="accordion">
      <h4>Margin</h4>
      <div style="height: 188px;">
      <br>
      <br>
      <label>Margin Top :</label>   
      <input type="number" name="columnMarginTop" class="columnMarginTop" id="columnMarginTop" value='0'>
      <br>
      <br>
      <label>Margin Bottom :</label>   
      <input type="number" name="columnMarginBottom" class="columnMarginBottom" id="columnMarginBottom" value='0'>
      <br>
      <br>
      <label>Margin Left :</label>   
      <input type="number" name="columnMarginLeft" class="columnMarginLeft" id="columnMarginLeft" value='0'>
      <br>
      <br>
      <label>Margin Right :</label>   
      <input type="number" name="columnMarginRight" class="columnMarginRight" id="columnMarginRight" value='0'>
      <br>
      <br>
      <span class="ulp-note">The unit is percentage so set values accordingly.</span>
      </div>
      <h4>Padding</h4>
      <div style="height: 188px;">
      <label>Padding Top :</label>
      <input type="number" name="columnPaddingTop" class="columnPaddingTop" id="columnPaddingTop" value='0'>
      <br>
      <br>
      <label>Padding Bottom :</label>
      <input type="number" name="columnPaddingBottom" class="columnPaddingBottom" id="columnPaddingBottom" value='0'>
      <br>
      <br>
      <label>Padding Left :</label>
      <input type="number" name="columnPaddingLeft" class="columnPaddingLeft" id="columnPaddingLeft" value='0'>
      <br>
      <br>
      <label>Padding Right :</label>
      <input type="number" name="columnPaddingRight" class="columnPaddingRight" id="columnPaddingRight" value='0'>
      <br>
      <br>
      <br>
      <span class="ulp-note">The unit is percentage so set values accordingly.</span>
      </div>
      </div>
    </div>
    <div class="edit_form">
      <div class="btn add-widgets">Add Widget Area</div>
      <div class="wdt-dr"></div>
      <ul id="widgets">
        <script type="text/template" id="widget-template"></script>
      </ul>
    </div>
    <div class="edit_column_widgets">
      <h1 class="banner-h1">Widgets</h1>
      <div class="tabs">
        <ul class="tab-links">
          <li class="active"><a href="#tabFreeWidgets" class="tab_link">Widgets</a></li>
          <li><a href="#tabPremiumWidgets" class="tab_link">Extensions</a></li>
        </ul>
        <div class="tab-content" style="padding:10px 30px 30px 50px;">
          <div id="tabFreeWidgets" class="tab active">
            <div class="widget wdt-draggable" data-type="wigt-WYSIWYG">WYSIWYG Editor</div>
            <div class="widget wdt-draggable" data-type="wigt-img">Image</div>
            <div class="widget wdt-draggable" data-type="wigt-menu">Menu</div>
            <div class="widget wdt-draggable" data-type="wigt-video">Video</div>
            <div class="widget wdt-draggable" data-type="wigt-btn-gen">Button Generator  <span class="dashicons dashicons-lock" style="color: #1a2354; font-size: 20px; "></span></div>
            <div class="widget wdt-draggable" data-type="wigt-pb-form">Subscribe Form Generator  <span class="dashicons dashicons-lock" style="color: #1a2354; font-size: 20px; "></span></div>
            <div class="widget " data-type="wigt-pb-form"><a href='http://pluginops.com/landing-page-builder/?ref=postslider' style="color:#fff; text-decoration:none;"  target="_blank">Posts Slider  <span class="dashicons dashicons-lock" style="color: #1a2354; font-size: 20px; "></span></a></div>
          </div>
          <div id="tabPremiumWidgets" class="tab">
            <div class="widget wdt-draggable" data-type="wigt-slider">Image Slider</div>
            <div class="widget wdt-draggable" data-type="wigt-smuzform">Form Builder</div>
            <div class="widget wdt-draggable" data-type="wigt-Sform">Subscribe Form</div>
            <div class="widget wdt-draggable" data-type="wigt-PostSlider">Posts Slider</div>
            <div class="widget wdt-draggable" data-type="wigt-TestimonialSlider">Testimonial Slider</div>
            <div class="widget wdt-draggable" data-type="wigt-SocialFeed">Social Feed</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>