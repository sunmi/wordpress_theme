<? get_header(); ?>
	<div class="line">
	<? get_sidebar(); ?>
	<? if( have_posts() ) : ?>
		<? while( have_posts() ) : the_post() ?>
			<div class="divider four emb-thum">
				<a href="<? the_permalink(); ?>" class="grayscale grayscale-fade" title="Permanent Link to <? the_title_attribute(); ?>">
				<? if ( has_post_thumbnail() ) { ?>
					<div class="thum-img"><? the_post_thumbnail('thumbnail'); ?></div>
				<? } else { ?>
					<div class="excerpt">
						<? the_excerpt(); ?>
					</div>
				<? } ?>
					<div class="desc">
						<h3><? the_title();?></h3>
						<p class="date"><? the_date(); ?></p>
					</div>
					<span class="sort <? $category = get_the_category();
							echo $category[0] -> slug
						?>"></span>
				</a>
			</div>
			<? endwhile; ?>
			<? next_posts_link('Older Entries'); ?>
			<? previous_posts_link('Newer Entries'); ?>
			<? else : ?>
			<div class="cont_box">
				<p class="post_none">Nothing found</p>
			</div>
	<? endif; ?>			
	</div>
<script>
$(function(){
	$('.divider a').mouseenter(function(){
		$(this).removeClass("grayscale grayscale-fade")
	});
	$('.divider a').mouseleave(function(){
		$(this).addClass("grayscale grayscale-fade")
	});
});
</script>
<? get_footer(); ?>

