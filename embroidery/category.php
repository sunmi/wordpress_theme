<? get_header(); ?>
	<? get_sidebar(); ?>
	<? if( have_posts() ) : ?>
		<? while( have_posts() ) : the_post() ?>
			<div class="divider one category-list">
				<h3><a href="<? the_permalink(); ?>" title="Permanent Link to <? the_title_attribute(); ?>"><? the_title();?></a></h3>
				<p class="date"><? the_date(); ?></p>
				<span class="sort <? $category = get_the_category();
						echo $category[0] -> slug
					?>"></span>
			</div>
			<? endwhile; ?>
			<div class="oldNew">
				<? next_posts_link('Older Entries'); ?>
				<? previous_posts_link('Newer Entries'); ?>
			</div>
			<? else : ?>
			<div class="cont_box">
				<p class="post_none">Nothing found</p>
			</div>
	<? endif; ?>
<? get_footer(); ?>

