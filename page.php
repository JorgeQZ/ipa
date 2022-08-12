<?php
get_header();

$ft_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
if($ft_image):
    ?>
    <div class="banner-cont" style="background-image: url(<?php echo $ft_image ?>);">
        <div class="title-banner">
            <?php the_title(); ?>
        </div>
    </div>
    <?php
endif; ?>
<div class="main-content">
    <?php
    if(have_posts()):
        while(have_posts()):
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>
<?php get_footer(); ?>
