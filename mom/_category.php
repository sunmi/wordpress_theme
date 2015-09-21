<? get_header(); ?>
	<div class="content">
		<div class="box_all">
		<? if( have_posts() ) : ?>
			<? while( have_posts() ) : the_post() ?>
				<a class="cont_box" href="<? the_permalink(); ?>" title="Permanent Link to <? the_title_attribute(); ?>">
					<div>
						<div class="cont_info">
							<h3><? the_title(); ?></h3>
						</div>
						<? if ( has_post_thumbnail() ) { ?>
							<div class="thum"><? the_post_thumbnail('thumbnail'); ?></div>
						<? } else { ?>
							<div class="txt"><? the_excerpt(); ?></div>
						<? } ?>
					</div>
				</a>
				<? endwhile; ?>
				<? next_posts_link('Older Entries'); ?>
				<? previous_posts_link('Newer Entries'); ?>
				<? else : ?>
				<div class="cont_box">
					<p class="post_none">Nothing found</p>
				</div>
		<? endif; ?>
		</div>
	</div>
	
<? get_footer(); ?>
