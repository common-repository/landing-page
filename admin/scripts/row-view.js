( function( $ ) { 

app.RowView = Backbone.View.extend({
    tagName: 'section',
    className: 'row',
    template: _.template($('#item-template').html()),
    events: {
      'click #rowDelete': 'deleteRow',
      'click #rowEdit': 'EditRow',
      'click #editRowSave': 'updateRow',
      'click #WidthSave': 'updateWidth',
      'dblclick div.column': 'EditColumn',
      'click #editColumnSave': 'updateColumn'
    },
    attributes: function() {
        if(this.model) {
            return {
                RowID: this.model.get('rowID')
            }
        }
        return {}
    },
    initialize: function(){
      _.bindAll(this, 'render','deleteRow','updateRow','EditRow','EditColumn','updateColumn','updateWidth'); // every function that uses 'this' as the current object should be in here
    },
    render: function(){
      this.$el.html(this.template(this.model.toJSON() )  );

      var rowID = this.model.get('rowID');
      var rowCID = this.model.cid;
      rowColumns = this.model.get('columns');
      rowHeight = this.model.get('rowHeight');
      var rowData = this.model.get('rowData');
      var row_bg_img = rowData['bg_img'];
      var row_bg_color = rowData['bg_color'];
      var row_margin = rowData['margin'];
      var row_padding = rowData['padding'];
      var custom_styling = rowData['customStyling'];
      var custom_JS = rowData['customJS'];

      $(this.el).attr('style','height:auto; overflow:hidden; background:'+row_bg_color+'; margin:'+row_margin+'px; padding:'+row_padding+'px;');

      $(this.el).append('<style>'+custom_styling+'</style>');

      if (row_bg_img) {
        $(this.el).css('background','url("'+row_bg_img+'")');
      }
    

      for(var i = 1; i <= rowColumns; i++){
        var this_column = 'column'+i;
        var thisColumnModelData = this.model.get(this_column);
        
        var this_column_options = thisColumnModelData['columnOptions'];
        var this_column_bg_color = this_column_options['bg_color'];
        var this_column_margin = this_column_options['margin'];
        var this_column_padding = this_column_options['padding'];
        var colWidth = this_column_options['width'];
        //var colWidthInPx = Math.floor( (pbWrapperWidth*colWidth)/100);
        var columnMarginTop = this_column_margin['columnMarginTop'];
        var columnMarginRight = this_column_margin['columnMarginRight'];
        var columnMarginBottom = this_column_margin['columnMarginBottom'];
        var columnMarginLeft = this_column_margin['columnMarginLeft'];

        var this_column_margins = "'margin:"+columnMarginTop+"px "+columnMarginRight+"px "+columnMarginBottom+"px "+columnMarginLeft+"px;'";
        var colWidthUnit = '%';
        if (colWidth > 101) {
          colWidthUnit = 'px';
        }else{
          var colWidthUnit = '%';
        }
        if (colWidth === "") {
          switch (rowColumns) {
          case '1':
            colWidth = 100;
            break;
          case '2':
            colWidth = 50;
            break;
          case '3':
            colWidth = 33.2;
            break;
          case '4':
            colWidth = 25;
            break;
          case '5':
            colWidth = 20;
            break;
          case '6':
            colWidth = 16.5;
            break;
          case '7':
            colWidth = 14.1;
            break;
          case '8':
            colWidth = 12.5;
            break;
          case '9':
            colWidth = 11.05;
            break;
          case '10':
            colWidth = 9.9;
            break;  
          default:
            colWidth = 99;
            break;
        }
      }

        $(this.el).append('<div class="column '+this_column+'" id='+rowID+'-'+this_column+' data-col_id='+this_column+' style="width:' + colWidth +colWidthUnit+'; min-height:'+(rowHeight-25)+'px; background:'+this_column_bg_color+'; text-align:'+'contentAlign'+' "><div class="overlay" style="width:'+'100'+'%;" data-col_id='+this_column+' data-overlay_id='+this_column+'><img src="'+pencilIcon+'" style="margin-top:'+((rowHeight-100)/2)+'px; "  id="col-edit-icon" data-col_id='+this_column+' ><p style="color:white; font-size:18px; text-align:center;">  Double Click To Edit The Column</p></div></div>');

        // Column Widgets
        var this_column_widgets = thisColumnModelData['colWidgets'];
        var this_column_widgets_array = _.values(this_column_widgets);

      for (var j = 0; j < this_column_widgets_array.length; j++) { 

        var this_column_widgets_array_C = this_column_widgets_array[j];
        var this_column_widgets_array_current = this_column_widgets_array_C;

        var this_column_type = this_column_widgets_array_current['widgetType'];
        var widgetStyling = this_column_widgets_array_current['widgetStyling'];
        var this_column_editor = this_column_widgets_array_current['widgetWYSIWYG'];
        var this_column_editor_content = this_column_editor['widgetContent'];
        var this_column_img_content = this_column_widgets_array_current['widgetImg'];
        var imgUrl  = this_column_img_content['imgUrl'];
        var imgSize = this_column_img_content['imgSize'];
        var imgAlignment = this_column_img_content['imgAlignment'];
        var this_column_img = "<img src="+imgUrl+" style='text-align:"+imgAlignment+";' align="+imgAlignment+" class='ftr-img-"+this_column+" img-"+imgSize+" '>";

        //Column Menu Widget
        var this_column_menu_content = this_column_widgets_array_current['widgetMenu'];
        var menuName = this_column_menu_content['menuName'];
        var menuStyle = this_column_menu_content['menuStyle'];
        var this_column_menu  = "<img style='max-width:100%;' src='"+PageBuilderAdminImageFolderPath+menuStyle+".png' />";

        //Button Widget
        var this_widget_btn = this_column_widgets_array_current['widgetButton'];
        var btnText = this_widget_btn['btnText'];
        var btnLink = this_widget_btn['btnLink'];
        var btnBgColor = this_widget_btn['btnBgColor'];
        var btnTextColor = this_widget_btn['btnTextColor'];
        var btnFontSize = this_widget_btn['btnFontSize'];
        var btnHoverBgColor = this_widget_btn['btnHoverBgColor'];
        var btnWidth = this_widget_btn['btnWidth'];
        var btnHeight = this_widget_btn['btnHeight'];
        var btnBlankAttr = this_widget_btn['btnBlankAttr'];
        var btnBorderColor = this_widget_btn['btnBorderColor'];
        var btnBorderWidth = this_widget_btn['btnBorderWidth'];
        var btnBorderRadius = this_widget_btn['btnBorderRadius'];
        var btnButtonAlignment = this_widget_btn['btnButtonAlignment'];

        var widgetMtop = this_column_widgets_array_current['widgetMtop'];
        var widgetMleft = this_column_widgets_array_current['widgetMleft'];
        var widgetMbottom = this_column_widgets_array_current['widgetMbottom'];
        var widgetMright = this_column_widgets_array_current['widgetMright'];
        var widgetBgColor = this_column_widgets_array_current['widgetBgColor'];

        switch (this_column_type) {
          case 'wigt-WYSIWYG':
            this_column_content = this_column_editor_content;
            contentAlign = 'none';
            break;
          case 'wigt-img':
            this_column_content = this_column_img;
            contentAlign = imgAlignment;
            break;
          case 'wigt-menu':
            this_column_content = this_column_menu;
            contentAlign = 'none';
            break;
          case 'wigt-btn-gen':
            var this_widget_btn = "<br><div class='wdt-this_column_type' style='text-align:"+btnButtonAlignment+";'><a href='"+btnLink+"' style='text-decoration:none !important;' target='' > <button style='color:"+btnTextColor+" !important;font-size:"+btnFontSize+" !important; background: "+btnBgColor+" !important; background-color: "+btnBgColor+" !important; padding: "+btnHeight+"px "+btnWidth+"px !important; border: "+btnBorderWidth+"px solid "+btnBorderColor+" !important; border-radius: "+btnBorderRadius+"px !important;'>"+btnText+" - Premium Widget Selected</button></a></div><br>";
            this_column_content = this_widget_btn;
            break;
          case 'wigt-pb-form':
            //var this_widget_subscribeForm = this_column_widgets_array_current['widgetSubscribeForm'];
              //var subForm = subscribeFormWidgetRender(this_widget_subscribeForm);
              this_column_content = 'Premium Widget Selected! Please select from Available Widgets.';;
          break;
          case 'wigt-pb-postSlider':
            var this_widget_postsSlider = this_column_widgets_array_current['widgetPBPostsSlider'];
            var postslider = postsSliderWidgetRender(this_widget_postsSlider);
              this_column_content = postslider;
          break;
          case 'wigt-video':
            var this_widget_widgetVideo = this_column_widgets_array_current['widgetVideo'];
            var videoWebM = this_widget_widgetVideo['videoWebM'];
            var videoMpfour = this_widget_widgetVideo['videoMpfour'];
            var videoThumb = this_widget_widgetVideo['videoThumb'];
            var vidAutoPlay = this_widget_widgetVideo['vidAutoPlay'];
            var vidLoop = this_widget_widgetVideo['vidLoop']; 
            var vidControls = this_widget_widgetVideo['vidControls'];

            var widgetVideoRender = "<video "+vidLoop+" muted "+vidAutoPlay+" poster='"+videoThumb+"' class='pbp_renderVideo' style='width:100%;' "+vidControls+" ><source src='"+videoWebM+"' type='video/webm'><source src='"+videoMpfour+"' type='video/mp4'></video>"

              this_column_content = widgetVideoRender;
          break;
          case 'wigt-socialButtons':
            //var this_widget_socialButtons = this_column_widgets_array_current['widgetSocialButtons'];
            //var socialButtons = socialButtonsRender(this_widget_socialButtons);
            this_column_content = this_column_editor_content;
          break;
          default:
            this_column_content = this_column_editor_content;
            contentAlign = 'none';
            break;
        }

        // Render columns
        var this_widget_margins = "'margin:"+widgetMtop+"% "+widgetMright+"% "+widgetMbottom+"% "+widgetMleft+"%; background:"+widgetBgColor+"; background-color:"+widgetBgColor+"; "+widgetStyling+"'";
        $('section[RowID="'+rowID+'"] '+'.'+this_column).append("<div class='widget-"+j+"' style="+this_widget_margins+">"+this_column_content+"</div>");

       //$('.'+this_column).attr('style','width:' + colWidth +'; background:'+this_column_bg_color+';');
     }
      }

      var pbContainer = $('#container');
      var pbWrapperWidth = $('#container').width();
      
      $('.column').resizable({
        containment: '#container',
        maxWidth: pbWrapperWidth,
        start: function (event, ui) {
          this.widthOfNextEl = ui.originalSize.width + ui.element.next().innerWidth();
        },
        resize: function (event, ui) {
          ui.element.next().width(this.widthOfNextEl - ui.size.width);
          ui.element.children('.overlay').width(ui.size.width);
          ui.element.next().children('.overlay').width(ui.element.next().width());
        },
        stop: function(event, ui) {
          //console.log(ui.element.siblings('#WidthSave'));
          var currentPbWrapperWidth = $('#container').width();
          var colPercentageWidth= ui.element.outerWidth()/ currentPbWrapperWidth * 100;
            ui.element.css('width', colPercentageWidth + '%');
            var nextCol = ui.element.next();
            var nextColPercentWidth= nextCol.outerWidth()/ currentPbWrapperWidth * 100;
            nextCol.css('width', nextColPercentWidth + '%');

            ui.element.children('.overlay').css('width','100' + '%');
            ui.element.next().children('.overlay').css('width','100' + '%');

            $(ui.element.siblings('#WidthSave')).trigger('click');
        }
      });

      // Row and column buttons
      $(this.el).append('<div style="display:none;"></div><div id="rowDelete" class="row-btn btn-red btn" title="Delete Row" ><span class="dashicons dashicons-trash"></span></div> <div id="rowEdit" class="row-btn btn"  title="Edit Row"> <span class="dashicons dashicons-edit"></span></div> </p> <div id="WidthSave" class="pb_hidden"></div> <div class="pbHandle row-btn btn" style="background: rgb(45, 60, 60) !important;"><span class="dashicons dashicons-move" title="Move"></span></div>');

     

      $('li[data-model-cid="'+rowCID+'"]').mouseenter(function(){
        $('li[data-model-cid="'+rowCID+'"] .row-btn').css('display','block');
      });
      $('.row').mouseleave(function(){
       $('.row-btn').css('display','none');
      });

      // Save the current model
      return this;
    },
    deleteRow: function(){ // Removes model from collection and save the collection.
      var cong = confirm('Do you want to delete this Row ?');
      if (cong == true) {
        this.model.destroy();
        $(this.el).remove();
      }
    },
    EditRow: function(){

      var row_height = this.model.get('rowHeight');
      var row_no_columns = this.model.get('columns');
      var rowData = this.model.get('rowData');
      var row_bg_img = rowData['bg_img'];
      var row_bg_color = rowData['bg_color'];
      //var rowBgVideoYt = rowData['rowBgVideoYt'];

      var row_margin = rowData['margin'];
      var rowMarginTop = row_margin['rowMarginTop'];
      var rowMarginBottom = row_margin['rowMarginBottom'];
      var rowMarginLeft = row_margin['rowMarginLeft'];
      var rowMarginRight = row_margin['rowMarginRight'];

      var row_padding = rowData['padding'];
      var rowPaddingTop = row_padding['rowPaddingTop'];
      var rowPaddingBottom = row_padding['rowPaddingBottom'];
      var rowPaddingLeft = row_padding['rowPaddingLeft'];
      var rowPaddingRight = row_padding['rowPaddingRight'];

      var row_video = rowData['video'];
      if (typeof(row_video) != "undefined"){
        var rowBgVideoEnable = row_video['rowBgVideoEnable'];
        var rowBgVideoLoop = row_video['rowBgVideoLoop'];
        var rowVideoMpfour = row_video['rowVideoMpfour'];
        var rowVideoWebM = row_video['rowVideoWebM'];
        var rowVideoThumb = row_video['rowVideoThumb'];
      }

      var customStyling = rowData['customStyling'];
      var customJS = rowData['customJS'];

      $('#row_height').val(row_height);
      $('#number_of_columns').val(row_no_columns);
      $('.rowBgImg').val(row_bg_img);
      $('.rowBgColor').val(row_bg_color);
      //$('.rowBgVideoYt').val(rowBgVideoYt);
      $('.rowMarginTop').val(rowMarginTop);
      $('.rowMarginBottom').val(rowMarginBottom);
      $('.rowMarginLeft').val(rowMarginLeft);
      $('.rowMarginRight').val(rowMarginRight);
      $('.rowPaddingTop').val(rowPaddingTop);
      $('.rowPaddingBottom').val(rowPaddingBottom);
      $('.rowPaddingLeft').val(rowPaddingLeft);
      $('.rowPaddingRight').val(rowPaddingRight);
      $('.rowCustomStyling').val(customStyling);
      $('.rowCustomJS').val(customJS);

      $('.rowBgVideoEnable').val(rowBgVideoEnable);
      $('.rowBgVideoLoop').val(rowBgVideoLoop);
      $('.rowVideoMpfour').val(rowVideoMpfour);
      $('.rowVideoWebM').val(rowVideoWebM);
      $('.rowVideoThumb').val(rowVideoThumb);

      $('.rowBgColor').parent().prev().css('background-color',row_bg_color);
      $('.wp-picker-container').css('margin-left','24%');

      $('.edit_options_right').append('<div class="column rules"></div>');

      $(this.el).append('<div id="ulpb_row_controls"> <p><div id="edit_form_close" class="btn-red btn">Close</div></p> <p><div id="editRowSave" class="btn">Save</div>  </div> </div></div>');


      $('.edit_row').css('display','block');
      $('#edit_form_close').click(function(){
        $('.edit_row').slideUp();
        $('#ulpb_row_controls').remove();
      });
    },
    updateRow: function(){

      var rowheight = $('#row_height').val();
      var numberComlumns = $('#number_of_columns').val();
      var rowBgImg = $('.rowBgImg').val();
      var rowBgColor = $('.rowBgColor').val();
      //var rowBgVideoYt = $('.rowBgVideoYt').val();
      var rowMargin = $('.rowMargin').val();
      var customJS = $('.rowCustomJS').val();
      var customStyling = $('.rowCustomStyling').val();

      var rowMarginTop      =   $('.rowMarginTop').val();
      var rowMarginBottom   =   $('.rowMarginBottom').val();
      var rowMarginLeft     =   $('.rowMarginLeft').val();
      var rowMarginRight    =   $('.rowMarginRight').val();
      var rowPaddingTop     =   $('.rowPaddingTop').val();
      var rowPaddingBottom  =   $('.rowPaddingBottom').val();
      var rowPaddingLeft    =   $('.rowPaddingLeft').val();
      var rowPaddingRight   =   $('.rowPaddingRight').val();

      var rowBgVideoEnable   =   $('.rowBgVideoEnable').val();
      var rowBgVideoLoop     =   $('.rowBgVideoLoop').val();
      var rowVideoMpfour     =   $('.rowVideoMpfour').val();
      var rowVideoWebM       =   $('.rowVideoWebM').val();
      var rowVideoThumb       =   $('.rowVideoThumb').val();

      var rowMargin = {
        rowMarginTop: rowMarginTop,
        rowMarginBottom: rowMarginBottom,
        rowMarginLeft: rowMarginLeft,
        rowMarginRight: rowMarginRight,
      };

      var rowPadding = {
        rowPaddingTop: rowPaddingTop,
        rowPaddingBottom: rowPaddingBottom,
        rowPaddingLeft: rowPaddingLeft,
        rowPaddingRight: rowPaddingRight,
      };
      var rowVideo = {
        rowBgVideoEnable: rowBgVideoEnable,
        rowBgVideoLoop: rowBgVideoLoop,
        rowVideoMpfour: rowVideoMpfour,
        rowVideoWebM: rowVideoWebM,
        rowVideoThumb: rowVideoThumb,
      };

      if (rowheight) {
        this.model.set({
          rowHeight: rowheight,
          columns: numberComlumns,
          rowData: {
            bg_color: rowBgColor,
            bg_img: rowBgImg,
            margin: rowMargin,
            padding:rowPadding,
            video: rowVideo,
            customStyling: customStyling,
            customJS: customJS,
          }
        });
      }
      
      $(this.el).html('');
      $('.edit_row').slideUp();
      $('#ulpb_row_controls').remove();
      this.render();
    },
    EditColumn: function(ev){
      var pbWrapperWidth = $('#container').width();
      
      var this_column = $(ev.target).attr('data-col_id');
      var rowID = this.model.get('rowID');
      var thisColumnData = this.model.get(this_column);
      var this_column_widgets = thisColumnData['colWidgets'];
      var this_column_content = thisColumnData['columnContent'];
      var this_column_type = thisColumnData['columnType'];
      var this_column_options = thisColumnData['columnOptions'];
      var this_column_bg_color = this_column_options['bg_color'];
      var this_column_width = this_column_options['width'];

      var this_column_margin = this_column_options['margin'];
      var columnMarginTop = this_column_margin['columnMarginTop'];
      var columnMarginBottom = this_column_margin['columnMarginBottom'];
      var columnMarginLeft = this_column_margin['columnMarginLeft'];
      var columnMarginRight = this_column_margin['columnMarginRight'];

      var this_column_padding = this_column_options['padding'];
      var columnPaddingTop = this_column_padding['columnPaddingTop'];
      var columnPaddingBottom = this_column_padding['columnPaddingBottom'];
      var columnPaddingLeft = this_column_padding['columnPaddingLeft'];
      var columnPaddingRight = this_column_padding['columnPaddingRight'];
      
      var colWidth = $('section[RowID="'+rowID+'"]'+' .'+this_column).width();
      var colWidthPercentage  = ( (colWidth/pbWrapperWidth) * 100);
      colWidthPercentage = colWidthPercentage.toFixed(2);
      $('#columnBgColor').val(this_column_bg_color);
      $('#columnMargin').val(this_column_margin);
      $('#columnPadding').val(this_column_padding);
      $('#columnWidth').val(colWidthPercentage);
      $('.widget-type-field').val(this_column_type);

      $('.columnMarginTop').val(columnMarginTop);
      $('.columnMarginBottom').val(columnMarginBottom);
      $('.columnMarginLeft').val(columnMarginLeft);
      $('.columnMarginRight').val(columnMarginRight);
      $('.columnPaddingTop').val(columnPaddingTop);
      $('.columnPaddingBottom').val(columnPaddingBottom);
      $('.columnPaddingLeft').val(columnPaddingLeft);
      $('.columnPaddingRight').val(columnPaddingRight);

      $('.wp-color-result').css('background-color',this_column_bg_color);
      $('.wp-picker-container').css('margin-left','24%');
      $(this.el).append('<br><p><div id="ulpb_column_controls"><div id="edit_form_close" class="btn-red btn">Close</div></p><p><div id="editColumnSave" style="margin-top: -13px;" class="btn" data-col_id='+this_column+' >Save</div></p><br></div>');

      // Adding Widgets areas to collection
      app.widgetList.reset();
      if (this_column_widgets) {
        app.widgetList.add(this_column_widgets);

    $('.wdt-droppable').droppable({
      accept: ".widget",
      drop: function(event,ui){
        var type = ui.draggable.data('type');
        var curr_droppable = $(this).attr('data-widgetid');
        //alert(curr_droppable);
        $('input[data-widgetType-id="'+curr_droppable+'"]').val(type);
        switch(type){
          case 'wigt-WYSIWYG': var texta = "HTML Editor"; break;
          case 'wigt-img': var texta = "Image Widget"; break;
          case 'wigt-menu': var texta = "Menu Widget"; break;
          case 'wigt-slider': var texta = "Slider Extension"; break;
          case 'wigt-smuzform': var texta = "Form Extension"; break;
          case 'wigt-btn-gen': var texta = "Button Generator Extension"; break;
          default : var texta = 'No widget or extension'; break;
        }


        $('.widget-area-'+curr_droppable).html(texta+ ' is selected <br> To edit click the green button below. <br> To change widget just drop any other widget here.');

        $('.editWidget-'+curr_droppable).trigger('click');
        //console.log('input[data-widgetType-id="'+curr_droppable+'"]');
      }
     });
      }

        $('.edit_column').slideDown();
        $('#edit_form_close').click(function(){
          $('.edit_column').slideUp();
          $('#ulpb_column_controls').remove();
        });

    },
    updateColumn: function(ev){
      var columnToUpdate =  $(ev.target).attr('data-col_id');
      var columnBgColor     = $('.columnBgColor').val();
      var columnMargin      = $('.columnMargin').val();
      var columnPadding     = $('.columnPadding').val();
      var colWidth          = $('.columnWidth').val();
      //var colWidthInPx =  (pbWrapperWidth*colWidth)/100;

      var columnMarginTop = $('.columnMarginTop').val();
      var columnMarginBottom = $('.columnMarginBottom').val();
      var columnMarginLeft = $('.columnMarginLeft').val();
      var columnMarginRight = $('.columnMarginRight').val();
      var columnPaddingTop = $('.columnPaddingTop').val();
      var columnPaddingBottom = $('.columnPaddingBottom').val();
      var columnPaddingLeft = $('.columnPaddingLeft').val();
      var columnPaddingRight = $('.columnPaddingRight').val();


      var columnMargin = {
        columnMarginTop: columnMarginTop,
        columnMarginBottom: columnMarginBottom,
        columnMarginLeft: columnMarginLeft,
        columnMarginRight: columnMarginRight,
      };

      var columnPadding = {
        columnPaddingTop: columnPaddingTop,
        columnPaddingBottom: columnPaddingBottom,
        columnPaddingLeft: columnPaddingLeft,
        columnPaddingRight: columnPaddingRight,
      };
      
        var widgets = app.widgetList.toJSON();
        this.model.set({
          [columnToUpdate] : {
            colWidgets: widgets,
            columnOptions:{
            bg_color: columnBgColor,
            margin: columnMargin,
            padding:columnPadding,
            width: colWidth,
            }
          }
        });
      
      $(this.el).html('');
      $('.edit_column').slideUp();
      $('#ulpb_column_controls').remove();

      this.render();
    },
    updateWidth: function() {
      rowColumns = this.model.get('columns');
      for(var i = 1; i<= rowColumns; i++){
        var this_column = 'column'+i;
        var thisColumnModelData = this.model.get(this_column);
        var this_column_widgets = thisColumnModelData['colWidgets'];
        var this_column_options = thisColumnModelData['columnOptions'];
        var this_column_bg_color = this_column_options['bg_color'];
        var this_column_margin = this_column_options['margin'];
        var this_column_padding = this_column_options['padding'];
        var colWidth = this_column_options['width'];

        var rowID = this.model.get('rowID');
        var colWidth = $('section[RowID="'+rowID+'"]'+' .'+this_column).width();
        var colWidthPercentage = (colWidth/1278)*100;
       var widgets = this_column_widgets;
        this.model.set({
          [this_column] : {
            colWidgets: widgets,
            columnOptions:{
            bg_color: this_column_bg_color,
            margin: this_column_margin,
            padding:this_column_padding,
            width: colWidthPercentage,
            }
          }
        });
      }
    }

});

}( jQuery ) );