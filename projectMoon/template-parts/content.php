<article <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail(array(250, 250)); ?>
    <p><strong>Posted</strong><em><?php echo get_the_date(); ?></em> by <?php the_author_posts_link(); ?></p>
    <p><strong>Categories: </strong><?php the_category(' '); ?></p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <p><?php the_content(); ?></p>
</article>