<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo(); echo ' - '; the_title(); ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <?php wp_head();?>
</head>

<body>

    <header class="<?php if(!is_front_page(  )) { echo 'not_sticked'; }?>">
        <div class="logo-img">
            <?php the_custom_logo('logo-header'); ?>
        </div>


        <div class="cont-menu-right">

            <div class="cont_menu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary_menu' ) ); ?>
            </div>

            <div class="search-bar">
                <!-- <input type="search" placeholder="Buscar..."> -->
                <?php get_search_form(); ?>
            </div>
            <div class="cont_search">
                <?php echo file_get_contents(get_template_directory_uri(  ).'/img/search-icon.svg'); ?>
            </div>
        </div>

        <div class="burguer-cont">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
