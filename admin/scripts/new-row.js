( function( $ ) { 

$( ".newRow" ).click( function() {

 var row_height = 100;
 var row_no_columns = 1;
 var row_bg_img = "Image URL";
 var row_bg_color = '#ffffff';
 var row_margin = 0;
 var row_padding = 0;

$('.wp-picker-container').css('margin-left','24%');

  $('body').append('<div id="ulpb_row_controls"> <p><div id="newRowClose" class="btn-red btn">Close</div></p> <p><div id="newRowSave" class="btn">Save</div></p> </div> </div></div>');

$('.new_row_div').css('display','block');


$('#newRowSave').click(function(){
  var rowheight = $('#new_row_height').val();
  var numberComlumns = $('#new_row_number_of_columns').val();
  var rowBgImg = $('.new_rowBgImg').val();
  var rowBgColor = $('.new_rowBgColor').val();
  var rowMargin = $('.new_rowMargin').val();
  var rowPadding = $('.new_rowPadding').val();
  var customStyling = $('.new_rowCustomStyling').val();
  var customJS = $('.new_rowCustomJS').val();


  if (rowheight && numberComlumns) {
    app.rowList.add( {
      rowID: 'ulpb_Row'+Math.floor((Math.random() * 200000) + 100),
      rowHeight: rowheight,
      columns: numberComlumns,
      rowData: {
        bg_color: rowBgColor,
        bg_img: rowBgImg,
        margin: {
          rowMarginTop: 0,
          rowMarginBottom: 0,
          rowMarginLeft: 0,
          rowMarginRight: 0,
        },
        padding:{
          rowPaddingTop: 0,
          rowPaddingBottom: 0,
          rowPaddingLeft: 0,
          rowPaddingRight: 0,
        },
        customStyling: '/* Insert your custom CSS here. */',
        customJS: '/* Insert your JS codes here. */',
      }
    });
    $('.new_row_div').slideUp();
    $('#ulpb_row_controls').remove();
  }else{
    alert('Both fields are required!');
  }
});


$('#newRowClose').click(function(){
    $('.new_row_div').slideUp();
    $('#ulpb_row_controls').remove();
});

});


}( jQuery ) );