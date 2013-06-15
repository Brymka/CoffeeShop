<?php if ( have_comments() ) : ?>  
<h4 class="num-comments"><?php printf( _n( 'One Comment', '%1$s Comments', get_comments_number() ),number_format_i18n( get_comments_number() ) );  
?></h4>  
   
<div class="commentlist">
	<?php wp_list_comments(array(
		'style' => 'div',
		'per_page' => '5', //Allow comment pagination
	)); ?>
</div>

<?php paginate_comments_links(); ?> 

<?php else: ?>  
<h3 id="no-comments">No comments</h3>  
<?php endif; ?>  

<?php if ( ! comments_open() ) : ?>  
    <h4>Comments are closed.</h4>  
<?php else: ?>  
  
  
<?php comment_form(array(
	'title_reply'=>'Add a Comment',
	// remove "Text or HTML to be displayed after the set of comment fields"
    'comment_notes_before' => '',
	'comment_notes_after' => '',
	'label_submit' => __( 'Post Comment' ),
)
); ?>  

<?php endif; ?>  
