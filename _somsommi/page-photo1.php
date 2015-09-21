<? get_header(); ?>
	
	<section class="content">
        <div class="widget">
            <h3 class="screen_out">Categories</h3>
            <div class="widget_body">
                <ul>
                   <li><a href="/photo1/">PARIS_1</a></li>
                   <li><a href="/photo2/">PARIS_2</a></li>
                </ul>
            </div>
        </div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
			<section class="preloader">
				<img src="http://www.somsommi.com/img/preloader.gif" alt="please wait" />
			</section>
            <!-- <h3><? the_title(); ?></h3> -->
       		 <?php the_content(); ?> 
                
       	</section>
       
		<?php endwhile; endif; ?>
	</section>
	<script>
	$(function(){
		$("#post-51 p").css('display','none');
		$(window).load(function(){

			var width = parseInt($(this).width());

			function masonryFunction(){
				if (width > 640){

					$("#post-51 p").each(function(){
						$(this).css({
							width:Math.ceil(Math.random()*3)*100-10,
							
						});
					});
					$("#post-51").masonry({
						columnWidth: 100
					});
				}
			}

		    $(window).resize(function(){
		    	masonryFunction()
		    }).resize();
		    $('.preloader').css('display','none');
			$("#post-51 p").css('display','block');
			masonryFunction();
		});
	});
	</script>
	
<? get_footer(); ?>
