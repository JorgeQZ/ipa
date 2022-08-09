<?php
/**
 * Template Name: Gaceta
 */

get_header();
?>


<div class="banner-cont" style="background-image: url(<?php echo get_template_directory_uri(  ).'/img/close-plant-female-hands-care-600w-1672039984.jpg.png';?>);">
    <div class="title-banner">
        Gaceta
    </div>
</div>

<div class="container">
    <div class="grid-list-item">
        <?php
        $args = array(
            'post_type' => 'gaceta',
            'post_status' => 'publish',
            'posts_per_page' => 8,
            'orderby' => 'DATE',
            'order' => 'DESC',
        );

        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          ?>
           <a href="<?php echo get_the_permalink().'?postid='.get_the_ID(); ?>" class="item" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>);" >
            <div class="title"><?php the_title(); ?></div>
            <div class="desc"><?php the_excerpt(); ?></div>
            <div class="overlay"></div>
            </a>
          <?php
        endwhile;

        wp_reset_postdata();
        ?>
    </div>
</div>
<?php
get_footer();
?>
