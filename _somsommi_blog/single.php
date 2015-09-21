<? get_header(); ?>

	<section class="content">
		<div class="post_detail">
		<? if ( have_posts() ) : ?>
			<? while ( have_posts() ) : the_post(); ?>
				<h3 class="maintitle"><? the_title(); ?></h3>
				<p class="date"><? the_date(); ?></p>
				<? include("sns.php"); ?>
				<? the_content(); ?>
				<!-- <div class="fb-comments" data-href="<? the_permalink(); ?>" data-colorscheme="light" data-numposts="5" data-width="The pixel width of the plugin"></div> -->				
				<p class="tags"><? the_tags(""); ?></p>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/ko_KR/all.js#xfbml=1&appId=176200285901942";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
			<? endwhile; ?>
			<ul class="navi">
				<? next_post_link("<li>다음: %link</li>"); ?>
				<? previous_post_link("<li>이전: %link</li>"); ?>
			</ul>
		<? else : ?>
			<div class="content">
				<p>글이 없습니다.</p>
			</div>
		<? endif; ?>
		</div>
	</section>
	
<? get_footer(); ?>
