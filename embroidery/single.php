<? get_header(); ?>
		<div class="divider one post">
		<? if ( have_posts() ) : ?>
			<? while ( have_posts() ) : the_post(); ?>
				<h3 class="maintitle" id="postTop"><? the_title(); ?></h3>
				<p class="date"><? the_date(); ?></p>
				<ul class="nav">
					<li><a href="#comment" class="post_comment">
						<i class="fa fa-comment-o fa-1x" title="comment"></i>
						</button></li>
					<li><a href="javascript:history.back();" class="post_list">
						<i class="fa fa-list-ul fa-1x"></i>
						</button></li>
					<li><a href="#postTop" class="post_top">
						<i class="fa fa-hand-o-up fa-1x"></i>
						</button></li>
				</ul>
				<? include("sns.php"); ?>
				<div class="post-detail"><? the_content(); ?></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/ko_KR/all.js#xfbml=1&appId=176200285901942";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<p class="tags"><? the_tags(""); ?></p>
				<?if ( comments_open() || get_comments_number() ) {
						comments_template();
					}?>
			<? endwhile; ?>
				<!-- <ul class="navi">
					<? next_post_link("<li>NEXT: %link</li>"); ?>
					<? previous_post_link("<li>PREV: %link</li>"); ?>
				</ul> -->
		<? else : ?>
				<p>글이 없습니다.</p>
		<? endif; ?>
		</div>
	
<? get_footer(); ?>
