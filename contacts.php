<?php get_header(); ?>


<!--  Custom widget Area Start -->
	<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('My Custom Widget Area - 2') ) : ?>
	<?php endif; ?>
	<!---  Custom widget Area End -->

<?php get_footer(); ?>