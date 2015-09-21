<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title>	
<?php if ( function_exists('is_tag') && is_tag() ) {
	single_tag_title('');
	echo ' < Tag < ';
}
elseif ( is_archive() ) {
	wp_title('');
	echo ' < ';
}
elseif ( is_search() ) {
	wp_specialchars($s).' < Search < ';
}
elseif ( !(is_404()) && (is_single()) || (is_page()) ) {
	wp_title('');
	echo ' < ';
}
elseif ( is_404() ) {
	echo 'Not Found < ';
}
bloginfo('name');
if ( $paged > 1 ) {
	echo ' / P.'.$paged;
} ?>
</title>    
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- <meta name="viewport" content="width=1050"/> -->
<meta name="author" content="Sommi"/>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/icon.png" />
<?php wp_head(); ?>
<meta property="og:image" content="http://somsommi.com/blog/wp-content/uploads/2013/08/000033-4.jpg" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
<![endif]-->
<script src="<?php bloginfo('template_url'); ?>/js/devicecheck.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-46007780-1', 'somsommi.com');
  ga('send', 'pageview');
</script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" />
</head>
<body <?php body_class(); ?>>
<div id="wrap">
	<div>
		<div class="thum">
			<div class="top">
				<div class="m_menu">
					<div class="bt"><button type="button">메뉴</button></div>
					<ul style="display:none">
						<li><a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Resume</a></li>
						<li><a href="/blog/category/portfolio/">Portfoilo</a></li>
						<li><a href="/blog/category/all/">Notes</a></li>
						<li class="m_close"><a href="javascript:void(0)"><span class="blind">닫기</span></a></li>
					</ul>
				</div>
				<div class="menu">
					<div class="main_title">BEING<br>A FOREIGNER</div>
					<!-- <div class="main_switch">
						박<br>선<br>미
					</div> -->
					<ul>
						<li><a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Resume</a></li>
<!-- 						<li><a href="http://somsommi.github.io/" target="_blank">Laboratory</a></li>
 -->						
						<li><a href="/blog/category/portfolio/">Portfoilo</a></li>
 						<li><a href="/blog/category/all/">Notes</a></li>
					</ul>
				</div>
			</div>