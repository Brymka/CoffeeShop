<?php get_header(); ?>

<div id="content">

	<div class="lite-slider">
	<?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?>
	</div>

<?php if ( ! have_posts() ) : ?>  
        <h1>Not Found</h1>  
            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>  
<?php endif; ?>  

<div class="post-box">

<?php
$page_num = $paged;
if ($pagenum='') $pagenum =1;
query_posts('showposts=3&paged='.$page_num); ?>
<?php while ( have_posts() ) : the_post(); ?>  

<?php wp_link_pages(); ?>

<div class="post" <?php the_ID(); ?> <?php post_class(); ?> >
        <h1><a id="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>  
        <div class="post-details">  
            <div class="post-details-left">  
                Posted on <strong><?php the_date(); ?></strong> by <span class="author"><?php the_author(); ?></span> under <span class="author"><?php the_category(', '); ?></span>  
                </div>  
                <div class="post-details-right">  
<?php edit_post_link('Edit', '<span class="comment-count">  ' , '</span>'); ?><span class="comment-count"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></span>  
</div>  
        </div>  
  
        <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>  
                <?php the_excerpt(); ?>  
        <?php else : ?>  
                <?php the_content('Read More'); ?>  
        <?php endif; ?>  
  
      
    </div><!-- post -->  
	
<?php endwhile; ?>  
</div>


<a class="twitter-timeline" href="https://twitter.com/Brymka17/favorites" data-widget-id="335445289349550080"> Tweets by @Brymka17</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

 

</div>

<?php get_footer(); ?>

