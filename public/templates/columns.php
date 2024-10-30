<?php  if ( ! defined( 'ABSPATH' ) ) exit;
for($i = 1; $i <= $columns; $i++) {
      $Columni = 'column'.$i;
      $currentColumn = $row[$Columni];
      //$columnContentEditor = do_shortcode($currentColumn['columnContent']);
      $columnOptions = $currentColumn['columnOptions'];
      $columnBgColor = $columnOptions['bg_color'];
      $columnMargin = $columnOptions['margin'];
      $columnPadding = $columnOptions['padding'];
      $columnWidth = $columnOptions['width'];

      $columnMarginTop = $columnMargin['columnMarginTop'];
      $columnMarginBottom = $columnMargin['columnMarginBottom'];
      $columnMarginLeft = $columnMargin['columnMarginLeft'];
      $columnMarginRight = $columnMargin['columnMarginRight'];

      $columnPaddingTop = $columnPadding['columnPaddingTop'];
      $columnPaddingBottom = $columnPadding['columnPaddingBottom'];
      $columnPaddingLeft = $columnPadding['columnPaddingLeft'];
      $columnPaddingRight = $columnPadding['columnPaddingRight'];

      /*
      $columnMarginTop = floor( ($columnMarginTop/1268)*100);
      $columnMarginBottom = floor( ($columnMarginBottom/1268)*100);
      $columnMarginLeft = floor( ($columnMarginLeft/1268)*100);
      $columnMarginRight = floor( ($columnMarginRight/1268)*100);

      $columnPaddingTop = floor( ($columnPaddingTop/1268)*100);
      $columnPaddingBottom = floor( ($columnPaddingBottom/1268)*100);
      $columnPaddingLeft = floor( ($columnPaddingLeft/1268)*100);
      $columnPaddingRight = floor( ($columnPaddingRight/1268)*100);
      */


      $columnMarginStyle = "margin:$columnMarginTop"."% $columnMarginRight"."% $columnMarginBottom"."% $columnMarginLeft"."% !important;";

      $columnPaddingStyle = "padding:$columnPaddingTop"."% $columnPaddingRight"."% $columnPaddingBottom"."% $columnPaddingLeft"."% !important;";
      
      $columnContent = "";
      //Widgets
      include('widgets.php');
      
        $columnWidthUnit = '%';
        
        if ($columnWidth == 0 || $columnWidth === "") {
          switch ($columns) {
          case '1':
            $columnWidthPercent = '99';
            break;
          case '2':
            $columnWidthPercent = '49';
            break;
          case '3':
            $columnWidthPercent = '33.3';
            break;
          case '4':
            $columnWidthPercent = '24';
            break;
          case '5':
            $columnWidthPercent = '19';
            break;
          case '6':
            $columnWidthPercent = '16';
            break;
          case '7':
            $columnWidthPercent = '13.5';
            break;
          case '8':
            $columnWidthPercent = '11.5';
            break;
          case '9':
            $columnWidthPercent = '10.5';
            break;
          case '10':
            $columnWidthPercent = '5';
            break;  
          default:
            $columnWidthPercent = '99';
            break;
        }
          } else{
            if ((int)$columnWidth > 101) {
              $columnWidthUnit = 'px';
            }else{
              $columnWidthUnit = '%';
            }
            $columnWidthPercent = $columnWidth;
            // $columnWidthPercent = floor( ($columnWidth/1268)*100);
          }

          //$columnWidthPercent = ($columnWidth/1268)*100;
          $colHeight = '10';
      $columnStyles = "width:".$columnWidthPercent.$columnWidthUnit."; min-height:$colHeight"."px; background-color:$columnBgColor;text-align:; $columnMarginStyle  $columnPaddingStyle";
      ?> <div id='<?php echo $row["rowID"]."-$Columni"; ?>' class='column' style="<?php echo $columnStyles; ?> "> <?php echo $columnContent; ?> </div> <!-- Column ends!-->
      <?php
    } // For loop columns ends here ?>