<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="lpp_modal edit_row">
  <div class="lpp_modal_wrapper">
  <div class="edit_options_left">
      <h1 class="banner-h1">Row Options</h1>
       <label>Row Height :</label>
      <input type="text" name="row_height" id="row_height" placeholder="Set row height" class="edit_fields" value='200'>
      <br>
      <br>
      <label>Number of Columns :</label>
      <input type="number" name="number_of_columns" id="number_of_columns" placeholder="Number of columns in row" min="1" max="8"  class="edit_fields" value='1'>
      <br>
      <br>
      <label>Background Image :</label>
      <input id="image_location1" type="text" class=" rowBgImg upload_image_button2"  name='lpp_add_img_1' value='' placeholder='Insert Image URL here' />
      <input id="image_location1" type="button" class="upload_bg" data-id="2" value="Upload"  style="margin-left: 75px;" />
      <br>
      <br>
      <br>
      <br>
      <label>Background Color :</label>
      <input type="text" name="rowBgColor" class="color-picker rowBgColor" data-alpha='true' value='#fff'>
      <br>
      <br>
      <div id="accordion1">
      <h4>Margin</h4>
      <div style="height: 188px;">
      <label>Margin Top :</label>   
      <input type="number" name="rowMarginTop" class="rowMarginTop" id="rowMarginTop" value='0'>
      <br>
      <br>
      <label>Margin Bottom :</label>   
      <input type="number" name="rowMarginBottom" class="rowMarginBottom" id="rowMarginBottom" value='0'>
      <br>
      <br>
      <label>Margin Left :</label>   
      <input type="number" name="rowMarginLeft" class="rowMarginLeft" id="rowMarginLeft" value='0'>
      <br>
      <br>
      <label>Margin Right :</label>   
      <input type="number" name="rowMarginRight" class="rowMarginRight" id="rowMarginRight" value='0'>
      <br>
      <br>
      <br>
      <span class="ulp-note">The unit is percentage so set values accordingly.</span>
      </div>
      <h4>Padding</h4>
      <div style="height: 188px;">
      <label>Padding Top :</label>
      <input type="number" name="rowPaddingTop" class="rowPaddingTop" id="rowPaddingTop" value='0'>
      <br>
      <br>
      <label>Padding Bottom :</label>
      <input type="number" name="rowPaddingBottom" class="rowPaddingBottom" id="rowPaddingBottom" value='0'>
      <br>
      <br>
      <label>Padding Left :</label>
      <input type="number" name="rowPaddingLeft" class="rowPaddingLeft" id="rowPaddingLeft" value='0'>
      <br>
      <br>
      <label>Padding Right :</label>
      <input type="number" name="rowPaddingRight" class="rowPaddingRight" id="rowPaddingRight" value='0'>
      <br>
      <br>
      <br>
      <br>
      <span class="ulp-note">The unit is percentage so set values accordingly.</span>
      </div>
      </div>
    </div>
    <div class="edit_options_right">
      <div class="tabs">
        <ul class="tab-links">
          <li class="active"><a href="#tabCustomCss" class="tab_link">Custom CSS</a></li>
          <li><a href="#tabCustomJS" class="tab_link">Custom JS</a></li>
        </ul>
        <div class="tab-content">
          <div id="tabCustomCss" class="tab active">
            <textarea class="rowCustomStyling" rows="20" cols="120"></textarea>
          </div>
          <div id="tabCustomJS" class="tab">
            <textarea class="rowCustomJS" rows="20" cols="120"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>