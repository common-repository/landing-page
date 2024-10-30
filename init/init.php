<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
function laulpb_Load_admin_Class() {
	$load_class = new LAULPB_AdminClass();
}

if (is_plugin_active('page-builder-add/page-builder-add.php' ) ||  is_plugin_active('Page-Builder-Premium-PluginOps/page-builder-add.php' ) ) {
	
} else{
	laulpb_Load_admin_Class();
}


?>