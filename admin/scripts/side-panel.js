( function( $ ) {

if (isPub == "publish") { 
  var btn_text = "Save Page"; 
} else {var btn_text = "Publish Page"; }
$('#side-sortables').append('<div id="savePageSide"><div id="SavePageOther" class="btn-green aligncenter large-btn">'+btn_text+'</div></div>');

$ftrList = $('#ftr-list').html();
$('#side-sortables').append('<div style="min-height:275px; background:#fff; margin-top:25px; border: 3px dashed #7fc9fb;" >'+$ftrList+'</div>');

$sideOptions = $('#sideOptions').html();
$('#side-sortables').append('<div style="min-height:275px; background:#fff; margin-top:25px; border: 3px dashed #b4b9be;" class="pbAdvancedOptions">'+$sideOptions+'</div>');


$('#side-sortables').append('<br> <br><span style="font-size:15px"> Please send us your <a href="https://wordpress.org/support/plugin/page-builder-add" target="_blank">feedback</a></span>');

$('.switch').click(function(ev){
  var thisSwitch = $(ev.target).attr('class');
  var checkSwitch = $('.'+thisSwitch).attr('checked');
  if (checkSwitch == 'checked') {
    $('.'+thisSwitch).removeAttr('checked');
  } else{
    $('.'+thisSwitch).attr('checked','checked');
  }
});

$('#SavePageOther').click(function(){
  $('#SavePage').trigger('click');
});



 }( jQuery ) );