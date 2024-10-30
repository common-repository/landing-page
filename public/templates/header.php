<?php if ( ! defined( 'ABSPATH' ) ) exit;
$loadWpHead = $data['pageOptions']['loadWpHead'];
$loadWpFooter = $data['pageOptions']['loadWpFooter'];
$pageSeoDescription = $data['pageOptions']['pageSeoDescription'];
$pageSeoKeywords = $data['pageOptions']['pageSeoKeywords'];
$pageSeoName = $data['pageOptions']['pageSeoName'];
$pageBgImage = $data['pageOptions']['pageBgImage'];
$pageBgColor = $data['pageOptions']['pageBgColor'];
$pagePadding = $data['pageOptions']['pagePadding'];
$pagePaddingTop = $pagePadding['pagePaddingTop'];
$pagePaddingBottom = $pagePadding['pagePaddingBottom'];
$pagePaddingLeft = $pagePadding['pagePaddingLeft'];
$pagePaddingRight = $pagePadding['pagePaddingRight'];

/*
$pagePaddingTop = floor( ($pagePaddingTop/1268)*100);
$pagePaddingBottom = floor( ($pagePaddingBottom/1268)*100);
$pagePaddingLeft = floor( ($pagePaddingLeft/1268)*100);
$pagePaddingRight = floor( ($pagePaddingRight/1268)*100);
*/

?>
<head>
<?php //wp_head(); ?>
<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:url" content="<?php $url = site_url(); echo $url; ?>">
<meta name="description" content="<?php echo $pageSeoDescription; ?>">
<meta name="keywords" content="<?php echo $pageSeoKeywords; ?>">

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" >
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<?php include 'style.css'; ?>

<title><?php echo the_title(); ?></title>
<?php
if ($loadWpHead === 'true') { wp_head(); }
    ?>

  <style type="text/css">
  <?php if (!empty($pageBgImage)) { ?>
    body{
		background:url("<?php echo $pageBgImage; ?>")no-repeat center center; background-size:cover;
    }
  <?php } ?>
  <?php if (!empty($pageBgColor)) { ?>
    body{
		background-color: <?php echo $pageBgColor; ?> ;
    }
  <?php } ?>
  body{
    padding: <?php echo "$pagePaddingTop"."% $pagePaddingRight"."% $pagePaddingBottom"."% $pagePaddingLeft"."% !important"; ?>;
  }
  </style>
  </head>
