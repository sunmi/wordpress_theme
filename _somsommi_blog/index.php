<? get_header(); ?>
	
	<section class="content" <?php if(get_bloginfo('name') != 'Blog') : ?> style="display:none"<? endif; ?>>
		<? get_sidebar(); ?>
		<section class="box_all">
			<div class="sq_box">
			<? if( have_posts() ) : ?>
			<? while( have_posts() ) : the_post() ?>
				<a class="cont_box" href="<? the_permalink(); ?>" title="Permanent Link to <? the_title_attribute(); ?>">
					<span class="sort <? $category = get_the_category();
						echo $category[0] -> slug
					?>"></span>
 					<article>
						<div class="cont_info">
							<p class="date"><? the_date(); ?></p>
							<h3><? the_title();?></h3>
						<? if ( has_post_thumbnail() ) { ?>
							<div class="thum"><? the_post_thumbnail('thumbnail'); ?></div>
						<? } else { ?>
							<div class="txt"><? the_excerpt(); ?></div>
						<? } ?>
						</div>
					</article>
				</a>
				<? endwhile; ?>
			</div>
			<div class="oldNew">
				<? next_posts_link('Older Entries'); ?>
				<? previous_posts_link('Newer Entries'); ?>
			</div>
			<? else : ?>
			<article class="cont_box">
				<p class="post_none">Nothing found</p>
			</article>
		<? endif; ?>
		</section>
	</section>
	
<? get_footer(); ?>
