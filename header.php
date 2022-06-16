<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head();?>
</head>

<body>

    <header>
        <div class="logo-img">
            <?php the_custom_logo('logo-header'); ?>
        </div>


        <div class="cont_menu">
            <?php wp_nav_menu( array( 'theme_location' => 'primary_menu' ) ); ?>
        </div>
        <div class="cont_search">
            <?php echo file_get_contents(get_template_directory_uri(  ).'/img/search-icon.svg'); ?>
        </div>
    </header>
