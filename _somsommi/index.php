
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
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
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="image_src" href="http://www.somsommi.com/img/000035-2.jpg" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
	<!--[if lt IE 9]>
	<script src="http://somsommi.com/blog/wp-content/themes/somsommi/js/respond.min.js"></script>
	<![endif]-->
	<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,700,100italic,300italic|Homemade+Apple"> -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.6/jquery.mousewheel.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.3/TweenMax.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<script src="http://somsommi.com/blog/wp-content/themes/somsommi/js/common.js"></script>
</head>
<body class="home blog logged-in admin-bar no-customize-support">
<div id="wrap">
	<div class="header_wrap">
		<header class="header main">
			<h1><a href="http://somsommi.com" title="AMBIGUOUS NUMBERS CONFIGURATION" rel="home">AMBIGUOUS NUMBERS CONFIGURATION</a></h1>
			<!-- <p>front-end developer, photographer, art, html, css, javascript, jquary, wordpress</p> -->
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
		<div id="main-menu">
			<div class="show-for-small" id="mobile-menu">
				<div class="contain-to-grid">
				    <nav class="top-bar">
						<div class="title-area">
							<a href="javascript:void(0)" id="mobileBt">NAV</a>
						</div>
						<section class="top-bar-section">
						    <!-- Left Nav Section -->
						    <ul class="right">
						      <li><a href="#top">TOP</a></li>
						      <li><a href="#about" class="about-move">ABOUT</a></li>
						      <li><a href="#work">WORK</a></li>
						      <!-- <li><a href="#favorite">Fáve Ràve</a></li> -->
						      <li><a href="#contact">CONTACT</a></li>
						    </ul>
						    <a href="javascript:void(0);" class="cl">Close</a>
					    </section>
					</nav>
				</div>
			</div>

			<div class="show-for-medium-up" id="desktop-menu">
			    <a href="javascript:void(0)" data-dropdown="drop" id="webBt" class="small"><span></span></a>

			    <br>
			    <ul id="drop" data-dropdown-content="" class="f-dropdown">
			      <li><a href="#top">TOP</a></li>
			      <li><a href="#about" class="about-move">ABOUT</a></li>
			      <li><a href="#work">WORK</a></li>
			      <!-- <li><a href="#favorite">Fáve Ràve</a></li> -->
			      <li><a href="#contact">CONTACT</a></li>
			    </ul>
			</div>
		</div>

	</div>

	<section class="content">
		 
		<div id="welcome">
			<div class="main-animation">
				<div id="parallax-bg1" class="prll">
					<div id="bg1-1"></div>
				</div>
				<div id="parallax-bg2" class="prll">
					<div id="bg2-1"></div>
				</div>
				<div id="parallax-bg3" class="prll">
					<div id="bg3-1"></div>
				</div>
				<div id="parallax-bg4" class="prll">
					<div id="bg4-1"></div>
				</div>
			</div>
			<div class="wel_txt">
				<h3>
					안녕!<br>
					Welcome! I’m Som,
				</h3>
				<p> a Front End Developer based in South Korea. I was planning to say something clever here.<br><br> From now on, I'll introduce my self and describe about me.</p>  
			</div>
			<p class="notice">
			새로운 기술을 제한 없이 적용하는 연습을 해보고자, 
			낮은 브라우저 화면은 고려하지 않았습니다. <br>
			크롬,파이어폭스,IE10이상 브라우저에서 최적화되어 있습니다. <br>
			If you are using Internet Explorer 6,7,8, you cannot see this website well. <br>
			I'd like to make the website to use the newest tech of web, so I did not consider low version of the browsers.<br>
			You should see this site on Chrome, Firefox or IE10 </p>
			<div class="about-open">
				<p class="triangle-border width300">Do you know about me?<br> Click on me!</p>
				<a href="javascript:void(0)" class="clickOn"><img src="<?php bloginfo('template_url'); ?>/images/user.jpg" width="22%"></a>
			</div>
		</div>
		<div id="about" class="off">
			<div class="center">
				<h3>
					About
				</h3>	
				<div class="aboutme">
					<div class="me1">
						<h4>Seon Mi, Park</h4>
						<ul>
							<li>baninana@gmail.com</li>
							<li>Born in South Korea</li>
						</ul>
					</div>
					<div class="me1">
						<h4>Education</h4>
						<ul>
							<li>2012.02 - 2012.03 HTML5/CSS3, Hankuk Vacational College</li>
							<li>2011.06 - 2011.11 Front-end Developer, Hankuk Vacational College</li>
							<li>2006.03 - 2008.02 Diploma of Photography, Seoul Institute of Art</li>
						</ul>
					</div>
					<div class="me1">
						<h4>Jop Experience</h4>
						<ul>
							<li>2011.12 - Currently Staff, Front-end Development, Web Agency The Uber Creative</li>
							<li>2010.09 - 2011.12 Staff, Technical Support in Sony Korea, Ubase</li>
							<li>2009.01 - 2010.08 Team Manager, Photographer, Baby Studio Namugreen</li>
							<li>2008.01 - 2009.01 Education and Guidance, Lecturer, Photo Academy Noon</li>
						</ul>
					</div>
				</div>
				<div class="divide sect5">
					<div>
						<h4 class="asset1">Sincerity</h4>
						<p>I have searched and developed new skills of front-end development everyday. I usually see many websites in the website AWARRRD which are good skills and design. And I have also 
						learned English hard through my study group and I've made a New Year resolution to have 
						IELTS score 6.0(overall).  </p>
					</div>
					<div>
						<h4 class="asset2">Creativity</h4>
						<p>I am interested in Arts and I believe that Creativity is able to help to improve front-end delopment skills and my working performance by relieving my pressures. I like music, painting and photography.
						</p>
					</div>
					<div>
						<h4 class="asset3">Communication</h4>
						<p>
							I think I have to meet communication skill for the work to construct websites. 
							I am thoughtful person. I am sure that whenever I will respect other opinions as well as
							formulate my opinions.
						</p>
					</div>
					<div>
						<h4 class="asset4">Responsibility</h4>
						<p>I couldn't have attachment for my work, more. Because I like development for web
						and I am really interested in that. So I always have worked with responsibility whatever.</p>
					</div>
					<div>
						<h4 class="asset5">Dream</h4>
						<p>I want to be the specialist of front-end development and I am interested in other fields related with web, such as design and backend development. With mastering skills and languige, I will be the best!</p>
					</div>
				</div>	
			</div>	
		</div>
		<div id="work">
			<div id="mainwrapper" class="portfolio">
			    <a href="javascript:alert('작성중입니다.');">
				    <div class="box">  
				        <img src="<?php bloginfo('template_url'); ?>/images/chevrolet.jpg" alt="Chevrolet">  
				        <span class="caption scale-caption">  
					        <h3>Chevrolet</h3>
					        <p class="first">Web / Mobile</p>
					        <p>New: Level of contribution <br> ★★★</p>  
					        <p>operation and maintenance</p>  
				        </span>  
				    </div>  
				</a>
			    <div class="box">  
			        <img src="<?php bloginfo('template_url'); ?>/images/daewoo.jpg" alt="Daewoo ENC">  
			        <span class="caption scale-caption">  
				        <h3>Daewoo ENC</h3>
				        <p class="first">Web</p>
				        <p>New: Level of contribution <br> ★★ <br>(only developed presentation mode)</p> 
			        </span>  
			    </div>  
				<!-- <a href="/blog/seoul-media-city-2014-%EC%84%9C%EC%9A%B8%EB%AF%B8%EB%94%94%EC%96%B4%EC%8B%9C%ED%8B%B0/"> -->
				<a href="#">
				    <div class="box">  
				        <img src="<?php bloginfo('template_url'); ?>/images/media2_1.jpg" alt="Media Sity Seoul 2014">  
				        <span class="caption scale-caption">  
					        <h3>Media Sity Seoul 2014</h3>
					        <p class="first">RWD, Wordpress</p>
					        <p>New: Level of contribution <br> ★★★★★</p>  
					        <p>operation and maintenance</p>  
				        </span>  
				    </div>  
				</a>
				<!-- <a href="/blog/ambiguous-numbers-configuration/"> -->
				<a href="#">
				    <div class="box">  
				        <img src="<?php bloginfo('template_url'); ?>/images/somhome6_1.jpg" alt="Somsommi Website">  
				        <span class="caption scale-caption">  
					        <h3>Somsommi</h3>
					        <p class="first">RWD, Wordpress</p>
					        <p>New: Level of contribution <br> ★★★★★</p>  
					        <p>operation and maintenance</p>  
				        </span>  
				    </div>  
				</a>
				<!-- <a href="/blog/%ED%91%B8%EB%A5%B4%EC%A7%80%EC%98%A4-prugio/"> -->
				<a href="#">
				    <div class="box">  
				        <img src="<?php bloginfo('template_url'); ?>/images/prugio1.jpg" alt="Prugio">  
				        <span class="caption scale-caption">  
					        <h3>Prugio</h3>
					        <p class="first">Web / Mobile</p>
					        <p>New: Level of contribution <br> ★★★★★</p>  
					        <p>operation and maintenance</p>  
					        <p>Aquired Web Accessability Mark</p>  
				        </span>  
				    </div>  
				</a>
			    <!-- <a href="/blog/%EC%82%BC%EC%84%B1-%EC%A0%9C%EC%9D%BC%EB%AA%A8%EC%A7%81-%EC%BC%80%EB%AF%B8%EC%B9%BC/"> -->
				<a href="#">
				    <div class="box">  
				        <img src="<?php bloginfo('template_url'); ?>/images/chemi1.jpg" alt="Samsung Chemical Industries">  
				        <span class="caption scale-caption">  
					        <h3>Samsung Chemical Industries</h3>
					        <p class="first">Web</p>
					        <p>New: Level of contribution <br> ★★★★★</p>  
					        <p>operation and maintenance</p>  
					        <p>Aquired Web Accessability Mark</p> 
				        </span>  
				    </div>  
				</a>
			    <!-- <a href="/blog/%ED%8C%8C%EB%9D%BC%EB%8B%A4%EC%9D%B4%EC%8A%A4-%EC%B9%B4%EC%A7%80%EB%85%B8-paradise-casino/"> -->
				<a href="#">
				    <div class="box">  
				        <img src="<?php bloginfo('template_url'); ?>/images/paradies1.jpg" alt="Paradies Casino">  
				        <span class="caption scale-caption">  
					        <h3>Paradies Casino</h3>  
					        <p class="first">Web / Mobile</p>
					        <p>New: Level of contribution <br> ★★★★★</p>  
					        <p>operation and maintenance</p>  
				        </span>  
				    </div>  
				</a>
			    <!-- <a href="/blog/%ED%8C%8C%EB%9D%BC%EB%8B%A4%EC%9D%B4%EC%8A%A4-%EC%B9%B4%EC%A7%80%EB%85%B8-%EC%B1%84%EC%9A%A9-paradise-casino-recruit/"> -->
				<a href="#">
				    <div class="box">  
				        <img src="<?php bloginfo('template_url'); ?>/images/paradies_recruit1.jpg" alt="Paradies Casino Recruit">  
				        <span class="caption scale-caption">  
					        <h3>Paradies Casino Recruit</h3>   
					        <p class="first">Web</p> 
					        <p>New: Level of contribution <br> ★★★★★</p>  
					        <p>operation and maintenance</p>  
				        </span>  
				    </div>  
				</a>
			    <!-- <a href="/blog/kmi-%ED%95%9C%EA%B5%AD-%EC%9D%98%ED%95%99-%EC%97%B0%EA%B5%AC%EC%86%8C/"> -->
				<a href="#">
				    <div class="box">  
				        <img src="<?php bloginfo('template_url'); ?>/images/kmi1.jpg" alt="KMI">  
				        <span class="caption scale-caption">  
					        <h3>KMI</h3>
					        <p class="first">Web</p>
					        <p>New: Level of contribution <br> ★★★★</p>  
					        <p>operation and maintenance</p>  
				        </span>  
				    </div>  
				</a>
			    <div class="box">  
			        <img src="<?php bloginfo('template_url'); ?>/images/staron.jpg" alt="Samsung Staron Radianz">  
			        <span class="caption scale-caption">  
				        <h3>Samsung Staron Radianz</h3>   
				        <p class="first">Web</p> 
				        <p>Only operation and maintenance</p>   
			        </span>  
			    </div> 
			    <div class="box">  
			        <img src="<?php bloginfo('template_url'); ?>/images/webzine.jpg" alt="Prugio Webzine">  
			        <span class="caption scale-caption">  
				        <h3>Prugio Webzine</h3>  
				        <p class="first">RWD</p> 
				        <p>Only operation and maintenance</p>   
			        </span>  
			    </div>  
			    <div class="box">  
			        <img src="<?php bloginfo('template_url'); ?>/images/alpheon.jpg" alt="GM Alpheon">  
			        <span class="caption scale-caption">  
				        <h3>GM Alphoeon</h3>  
				        <p class="first">Web / Mobile</p> 
				        <p>Only operation and maintenance</p>   
			        </span>  
			    </div>  
			</div>
				
			<div class="divide sect3">
				<div>
					<h3>
						Work
					</h3>

				</div>
				<div>

				</div>
				<div>
				I worked for 2 years at the web agency and I consructed many web sites which are advertisements' using for products, companies and providing services. 
				I had a lot of careers with my present company, but I have constructed some websites from freelance work. I have various work experiances related with web front-end development, HTML4/5, CSS, Javascript, JQuery, Responsible Web Development and wordpress. 

				</div>
			</div>

		</div>
		<!-- <div id="favorite">
			<h3>
				Fáve Ràve
			</h3>
		</div> -->
		<div id="contact">
			<div class="divide sect3">
				<div>
					<h3>
						Contact
					</h3>
					<h4>My Bunker</h4>
					<p>+82 10 4844 04**, <br>
					Seoul, South Korea.</p>
				</div>
				<div>
					<h4>E-Mail</h4>
					<p><a href="mailto:baninana@gmail.com">baninana@gmail.com</a></p>
				</div>
				<div>
					<h4>My Link</h4>
					<ul>
						<li><a href="https://twitter.com/baninana" target="_blank"><img width="10%" src="<?php bloginfo('template_url'); ?>/images/social71.png" alt="Twitter"></a></li>
						<li><a href="https://www.facebook.com/sommi.park" target="_blank"><img width="10%" src="<?php bloginfo('template_url'); ?>/images/facebook7.png" alt="Face book"></a></li>
						<li><a href="http://www.linkedin.com/pub/sommi-park/89/98b/577" target="_blank"><img width="10%" src="<?php bloginfo('template_url'); ?>/images/linkedin2.png" alt="Linked In"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<footer class="footer">
		<div class="foot_in">
			<address>&copy; 2013 <a href="mailto:baninana@gmail.com">SOM</a> All Right Reserved. Theme by SOM</address>
			<a href="/blog/wp-admin">
				ADMIN			</a>
		</div>
	</footer>
</div>
</body>
</html>