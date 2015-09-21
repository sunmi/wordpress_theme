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
<script>
	
    /*line drawing*/
    function toArray(arr) {
        return Array.prototype.slice.call(arr);
    }
        var svg = document.querySelector('svg');
        svg.style.visibility = 'hidden';

        function fullSketch() {
            svg.style.visibility = '';
            var paths = toArray(svg.querySelectorAll('path'));
            var begin = 0;
            var durations = paths.map(function(path) {
                var length = path.getTotalLength();
                path.style.strokeDasharray = length + ' ' + length;
                path.style.strokeDashoffset = length;
                return Math.pow(length, 0.5) * 0.03;
        });

        paths[0].getBoundingClientRect();

        paths.forEach(function(path, i) {
            path.style.transition = path.style.WebkitTransition = 'stroke-dashoffset ' + durations[i] + 's ' + begin + 's ease-in-out';
            path.style.strokeDashoffset = '0';
            begin += durations[i] + 0.1;
        });
    }
    window.addEventListener('load', fullSketch);

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
						<li><a href="/blog/category/portfolio/">Portfoilo</a></li>
						<li><a href="/blog/category/all/">Notes</a></li>
					</ul>
				</div>
			</div>
			<div class="line first">
				<div class="divider two">
					<div class="box img drawPic">
						<img src="<?php bloginfo('template_url'); ?>/img1.jpg" alt="">
						<svg version="1.1" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
							 y="0px" viewBox="0 0 500 375" xml:space="preserve">
							<g id="Layer_1">
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M286.5,267.2c0.3-0.9,1.2-1.6,2.1-1.8
									s1.9-0.3,2.8,0c1.6,0.4,3.2,1.5,3.3,3.1"/>

								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M292.2,275.3c0.4,0.9,0.6,1.8,0.5,2.8
									c0,0.8-0.3,1.6-0.9,2c-0.8,0.4-1.7,0-2.4-0.5c-0.7-0.5-1.2-1.2-1.5-2c-0.3-0.8-0.2-1.7,0.3-2.4c0.5-0.7,1.4-1.1,2.2-0.8
									C291,274.5,291.9,274.7,292.2,275.3z"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M319.7,269.5c0.4-1.3,0.9-2.6,2.1-3.1
									c0.6-0.3,1.2-0.3,1.9-0.3c0.5,0,1,0,1.4,0.2c1.4,0.4,2.1,1.9,2.5,3.2"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M324.4,274.7c0.5,0.1,1,0.2,1.4,0.5
									c0.2,0.9,0.2,1.7,0.1,2.6c-0.1,0.7-0.2,1.4-0.8,1.7c-0.7,0.4-1.7,0-2.3-0.5c-0.5-0.4-1-0.9-1.3-1.5c-0.3-0.6-0.3-1.4,0-1.9
									c0.5-0.8,1.6-0.9,2.5-1C324.1,274.6,324.3,274.7,324.4,274.7z"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M300.1,290.7c-0.4-1.1,1-2.3,2.2-2
									c1.2,0.3,2,1.4,2.4,2.6c0.1,0.3,0.2,0.6,0.5,0.9c0.2,0.2,0.5,0.3,0.8,0.4c1.3,0.4,3.2,0.2,3.6-1.1c0.2-0.8-0.2-1.7,0-2.5
									c0.4-1.2,2.1-1.3,3.1-0.7s1.6,1.8,2.4,2.8c0.8,1,1.9,1.9,3.1,1.6c1.5-0.3,2.1-2,2.4-3.4c0.4-1.8,0.6-3.7-0.2-5.3
									c-1.2-2.6-4.6-3.6-6-6.2c-1-1.8-0.9-4-1.2-6c-0.1-0.7-0.3-1.4-0.9-1.8c-0.4-0.4-1-0.5-1.6-0.5c-1.5-0.2-3.1-0.4-4.7-0.2
									c-1.6,0.2-3.1,0.9-4.1,2.1c-1,1.2-1.3,2.9-1.6,4.4c-0.5,2.8-1.2,5.8-3,8c-0.8,1-1.8,1.8-2.4,2.9c-0.7,1.1-0.9,2.5-0.2,3.5
									c0.9,1.3,2.8,1.2,4.4,1C299.5,291.1,300.3,291,300.1,290.7z"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M278.3,286.9c-1.8,1.4-3.2,3.2-4.3,5.2"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M285.6,287.2c-1.3,1.8-2.5,3.6-3.7,5.4"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M329.9,287.9c-0.5,1.5-1.1,3-1.7,4.4"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M337.9,288.7c-0.8,1.1-1.5,2.2-2.1,3.4"/>
								<path fill="none" stroke="#C4AF03" stroke-width="3" stroke-miterlimit="10" d="M281.9,322.8c-5.9,0-12,0-17.6,1.8
									c-2.3,0.8-4.6,1.9-6.9,2.8c-1.7,0.6-3.4,1.2-5.2,1.6c-1.1,0.3-2.3,0.5-3.4,0.2c-2.3-0.5-3.8-2.5-5.2-4.4s-3.3-3.7-5.6-3.6
									c-0.8,0-1.6,0.3-2.1,1c-0.5,0.6-0.5,1.4-0.5,2.2c0.2,2.2,1.5,4.3,3.4,5.5c-5.5-0.8-11,1.1-16.3,3c-0.3,0.1-0.6,0.2-0.7,0.4
									c-0.5,0.7,0.5,1.5,1.3,1.8c4.3,1.4,8.8,2.1,13.3,2c-3,0.1-6,0.5-8.8,1.4c-1,0.3-2.1,0.8-2.4,1.7c-0.3,0.9,0.2,1.9,1,2.4
									c0.8,0.5,1.7,0.7,2.7,0.8c2.6,0.3,5.3,0.1,7.8-0.4c-3.5,0.2-7,0.9-10.3,2.2c-0.5,0.2-1.1,0.5-1.2,1c-0.1,0.4,0.2,0.9,0.5,1.2
									c1.2,1.5,3.1,2.3,4.9,2.6s3.8,0.2,5.7,0c2.7-0.3,5.7-0.8,7.4-2.9c0.6-0.8,1-1.7,1.4-2.7c1.2-2.8,2.6-5.6,4.8-7.7
									c3.1-3,7.3-4.4,11.5-5.3c6.5-1.3,13.2-1.5,19.8-0.5"/>
								<path fill="none" stroke="#C4AF03" stroke-width="3" stroke-miterlimit="10" d="M330.9,323.2c5.6,0.7,10.2,4.4,15.2,7
									c4.9,2.7,10.3,4.4,15.8,5.1c0.6,0.1,1.2,0.1,1.7-0.1c0.7-0.2,1.2-0.9,1.6-1.4c0.8-1,1.7-1.9,2.7-2.8c1.3-1.2,3-2.3,4.6-1.8
									c0.4,0.1,0.7,0.3,0.9,0.6c0.2,0.4,0.2,0.8,0.1,1.2c-0.5,2.1-1.9,3.8-3.3,5.4c4.3-1.4,9-1.4,13.3,0.1c0.9,0.3,1.8,0.7,2.5,1.4
									c0.7,0.7,1,1.8,0.6,2.7c-0.5,1.1-1.9,1.5-3.2,1.6c-2.3,0.2-4.6,0.1-6.8-0.4c3.1,1.1,6.4,2.2,8.7,4.6c0.4,0.4,0.8,1,0.5,1.5
									c-0.1,0.2-0.3,0.3-0.5,0.4c-1.6,0.8-3.6,0.8-5.3,0.4s-3.4-1.3-5-2.1c2.5,1.5,5.1,3.1,6.9,5.4c0.4,0.5,0.8,1.2,0.5,1.8
									c-0.2,0.6-0.9,0.8-1.5,1c-1.8,0.5-3.7,1-5.6,0.8c-1.6-0.2-3.2-0.8-4.4-1.9c-1.2-1-2.1-2.4-3.3-3.5c-2.8-2.6-6.8-3.3-10.2-5
									c-2-1-3.9-2.4-5.7-3.8c-2.4-1.9-4.9-3.7-7.3-5.6c-2.1-1.6-4.1-3.1-6.5-4.3c-2.3-1.1-4.9-1.9-7.5-1.6"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M166.2,148.6c-0.4,1.1-1,2.2-1.8,3.1
									s-2,1.5-3.2,1.5c-0.2,0-0.5,0-0.7-0.2c-0.2-0.2-0.3-0.6-0.3-0.9c-0.3-2.7,0.5-5.9,2.8-7.2c0.5-0.3,1-0.5,1.6-0.3
									c0.7,0.2,1.1,0.8,1.3,1.4c0.2,0.7,0.1,1.3,0,2c0.6-1.7,0.1-3.6-0.8-5.1c-0.9-1.5-2.2-2.8-3.4-4.1c-1.9-2.2-3.4-4.8-4.5-7.6
									c2.3,0.3,4.7,0.6,6.7,1.7c2.1,1,3.9,3,4.1,5.3"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M195.7,130.4c-1.3,0.8-2.4,1.9-3,3.2
									c-0.2,0.4-0.3,0.8-0.3,1.2c0.1,0.9,1.2,1.4,2.1,1.1c0.9-0.3,1.4-1.1,1.7-2c0.6-1.8,0.4-3.7-0.2-5.5c-0.5-1.8-1.4-3.5-1.9-5.3
									c-0.9-3.3-0.8-6.8-1.9-10c-0.1-0.3-0.2-0.6,0-0.8c0.2-0.3,0.5-0.3,0.9-0.3c3.4,0,6.6,2.6,7.3,5.9"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M193.8,118.7c1.4,0.3,2.8,0.6,4.1,1.2
									s2.4,1.6,3,2.9"/>
								<path fill="none" stroke="#1748B5" stroke-width="3" stroke-miterlimit="10" d="M219.4,137.6c-1.5,0-2.9,0.5-4.1,1.4
									c-0.2,0.1-0.4,0.3-0.4,0.5c-0.2,0.5,0.5,0.9,1,1.1c1.2,0.5,2.5,0.9,3.7,0.5c1.2-0.4,2.1-2,1.3-3c-0.2-0.2-0.4-0.4-0.6-0.6
									c-0.4-0.6-0.4-1.3-0.3-2c0.6-4.8,1.2-9.5,1.7-14.3c0-0.3,0.1-0.5,0.3-0.7c0.2-0.2,0.5-0.2,0.7-0.2c3.3-0.2,6.6-0.3,9.8-0.3
									c0.2,0,0.3,0,0.5,0.1c0.2,0.1,0.2,0.4,0.2,0.6c0.2,4.4-0.3,8.9-1.2,13.3c-0.8-1.6-3.3-1.6-4.8-0.6c-0.6,0.5-1.2,1.2-1.2,2
									c0.1,1.3,1.7,1.9,3,2.1c0.8,0.1,1.8,0.1,2.5-0.3c0.7-0.4,1.2-1.4,0.8-2.2"/>
								<animate attributeName="stroke-dashoffset" begin="0s" from="100%" to="0%" dur="5s" fill="freeze" />
							</g>
						</svg>

					</div>
				</div>
				<div class="divider two">
					<div class="box">
						<h2>I am </h2>
						I am SOM based Web front-end developer with over 3 years full time experience (since Dec 2011).
<br>I prepared and enhanced my develop skills in private institutes while working, and I turned from Photographer of baby-portrait with about 3 years full time experience since graduated.
<br>I've got a passion for front end web development.
<br>I am pretty good at <strong>HTML, CSS, Javascript, Jquery, RWD, Wordpress</strong>, etc. Besides, I have experiences to produce sites for <strong>Web accesibilty, Wordpress</strong>. I focus on writing clean, elegant and efficient code.
<br><br>Currently, I am in Toronto having a work permit for an year. I will extend my stay from the spouse's work permit and I have a plan to immigrate to Canada. 
					</div>
					<div class="box sns_icon">
						<a class="mgr_20" href="mailto:baninana@naver.com"><i class="fa fa-envelope-o fa-2x"></i></a>
						<a class="mgr_20" href="Tel:+16477830948"><i class="fa fa-phone fa-2x"></i></a>
						<a class="mgr_20" href="https://twitter.com/baninana" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
						<a class="mgr_20" href="https://www.facebook.com/sommi.park" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
						<a href="https://kr.linkedin.com/pub/sommi-park/89/98b/577" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
					</div>
				</div><!-- 
				<div class="divider one editing">
					SORRY! It's NOT completed.<br> Some functions are not working.<br><br>
					I EXPECT TO EDIT MY RESUME! PLEASE LET YOU KNOW WRONG EXPRESSIONS : )
				</div> -->
				<div class="divider one">
					<div class="box history">
						<h2>EDUCATION &amp; WORK EXPERIENCES</h2>
						<p><strong>2014.03 ~</strong><span>Assistant Manager, front-end develop part, <a href="http://www.gabia.com/" target="_blank">Gabia</a></span></p>
						<p><strong>2011.12 ~ 2014.03</strong><span>staff, front-end develop part, <a href="http://www.theuber.co.kr/" target="_blank">The Uber Creative</a> Web Agency</span></p>
						<p><strong>2010.09 ~ 2011.12</strong><span>Staff, Sony Korea part, Ubase </span></p>
						<p><strong>2009.01 ~ 2010.08</strong><span>Photographer, Namugreen baby studio</span></p>
						<p><strong>2008.01 ~ 2009.01</strong><span>Instructor, Noon Photo Academy </span></p>
						<p><strong>2006.03 ~ 2008.02</strong><span>Photography, Seoul Institute of Arts</span></p>
					</div>
				</div>
				<div class="divider two">
					<div class="box history">
						<h2>PROJECT EXPERIENCES <br>(Creating and maintaing)</h2>
						<p><strong>2014.03 ~ </strong><span>gabia mail project</span></p>
						<p><strong>2014.03 ~ </strong><span>gabia.com Website management</span></p>
						<p><strong>2014.02 ~ 2014.03</strong><span>Prugio Webzine web/mobile Renewal -Responsible web</span></p>
						<p><strong>2013.08 ~ 2013.12</strong><span>Chevrolet Korea web/mobile Renewal</span></p>
						<p><strong>2013.03 ~ 2013.05</strong><span>Prugio Website, Mobile Renewal - apply for Web accessility mark (WA)</span></p>
					</div>
				</div>
				<div class="divider two relative">
					<div class="box history">
						<p><strong>2013.02 ~ 2013.06</strong><span>Samsung Chemical website Renewal - apply for Web accessility mark (Webwatch)</span></p>
						<p><strong>2012.11 ~ 2013.01</strong><span>Paradise Casino website Renewal</span></p>
						<p><strong>2012.11</strong><span>Chevrolet Stylebook project</span></p>
						<p><strong>2012.08 ~ 2012.11</strong><span>Paradise Casino Recruit website</span></p>
						<p><strong>2012.04</strong><span>Hansam event website project</span></p>
						<p><strong>2012.04 ~ 2012.07</strong><span>KMI(Korea Medical Institute) Website</span></p>
						<p>... also I participated in many other projects.</p>
					</div>
				</div>
			</div>
			<div class="line">
				<div class="divider two">
					<div class="box">
						<h2>PROFESSIONAL SKILLSET</h2>
						<p><span>W3C Validated HTML5</span></p>
						<p><span>Web Accessibility</span></p>
						<p><span>CSS3 via SASS & Compass, LESS</span></p>
						<p><span>jQuery, ajax, modernizr</span></p>
						<p><span>Wordpress theme development</span></p>
						<p><span>Website optimization + cross browser capabilities</span></p>
						<p><span>SEO</span></p>
					</div>
				</div>
				<div class="divider two">
					<div class="box">
						<h2>TOOLS</h2>
						<p><span>SublimeText 2</span></p>
						<p><span>Edit Plus</span></p>
						<p><span>Github</span></p>
						<p><span>Adobe Creative Suite</span></p>
					</div>
				</div>		
			</div>
			<div class="line">
				<div class="divider two">
					<div class="box">
						<h2>Contact</h2>
						<p><span><a href="mailto:baninana@gmail.com">baninana@gmail.com</a></span></p>
						<p><span><a href="tel:+16477830948">+16477830948</a></span></p>
						<p><span><strong>Toronto</strong>, ON, Canada</span></p>
					</div>
				</div>
				<div class="divider two">
					<div class="box">
						
					</div>
				</div>		
			</div>
			<div class="right">
				<address>
					&copy;	2015 <a href="mailto:baninana@naver.com">SOM</a> All Right Reserved. Theme by SOM
					<a href="/blog/wp-admin">
						<?
						if( is_user_logged_in() ) 	echo "A";
						else 						echo "L";
						?>
					</a>
				</address>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</body>
</html>