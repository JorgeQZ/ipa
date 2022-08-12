<?php get_header(); ?>
<div class="main-content" style="padding: 60px">
    <div class="container">
        <div class="column">
            <div>
                <img src="<?php echo  get_field('imagen') ?>">
                <div class="desc">
                    <?php echo get_field('nombre'); ?><br>
                    <strong><?php echo get_field('puesto'); ?></strong>
                </div>
            </div>
        </div>
        <div class="column">
        <div class="item">
            <center><h2>Redes sociales</h2></center>
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
        </div>
    </div>
</div>
<?php
get_footer();
?>
