<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<div class="ftr-widget">
      Premium Extension : <a href='http://pluginops.com/landing-page-builder/?ref=widgetSform' target='_blank'>Go Premium</a>
      </div>
<div class="tabs" style="width: 107%;">
  <ul class="tab-links">
    <li class="active"><a href="#sf1" class="tab_link">General</a></li>
    <li><a href="#sf2" class="tab_link">Button</a></li>
    <li><a href="#sf3" class="tab_link">Integrations</a></li>
  </ul>
<div class="tab-content" style="box-shadow:none;">
	<div id="sf1" class="tab active">
		<h3>Structure</h3>
		<hr>
		<br>
		<label>Layout</label>
		<select class="formLayout">
			<option value="stacked">Stacked</option>
			<option value="inline">Inline</option>
		</select>
		<br>
		<br>
		<label>Name Field</label>
		<select class="showNameField">
			<option value="block">Show</option>
			<option value="none">Hide</option>
		</select>
		<br>
		<br>
		<h3>Success</h3>
		<hr>
		<br>
		<label>Success Action</label>
		<select class="successAction">
			<option value="redirect">Redirect</option>
			<option value="showMessage">Show Message</option>
		</select>
		<br>
		<br>
		<label>Success URL</label>
		<input type="URL" class="successURL" style="width: 60%;">
		<br>
		<br>
		<label>Success Message</label>
		<textarea class="successMessage" style="width:60%;"></textarea>
		<br>
		<br>
		<br>
	</div>
	<div id="sf2" class="tab">
		<br>
		<label>Button Text</label>
		<input type="text" class="formBtnText" style="width: 250px;" placeholder="Button Text">
		<br>
		<br>
        <label>Set Height: </label>
        <input type="number" class="formBtnHeight">
        <br>
        <br>
        <label>Set width: </label>
        <input type="number" class="formBtnWidth">
        <br>
        <br>
        <label>Button Background Color :</label>
		<input type="text" class="btn_color-picker formBtnBgColor" id="formBtnBgColor" value='#333333'>
		<br>
		<br>
        <label>Button Hover Color :</label>
        <input type="text" class="btn_color-picker formBtnHoverBgColor" id="formBtnHoverBgColor" data-alpha='true' value='#333333'>
        <br>
        <br>
        <label>Button Text Color :</label>
        <input type="text" class="btn_color-picker formBtnColor" id="formBtnColor">
        <br>
        <br>
        <label>Button Font size : </label>
        <input type="number" class="formBtnFontSize">
        <br>
        <br>
        <label>Border Width: </label>
        <input type="number" class="formBtnBorderWidth">
        <br>
        <br>
        <label>Border Color: </label>
        <input type="text" class="btn_color-picker formBtnBorderColor" id="formBtnBorderColor" value='#ffffff'>
        <br>
        <br>
        <label>Border Radius: </label>
        <input type="number" class="formBtnBorderRadius" max="100" min="0">
        <br>
        <br>
	</div>
	<div id="sf3" class="tab">
		<br>
		<br>
		<label>Service</label>
		<select>
			<option>Database</option>
			<option disabled>Coming Soon</option>
		</select>
		<br>
		<br>
	</div>
</div>
</div>