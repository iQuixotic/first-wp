<article id='post-<?php the_ID(); ?>' <?php post_class(); ?>>

        <h1><?php the_title(); ?></h1>

    <div class="meta-info">
        <p><strong>Posted </strong><em><?php echo get_the_date(); ?></em> 
        <p>by <span><?php the_author_posts_link(); ?></span></p>
        <p><strong>Categories: </strong><span><?php the_category(' '); ?></span></p>
        <p><?php the_tags('Tags:<span>', ', </span>'); ?></p>
    </div>
    
    <div class="content">
        <?php the_content(); ?></p>
    </div>
</article>