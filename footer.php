
<footer>
	<div class="footer-bar">
	<div class="container">
	
	<!--  Custom widget Area Start -->
	<div id="categories">
	<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('My Custom Widget Area - 1') ) : ?>
	<?php endif; ?>
	</div>
	<!---  Custom widget Area End -->

	<!--  Custom widget Area Start -->
	<div id="social">
	<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('My Custom Widget Area - 3') ) : ?>
	<?php endif; ?>
	</div>
	<!---  Custom widget Area End -->
	
	<!--  Custom widget Area Start -->
	<div id="stuff">
	<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('My Custom Widget Area - 4') ) : ?>
	<?php endif; ?>
	</div>
	<!---  Custom widget Area End -->
	
	
	<p id="copyright">Copyright@2013 CoffeeShop</p>
	</div>
	</div>
	
</footer>
<?php wp_footer(); ?>
</body>
</html>