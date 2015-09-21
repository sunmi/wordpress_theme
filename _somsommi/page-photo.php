<? get_header(); ?>
	
	<section class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                

            <!-- <h3><? the_title(); ?></h3> -->
       		 <?php the_content(); ?> 
                
       </section>
       
		<?php endwhile; endif; ?>
	</section>
	<script>
	$(function(){
		$(window).load(function(){
			$("#post-51 p").each(function(){
				$(this).css({
					width:Math.ceil(Math.random()*3)*100-10,
					
				});
			});
			$("#post-51").masonry({
				columnWidth: 100
			});
		});
	});
	</script>
	
<? get_footer(); ?>
