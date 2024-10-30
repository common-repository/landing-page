<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="tabs">
  <ul class="tab-links">
    <li class="active"><a href="#tab1" class="tab_link">Editor</a></li>
    <li><a href="#tab2" class="tab_link">Templates</a></li>
    <li><a href="#tab3" class="tab_link">Page Settings</a></li>
    <?php
    $pb_subs = get_post_meta($post->ID,'ssm_subscribers_list',true);
     if (!empty($pb_subs)) {
       echo '<li><a href="#tab4" class="tab_link">Subscribers List</a></li>';
     }
    ?>
  </ul>
  <div class="tab-content">
    <div id="tab1" class="tab active">
      <section id="todoapp">
        <header id="header">
          <h1>Page Builder</h1>
          <div class="ulpb_button newRow  btn-green medium-btn" style="min-width:120px;">Add new row</div>
        </header>
      </section>
      <ul id="container">
        <script type="text/template" id="item-template"></script>
      </ul>
    </div>
    <div id="tab2" class="tab">
      <div id="column-1" class="col">
        <div id="card" class="temp-prev-1 card">
        <div id="temp-prev-1" class="tempPrev"> <p id="temp-prev-1"><b>Preview</b></p></div>
          <label for="temp-1"> <img src="<?php echo LAULPB_PLUGIN_URL.'/images/templates/simple-error-page.png'; ?>" class='card-img temp-prev-1'>
          <p class="card-desc"></p> </label>
          <input type="radio" disabled="disabled" class="template_select" id='temp-1' name="template_select" value='temp1'>
          <label for="temp-1"><strike> Select</strike> <a href='http://pluginops.com/landing-page-builder/?ref=templates' target="_blank" class="ftr-link" >Go Premium</a></label>
        </div>
        <div id="card" class="temp-prev-5 card">
        <div id="temp-prev-5" class="tempPrev"> <p id="temp-prev-5"><b>Preview</b></p></div>
          <label for="temp-5"> <img src="<?php echo LAULPB_PLUGIN_URL.'/images/templates/lp-template-5.png'; ?>" class='card-img temp-prev-5'>
          <p class="card-desc"></p> </label>
          <input type="radio" disabled="disabled" class="template_select" id='temp-5' name="template_select" value='temp5'>
          <label for="temp-5"><strike> Select</strike> <a href='http://pluginops.com/landing-page-builder/?ref=templates' target="_blank" class="ftr-link" >Go Premium</a></label>
        </div>
        <div id="card" class="temp-prev-2 card">
        <div id="temp-prev-2" class="tempPrev"> <p id="temp-prev-2"><b>Preview</b></p></div>
          <label for="temp-2"> <img src="<?php echo LAULPB_PLUGIN_URL.'/images/templates/lp-template-1.png'; ?>" class='card-img temp-prev-2'>
          <p class="card-desc"></p> </label>
          <input type="radio" disabled="disabled" class="template_select" id='temp-2' name="template_select" value='temp2'>
          <label for="temp-2"><strike> Select</strike> <a href='http://pluginops.com/landing-page-builder/?ref=templates' target="_blank" class="ftr-link" >Go Premium</a></label>
        </div>
        <div id="card" class="temp-prev-3 card">
        <div id="temp-prev-3" class="tempPrev"> <p id="temp-prev-3"><b>Preview</b></p></div>
          <label for="temp-3"> <img src="<?php echo LAULPB_PLUGIN_URL.'/images/templates/lp-template-3.png'; ?>" class='card-img temp-prev-3'>
          <p class="card-desc"></p> </label>
          <input type="radio" disabled="disabled" class="template_select" id='temp-3' name="template_select" value='temp3'>
          <label for="temp-3"><strike> Select</strike> <a href='http://pluginops.com/landing-page-builder/?ref=templates' target="_blank" class="ftr-link" >Go Premium</a></label>
        </div>
        <div id="card" class="temp-prev-4 card">
        <div id="temp-prev-4" class="tempPrev"> <p id="temp-prev-4"><b>Preview</b></p></div>
          <label for="temp-4"> <img src="<?php echo LAULPB_PLUGIN_URL.'/images/templates/lp-template-4.png'; ?>" class='card-img temp-prev-4'>
          <p class="card-desc"></p> </label>
          <input type="radio" disabled="disabled" class="template_select" id='temp-4' name="template_select" value='temp4'>
          <label for="temp-4"><strike> Select</strike> <a href='http://pluginops.com/landing-page-builder/?ref=templates' target="_blank" class="ftr-link" >Go Premium</a></label>
        </div>
        <div id="card" class="temp-prev-6 card">
        <div id="temp-prev-6" class="tempPrev"> <p id="temp-prev-6"><b>Preview</b></p></div>
          <label for="temp-6"> <img src="<?php echo LAULPB_PLUGIN_URL.'/images/templates/lp-template-6.png'; ?>" class='card-img temp-prev-6'>
          <p class="card-desc"></p> </label>
          <input type="radio" disabled="disabled" class="template_select" id='temp-6' name="template_select" value='temp4'>
          <label for="temp-6"><strike> Select</strike> <a href='http://pluginops.com/landing-page-builder/?ref=templates' target="_blank" class="ftr-link" >Go Premium</a></label>
        </div>
        <div id="card" class="temp-prev-7 card">
        <div id="temp-prev-7" class="tempPrev"> <p id="temp-prev-7"><b>Preview</b></p></div>
          <label for="temp-7"> <img src="<?php echo LAULPB_PLUGIN_URL.'/images/templates/lp-template-7.png'; ?>" class='card-img temp-prev-7'>
          <p class="card-desc"></p> </label>
          <input type="radio" disabled="disabled" class="template_select" id='temp-7' name="template_select" value='temp4'>
          <label for="temp-7"><strike> Select</strike> <a href='http://pluginops.com/landing-page-builder/?ref=templates' target="_blank" class="ftr-link" >Go Premium</a></label>
        </div>
        <div id="card" class="temp-prev-8 card">
        <div id="temp-prev-8" class="tempPrev"> <p id="temp-prev-8"><b>Preview</b></p></div>
          <label for="temp-8"> <img src="<?php echo LAULPB_PLUGIN_URL.'/images/templates/lp-template-8.png'; ?>" class='card-img temp-prev-8'>
          <p class="card-desc"></p> </label>
          <input type="radio" disabled="disabled" class="template_select" id='temp-8' name="template_select" value='temp4'>
          <label for="temp-8"><strike> Select</strike> <a href='http://pluginops.com/landing-page-builder/?ref=templates' target="_blank" class="ftr-link" >Go Premium</a></label>
        </div>
        <div id="card" class="temp-prev-9 card">
        <div id="temp-prev-9" class="tempPrev"> <p id="temp-prev-9"><b>Preview</b></p></div>
          <label for="temp-9"> <img src="<?php echo LAULPB_PLUGIN_URL.'/images/templates/lp-template-9.png'; ?>" class='card-img temp-prev-9'>
          <p class="card-desc"></p> </label>
          <input type="radio" disabled="disabled" class="template_select" id='temp-9' name="template_select" value='temp4'>
          <label for="temp-9"><strike> Select</strike> <a href='http://pluginops.com/landing-page-builder/?ref=templates' target="_blank" class="ftr-link" >Go Premium</a></label>
        </div>
      </div>
    </div>
    <div id="tab3" class="tab">
    <div class="pbp_form" style="min-height: 400px;padding:20px;">
      <h1 class="seoHeader"> Body Styles </h1>
      <br>
      <label>Body Background Color :</label>
      <input type="text" name="pageBgColor" class="color-picker pageBgColor" id="pageBgColor" data-alpha='true' value='transparent'>
      <br>
      <br>
      <label>Body Background Image :</label>
      <input id="image_location_b" type="url" class=" pageBgImage upload_image_button0"  name='lpp_add_img_0' value=' ' placeholder='Insert Image URL here' style="width:40%;" />
      <input id="image_location_b" type="button" class="upload_bg0" data-id="0" value="Upload"  style="margin-left: 25px;" />
      <br>
      <br>
      <br>
      <label>Padding Top :</label>
      <input type="number" name="pagePaddingTop" class="pagePaddingTop" id="pagePaddingTop" value='0'>
      <br>
      <br>
      <br>
      <label>Padding Bottom :</label>
      <input type="number" name="pagePaddingBottom" class="pagePaddingBottom" id="pagePaddingBottom" value='0'>
      <br>
      <br>
      <br>
      <label>Padding Left :</label>
      <input type="number" name="pagePaddingLeft" class="pagePaddingLeft" id="pagePaddingLeft" value='0'>
      <br>
      <br>
      <br>
      <label>Padding Right :</label>
      <input type="number" name="pagePaddingRight" class="pagePaddingRight" id="pagePaddingRight" value='0'>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h1 class="seoHeader"> Page SEO </h1>
      <br>
      <br>
      <label>Page Keywords <span class="text_small">(Separated with Commas)</span> :</label>
      <input type="text" class="pageSeoKeywords" style="width:60%">
      <br>
      <br>
      <br>
      <label> Short Page Description :</label>
      <textarea class="pageSeoDescription" cols="60"></textarea>
      <br>
      <br>
    </div>
    </div>
    <div id="tab4" class="tab">
        <?php //include_once('/widgets/widget-form-subs-list.php'); ?>    
    </div>
  </div>
  <br>
  <div id="SavePage" class="btn-green aligncenter large-btn SavePage">Save Page</div>
</div>