<article <?php post_class(array('class' => 'featured')); ?>>
    <h2><?php the_title(); ?></h2>
    <div class="thumbnail">    
        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
    </div>

    <p><strong>Posted</strong><em><?php echo get_the_date(); ?></em> 
    by <span><?php the_author_posts_link(); ?></span></p>
    <p><strong>Categories: </strong><span><?php the_category(' '); ?></span></p>
    <p><?php the_tags('Tags:<span>', ', </span>'); ?></p>
    <p><?php the_excerpt(); ?></p>
</article>