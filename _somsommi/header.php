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
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js?ver=3.5.2'></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="image_src" href="http://www.somsommi.com/img/000035-2.jpg" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
	<![endif]-->
	<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,700,100italic,300italic|Homemade+Apple"> -->
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/masonry/3.1.1/masonry.pkgd.js'></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-46007780-1', 'somsommi.com');
	  ga('send', 'pageview');

	</script>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
	<div class="header_wrap">
		<header class="header">
			<h1><a href="http://somsommi.com" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">AMBIGUOUS NUMBERS CONFIGURATION</a></h1>
			<!-- <p><?php bloginfo(description); ?></p> -->
			<div class="navigation">
				<nav class="gnb">
					<ul>
						<li><a href="/">HOME</a></li>
						<li><a href="/about">ABOUT</a></li>
						<li><a href="/blog/category/portfolio/">PORTFOLIO</a></li>
						<li><a href="/photo1">PHOTO</a></li>
						<li><a href="/space">BLOG</a></li>
					</ul>
					<!-- <a href="http://www.twitter.com/baninana/" target="_blank" class="twit"><img src="/blog/wp-content/themes/somsommi/images/twitter-bird-light-bgs1.png" alt="Som's twitter"></a> -->
				</nav>
			</div>
		</header>
	</div>
