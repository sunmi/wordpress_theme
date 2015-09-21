<? get_header(); ?>

	<div class="content" >
		<? get_sidebar(); ?>
		<div class="box_all">
			<div class="sq_box">
			<? if( have_posts() ) : ?>
			<? while( have_posts() ) : the_post() ?>
				<a class="cont_box" href="<? the_permalink(); ?>" title="Permanent Link to <? the_title_attribute(); ?>">
					<span class="sort <? $category = get_the_category();
						echo $category[0] -> slug
					?>"></span>
 					<div>
						<div class="cont_info">
							<p class="date"><? the_date(); ?></p>
							<h3><? the_title();?></h3>
						<? if ( has_post_thumbnail() ) { ?>
							<div class="thum"><? the_post_thumbnail('thumbnail'); ?></div>
						<? } else { ?>
							<div class="txt"><? the_excerpt(); ?></div>
						<? } ?>
						</div>
					</div>
				</a>
				<? endwhile; ?>
			</div>
			<div class="oldNew">
				<? next_posts_link('Older Entries'); ?>
				<? previous_posts_link('Newer Entries'); ?>
			</div>
			<? else : ?>
			<div class="cont_box">
				<p class="post_none">Nothing found</p>
			</div>
		<? endif; ?>
		</div>
	</div>
	
<? get_footer(); ?>
