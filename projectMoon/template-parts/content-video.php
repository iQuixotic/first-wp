<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
    </a>

    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(array(250, 250)); ?>
    </a>
    <p>Posted <em><?php echo get_the_date(); ?></em></p>
    <p><strong>Categories: </strong><?php the_category(' '); ?></p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <p><?php the_content(); ?></p>
</article>