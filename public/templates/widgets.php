<?php if ( ! defined( 'ABSPATH' ) ) exit;
	$colWidgets = $currentColumn['colWidgets'];
      for ($j = 0; $j < count($colWidgets); $j++) {  // widgets loop
          $thisWidget = $colWidgets[$j];
          $this_column_type = $thisWidget['widgetType'];
          $widgetStyling = $thisWidget['widgetStyling'];

          $widgetMtop = $thisWidget['widgetMtop'];
          $widgetMleft = $thisWidget['widgetMleft'];
          $widgetMbottom = $thisWidget['widgetMbottom'];
          $widgetMright = $thisWidget['widgetMright'];
          $widgetBgColor = $thisWidget['widgetBgColor'];

          //WYSIWYG Widget
          $this_widget_editor = $thisWidget['widgetWYSIWYG'];
          $thisWidgetContentEditor =  $this_widget_editor['widgetContent'];


          // IMG Widget
          $this_widget_img_content = $thisWidget['widgetImg'];
          $imgUrl  = $this_widget_img_content['imgUrl'];
          $imgSize = $this_widget_img_content['imgSize'];
          $imgAlignment = $this_widget_img_content['imgAlignment'];


          //Menu Widget
          $menuSpecificStyles = " ";
          $menuSpecificClass = " ";
          if ($this_column_type == 'wigt-menu') {
            $this_widget_menu_content = $thisWidget['widgetMenu'];
            $menuName = $this_widget_menu_content['menuName'];
            $menuStyle = $this_widget_menu_content['menuStyle'];
            $menuColor = $this_widget_menu_content['menuColor'];

            if ($menuStyle == 'menu-style-1') {
              $menuSpecificStyles = "display: flex; justify-content: center; align-items: center;";
            } elseif ($menuStyle == 'menu-style-2') {
              $menuSpecificClass = "widget-$j-menuFixed";
            }

            include('menus/'.$menuStyle.'.php');
          }


          switch ($this_column_type) {
            case 'wigt-WYSIWYG':
              $widgetContent = do_shortcode($thisWidgetContentEditor);
              $contentAlignment = ' ';
              break;
            case 'wigt-img':
              $widgetContent = "<img src=".$imgUrl." style='text-align:".$imgAlignment.";' align=".$imgAlignment." class='ftr-img-".$Columni." img-".$imgSize."'>";
              $contentAlignment = $imgAlignment;
              break;
            case 'wigt-menu':
              $widgetContent = $this_widget_menu;
              $contentAlignment = ' ';
              break;
              case 'wigt-btn-gen':
              $widgetContent = 'This widget is only available in <a href="http://pluginops.com/landing-page-builder/?ref=buttonF">premium version</a>.';
              $contentAlignment = ' ';
              break;
              case 'wigt-pb-form':
              $widgetContent = 'This widget is only available in <a href="http://pluginops.com/landing-page-builder/?ref=subformF">premium version</a>.';
              $contentAlignment = ' ';
              break;
              case 'wigt-video':
                $this_widget_widgetVideo = $thisWidget['widgetVideo'];
                $videoWebM = $this_widget_widgetVideo['videoWebM'];
                $videoMpfour = $this_widget_widgetVideo['videoMpfour'];
                $videoThumb = $this_widget_widgetVideo['videoThumb'];
                $vidAutoPlay = $this_widget_widgetVideo['vidAutoPlay'];
                $vidLoop = $this_widget_widgetVideo['vidLoop']; 
                $vidControls = $this_widget_widgetVideo['vidControls'];

                $widgetVideoRender = "<video ".$vidLoop." ".$vidAutoPlay." poster='".$videoThumb."' class='pbp_renderVideo' style='width:100%;' ".$vidControls."='true' ><source src='".$videoWebM."' type='video/webm'><source src='".$videoMpfour."' type='video/mp4'></video>";
                $widgetContent = $widgetVideoRender;
              break;
            default:
              $widgetContent = $thisWidgetContentEditor;
              $contentAlignment = ' ';
                break;
          } // column type switch ends here

          /*
          $widgetMtop = floor( ($widgetMtop/1268)*100);
          $widgetMright = floor( ($widgetMright/1268)*100);
          $widgetMbottom = floor( ($widgetMbottom/1268)*100);
          $widgetMleft = floor( ($widgetMleft/1268)*100); */
          
         /// $columnContentOld = 
          $widgetMarigns = "margin:".$widgetMtop."% ".$widgetMright."% ".$widgetMbottom."% ".$widgetMleft."%; background: $widgetBgColor; background-color:$widgetBgColor; text-align:$imgAlignment;";
          $columnContent = $columnContent."\n <br> \n"."<div class='widget-$j $menuSpecificClass' style='$widgetMarigns $menuSpecificStyles  $widgetStyling' >".$widgetContent."</div>";
      
      } // widget loop ends here
?>