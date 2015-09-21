<? get_header(); ?>
	<section class="content">
		<?php if(get_bloginfo('name') != 'Blog') : ?> 
		<!-- <section class="back_id">
			<p class="t01">NUMBER'S LYING</p>
			<p class="t02">AMBIGUOUS<br>FACT</p>
			<p class="t03">SOMEONE CLASSIFIES FACT</p>
			<p class="t04">DEFINE COMMON OBJECT</p>
			<p class="t05">EXPRESS AND CREATE</p>
			<p class="t06">ART</p>
			<p class="t07">USE THE OBJECT</p>
			<p class="t08">OBJECT-ORIENTED PROGRAMMING</p>
			<p class="t09">&#8595;</p>
			<p class="t10">&#8595;&#8595;&#8595;</p>
			<p class="t11">&#8594;</p>
			<p class="t12">&#8595;</p>
			<p class="t13">&#8594;</p>
			<p class="t14">&#8594;</p> 
		</section> -->
		<? endif; ?>
		<section class="box_all" <?php if(get_bloginfo('name') != 'Blog') : ?> style=""<? endif; ?>>
			<div class="sq_box">
				<? if( have_posts() ) : ?>
					<? while( have_posts() ) : the_post() ?>
				<a class="cont_box" href="<? the_permalink(); ?>" title="Permanent Link to <? the_title_attribute(); ?>">
					<article>
						<div class="cont_info">
							<p class="date"><? the_date(); ?></p>
							<h3><? the_title(); ?></h3>
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
