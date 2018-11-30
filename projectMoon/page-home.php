<?php get_header(); ?>
<div class="content-area">
    <main>
        <section class='slide'>
            <div class="container">
                <div class="row">
                    <?php motoPressSlider( "home-slider" ) ?>
                </div>
            </div>
        </section>
        <section class='services'>
            <div class="container">
                
            <div class="row">
                <h1>Our services</h1>
            </div>
                <div class="row">
                    <div class="col-sm-4">
                        <?php 
                        if(is_active_sidebar('services-1')) {
                            dynamic_sidebar('services-1');
                        }
                       ?>
                    </div>
                    <div class="col-sm-4">
                        <?php 
                        if(is_active_sidebar('services-2')) {
                            dynamic_sidebar('services-2');
                        }
                       ?>
                    </div>
                    <div class="col-sm-4">
                        <?php 
                        if(is_active_sidebar('services-3')) {
                            dynamic_sidebar('services-3');
                        }
                       ?>
                    </div>

                </div>
            </div>
        </section>
        <section class='middle-area'>
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-md-3 h-100"><?php get_sidebar( 'home' ); ?></aside>
                    <div class="news col-md-9">
                    <div class="container">
                        <div class="row">
                            <?php 
                            
                            $featured = new WP_Query('post_type=post&posts_per_page=1&cat=5');
                            if($featured->have_posts()) {
                                while($featured->have_posts()): $featured->the_post();

                            ?>
                                <!-- here goes content -->
                                <div class="col-12">
                                <?php get_template_part('template-parts/content', 'featured'); ?>
                                </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            }

                            // second loop
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'category__not_in' => array(8),
                                'category__in' => array(9, 10),
                                'offset' => 1
                            );
                            
                            $secondary = new WP_Query($args);
                            if($secondary->have_posts()) {
                                while($secondary->have_posts()): $secondary->the_post();

                            ?>
                                <!-- here goes content -->
                                <div class="col-6">
                                <?php get_template_part('template-parts/content', 'secondary'); ?>
                                </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            }

                            ?>
                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='map'>
            <div class="container">
                <div class="row">
                    Map
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>
