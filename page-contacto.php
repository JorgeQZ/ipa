<?php
/**
 * Template Name: Contacto
 */

get_header();
?>

<div class="members-container container">
    <div class="title">Contacto</div>

    <div class="grid-members">
        <?php
        $args = array(
           'post_type' => 'miembro',
           'post_status' => 'publish',
           'posts_per_page' => -1,
           'orderby' => 'DATE',
           'order' => 'ASC',
        );

        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) :
            $loop->the_post();
            ?>
            <div class="item">
                <img src="<?php echo get_field('imagen'); ?>" alt="">
                <div class="desc">
                <?php echo get_field('nombre'); ?><br>
                <strong><?php echo get_field('puesto'); ?></strong>
                </div>
                <div class="social-cont">
                    <?php if(get_field('facebook')): ?>
                        <a class="link" href="<?php echo get_field('facebook'); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(  ).'/img/icon-facebook.png'?>" alt="">
                        </a>
                    <?php endif;?>

                    <?php if(get_field('instagram')): ?>
                        <a class="link" href="<?php echo get_field('instagram'); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(  ).'/img/icon-instagram.png'?>" alt="">
                        </a>
                    <?php endif;?>


                    <?php if(get_field('twitter')): ?>
                        <a class="link" href="<?php echo get_field('twitter'); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(  ).'/img/icon-twitter.png'?>" alt="">
                        </a>
                    <?php endif;?>

                    <?php if(get_field('LinkedIn')): ?>
                        <a class="link" href="<?php echo get_field('LinkedIn'); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(  ).'/img/icon-linkedin.png'?>" alt="">
                        </a>
                    <?php endif;?>


                    <?php if(get_field('correo')): ?>
                        <a class="link" href="mailto:<?php echo get_field('correo'); ?>" target="_top">
                            <img src="<?php echo get_template_directory_uri(  ).'/img/icon-email.png'?>" alt="">
                        </a>
                    <?php endif;?>
                </div>
            </div>
            <?php
        endwhile;
        ?>
    </div>
</div>


<div class="form-container">
    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="113" title="Contacto"]'); ?>
    </div>
</div>

<?php get_footer(); ?>
