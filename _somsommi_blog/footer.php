	<footer class="footer">
		<div class="foot_in">
			<address>&copy; <? the_time("Y"); ?> <a href="mailto:baninana@gmail.com">SOM</a> All Right Reserved. Theme by SOM</address>
			<a href="/blog/wp-admin">
				<?
				if( is_user_logged_in() ) 	echo "ADMIN";
				else 						echo "LOGIN";
				?>
			</a>
		</div>
	</footer>
</div>
</body>
</html>