<? 

// thumbnails
add_theme_support( 'post-thumbnails' ); 


//remove 32px
function my_function_admin_bar(){ 
  return false; 
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


/*include_once("http://www.somsommi.com/blog/wp-content/themes/somsommi/googleAnalystics.php");*/
?>