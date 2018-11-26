<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <!-- This is where the wp stuff starts -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <section class='top-bar'>
        <div class="container">
            <div class="row">
                <div class="social-media-icons col-xl-10 col-md-8 col-sm-8 col-6"></div>
                <div class="search col-xl-2 col-md-4 col-sm-4 col-6 text-right"></div>
            </div>
        </div>
    </section>
    <section class='menu-area'>
    <div class="container">
        <div class="row">            
            <section class='logo col-md-2 col-sm-12 col-12'></section>
            <nav class='main-menu col-md-10 text-right'>
                <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' ) ); ?>
            </nav>
        </div>
    </div>
    </section>
</header>