	<div class="footer">
		<address>&copy; <? the_time("Y"); ?> <a href="mailto:baninana@naver.com">SOM</a> All Right Reserved. Theme by SOM</address>
		<a href="/blog/wp-admin">
			<?
			if( is_user_logged_in() ) 	echo "ADMIN";
			else 						echo "LOGIN";
			?>
		</a>
	</div>
</div>
</body>
</html>