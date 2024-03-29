<?php get_header();?>

<!--  / left container \ -->
<div id="leftCntr">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
    
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    
        <h2><?php the_title(); ?></h2>
    
        <div class="entry">
            <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?> 
    
        </div>
        
    </div>
    
    <?php comments_template(); ?>
    
    <?php endwhile; else: ?>
    
    <p>Sorry, no posts matched your criteria.</p>
    
    <?php endif; ?>

</div>
<!--  \ left container / -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>