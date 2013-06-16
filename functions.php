<?php  
function coffeeshop_widgets_init(){  
    register_sidebar(array(  
    'name' => __('sidebar'),  
    'before_widget' => '<div class="sidebar-box">',  
    'after_widget' => '</div>',  
    'before_title' => '<span class="sidebar-title">',  
    'after_title' => '</span>',  
));  

    register_sidebar( array(
   'name' => __( 'My Custom Widget Area - 1'),
   'id' => 'mycustomwidgetarea',
   'description' => __( 'An optional widget area for your site footer', 'coffeeshop' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
));
   

    register_sidebar( array(
   'name' => __( 'My Custom Widget Area - 2'),
   'id' => 'mycustomwidgetarea2',
   'description' => __( 'An optional widget area for your site footer', 'coffeeshop' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );   
   
    register_sidebar( array(
   'name' => __( 'My Custom Widget Area - 3'),
   'id' => 'mycustomwidgetarea3',
   'description' => __( 'An optional widget area for your site footer', 'coffeeshop' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );   

    register_sidebar( array(
   'name' => __( 'My Custom Widget Area - 4'),
   'id' => 'mycustomwidgetarea4',
   'description' => __( 'An optional widget area for your site footer', 'coffeeshop' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );    

} //coffeeshop_widgets_init
add_action( 'widgets_init', 'coffeeshop_widgets_init' );


if ( ! isset( $content_width ) )
	$content_width = 960;


function coffeeshop_setup(){
	add_editor_style();
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'custom-background', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
}

function coffeeshop_styles(){

	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'coffeeshop_styles' );

function coffeeshop_content_nav($html_id){
	global $wp_query;
	
	 if ( $wp_query->max_num_pages > 1 ) :   ?>
        <div id="older-posts"><?php next_posts_link('Older Posts'); ?></div>  
        <div id="newer-posts"><?php previous_posts_link('Newer Posts'); ?></div>  
		
<?php endif;  
} //coffeeshop_content_nav	
	
	
	





?>