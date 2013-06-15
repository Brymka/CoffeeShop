<?php  
if ( function_exists('register_sidebar') )  
    register_sidebar(array(  
    'name' => 'sidebar',  
    'before_widget' => '<div class="sidebar-box">',  
    'after_widget' => '</div>',  
    'before_title' => '<span class="sidebar-title">',  
    'after_title' => '</span><div class="dots"></div>',  
));  

if ( ! isset( $content_width ) )
	$content_width = 960;


function coffeeshop_setup(){
	add_editor_style();
	
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'custom-background', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
}

add_filter('get_search_form', 'new_search_button');



/************** NEW WIDGET AREA ***********/
if ( function_exists('register_sidebar') )
    register_sidebar( array(
   'name' => __( 'My Custom Widget Area - 1'),
   'id' => 'mycustomwidgetarea',
   'description' => __( 'An optional widget area for your site footer', 'coffeeshop' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );
   
if ( function_exists('register_sidebar') )
    register_sidebar( array(
   'name' => __( 'My Custom Widget Area - 2'),
   'id' => 'mycustomwidgetarea2',
   'description' => __( 'An optional widget area for your site footer', 'coffeeshop' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );   
   
if ( function_exists('register_sidebar') )
    register_sidebar( array(
   'name' => __( 'My Custom Widget Area - 3'),
   'id' => 'mycustomwidgetarea3',
   'description' => __( 'An optional widget area for your site footer', 'coffeeshop' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );   
if ( function_exists('register_sidebar') )
    register_sidebar( array(
   'name' => __( 'My Custom Widget Area - 4'),
   'id' => 'mycustomwidgetarea4',
   'description' => __( 'An optional widget area for your site footer', 'coffeeshop' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );    
/*********************************************/   




?>