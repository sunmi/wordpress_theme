<? get_header(); ?>
	<section class="content">
		<section class="box_all">
		<? if( have_posts() ) : ?>
			<? while( have_posts() ) : the_post() ?>
				<div class="cont_info">
					<p class="date"><? the_date(); ?></p>
					<h3><a class="cont_box" href="<? the_permalink(); ?>" title="Permanent Link to <? the_title_attribute(); ?>"><? the_title();?></a></h3>
				</div>
		
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

