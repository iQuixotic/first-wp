<article <?php post_class(array('class' => 'secondary')); ?>>

    <div class="thumbnail">    
        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?></a>
    </div>

    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
    </a>

    <p>
    by <span><?php the_author_posts_link(); ?></span>
    <strong>Categories: </strong><span><?php the_category(' '); ?></span>
    <?php the_tags('Tags:<span>', ', </span>'); ?>
    <?php the_excerpt(); ?>
    </p>
</article>