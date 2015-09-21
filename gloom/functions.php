<? 

// thumbnails
add_theme_support( 'post-thumbnails' ); 

// Load jQuery
if ( !function_exists('core_mods') ) {
	function core_mods() {
		if ( !is_admin() ) {
			wp_deregister_script('jquery');
			wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"));
			/*wp_register_script('jquery.masonry', (get_template_directory_uri()."/js/jquery.masonry.min.js"),'jquery',false,true);
			wp_register_script('gridly.functions', (get_template_directory_uri()."/js/functions.js"),'jquery.masonry',false,true);*/
			
			wp_enqueue_script('jquery');
			/*wp_enqueue_script('jquery.masonry');
			wp_enqueue_script('gridly.functions');*/
		}
	}
	core_mods();
}


//remove 32px
function my_function_admin_bar(){ 
  return false; 
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


/*include_once("http://www.somsommi.com/blog/wp-content/themes/somsommi/googleAnalystics.php");*/
?>