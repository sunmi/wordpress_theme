<? get_header(); ?>
	<section class="content">
		<section class="box_all">
		<? if( have_posts() ) : ?>
			<? while( have_posts() ) : the_post() ?>
				<a class="cont_box" href="<? the_permalink(); ?>" title="Permanent Link to <? the_title_attribute(); ?>">
					<article>
						<div class="cont_info">
							<h3><? the_title(); ?></h3>
						</div>
						<? if ( has_post_thumbnail() ) { ?>
							<div class="thum"><? the_post_thumbnail('thumbnail'); ?></div>
						<? } else { ?>
							<div class="txt"><? the_excerpt(); ?></div>
						<? } ?>
					</article>
				</a>
				<? endwhile; ?>
				<? next_posts_link('Older Entries'); ?>
				<? previous_posts_link('Newer Entries'); ?>
				<? else : ?>
				<article class="cont_box">
					<p class="post_none">Nothing found</p>
				</article>
		<? endif; ?>
		</section>
	</section>
	
<? get_footer(); ?>
