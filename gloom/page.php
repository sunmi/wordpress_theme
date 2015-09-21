<? get_header(); ?>
	<div class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php if ( has_post_thumbnail() ) { ?>			
			<div><?php the_post_thumbnail( 'detail-image' );  ?></div>
        <?php } ?>           

            <h3><? the_title(); ?></h3>
       		<?php the_content(); ?> 
       	</div>
       
		<?php endwhile; endif; ?>
	</div>
<? get_footer(); ?>
