<? get_header(); ?>
	<script>
	$(function(){
		$(".twitter .date").each(function(){
			var date = new Date( Date.parse( $(this).text() ) );
			var day, month, year;
			day = date.getDate();
			month = date.getMonth() + 1;
			year = date.getYear() + 1900;

			$(this).text( month + "/" + day + "/" + year );
		});
		$.fn.autoLink = function(){
			return this.each(function(){
				var re = /((http|https|ftp):\/\/[\w?=&.\/-;#~%-]+(?![\w\s?&.\/;#~%"=-]*>))/g;
				$(this).html( $(this).html().replace(re, '<a href="$1" target="_blank">$1</a> ') );
			});
		}
		$(".twitter .text").autoLink();
	});
	</script>

	<section class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php if ( has_post_thumbnail() ) { ?>			
			<div><?php the_post_thumbnail( 'detail-image' );  ?></div>
        <?php } ?>           

            <h3><? the_title(); ?></h3>
       		<?php the_content(); ?> 
                
			<!-- <section class="sns">
				<p class="txt_timeline"><img src="/blog/wp-content/themes/somsommi/images/twitter-bird-light-bgs1.png" alt="Som's twitter"> SOM Timeline</p>
			<?
			define('SCREEN_NAME', 'baninana');
			define('COUNT', '5');
			// define('ENDPOINT_URL', 'https://api.twitter.com/1.1/statuses/home_timeline.json');
			define('ENDPOINT_URL', 'https://api.twitter.com/1.1/statuses/user_timeline.json');
			define('CONSUMER_KEY', 'kN2f96aNT48sdHrhJPUPg');
			define('CONSUMER_SECRET', '7yUer6SCEt5q5cKmNmkeprqFYHRrPDwhi5sbQb2QI');
			define('ACCESS_TOKEN', '124910554-fPpWVgiXmQ4E9AkRioG2AJnRCMOUlPgwmg2J2hD0');
			define('ACCESS_TOKEN_SECRET', '9mlt5vJs0vqzsKRZuHGuMQmB93yi4tL0nC5rLHOOnW8');
			
			$nonce = generate_nonce();
			$timestamp = generate_timestamp();
			
			$text1 = "GET&".urlencode(ENDPOINT_URL)."&";
			$text2 = 
				"count=".COUNT."&"
				."oauth_consumer_key=".CONSUMER_KEY."&"
				."oauth_nonce=".$nonce."&"
				."oauth_signature_method=HMAC-SHA1"."&"
				."oauth_timestamp=".$timestamp."&"
				."oauth_token=".ACCESS_TOKEN."&"
				."screen_name=".SCREEN_NAME;
			$text3 = urlencode( CONSUMER_SECRET )."&".urlencode( ACCESS_TOKEN_SECRET );
			
			$oauth_signature = base64_encode(hash_hmac('sha1', $text1.urlencode( $text2 ), $text3, true));
			
			$url = ENDPOINT_URL."?".$text2."&oauth_signature=".urlencode($oauth_signature);
			
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, $url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = curl_exec($ch); 
			curl_close($ch);
			
			if ($output) 
			{
			    $tweets = json_decode($output,true);
			    print_r("<ol class=\"twitter\">");
			    foreach ($tweets as $tweet)
			    {
			        print_r("<li>");
					print_r("<h1><img src=\"".$tweet[user][profile_image_url]."\" alt=\"logo\"></h1>");
			        print_r("<p class=\"subject\">".$tweet[user][screen_name]." <span class=\"date\">".$tweet[created_at]."</span></p>");
			        print_r("<p class=\"text\">".$tweet[text]."</p>");
			        print_r("");
					// print_r("<p>".$tweet[user][location]."</p>");
			        print_r("</li>");
			    }
			    print_r("</ol>");
			}
			?>
			</section>  -->

       	</section>
       
		<?php endwhile; endif; ?>
	</section>
	<?
	function generate_nonce()
	{
		$mt = microtime();
		$rand = mt_rand();
		return md5($mt.$rand);
	}
	function generate_timestamp()
	{
		return time();
	}
	?>
<? get_footer(); ?>
