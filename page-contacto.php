<?php
/**
 * Template Name: Contacto
 */

get_header();
?>

<div class="members-container container">
    <div class="title">Contacto</div>

    <div class="grid-members">
        <div class="item">
            <img src="<?php echo get_template_directory_uri(  ).'/img/miembro.png' ?>" alt="">
            <div class="desc">
                Horacio Martinez<br>
                <strong>Director General</strong>
            </div>
            <div class="social-cont">
                <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-linkedin.png'?>" alt="">
                </a>
                <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-email.png'?>" alt="">
                </a>
            </div>
        </div>
        <div class="item">
             <img src="<?php echo get_template_directory_uri(  ).'/img/miembro-horacio.png' ?>" alt="">
            <div class="desc">
                Julio Martinez<br>
                <strong>Gerente</strong>
            </div>
            <div class="social-cont">
                   <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-linkedin.png'?>" alt="">
                </a>
                <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-email.png'?>" alt="">
                </a>
            </div>
        </div>
        <div class="item">
             <img src="<?php echo get_template_directory_uri(  ).'/img/miembro-marlene.png' ?>" alt="">
            <div class="desc">
                Marlen Pinales<br>
                <strong>Ejecutivo de capacitación</strong>
            </div>
            <div class="social-cont">
                   <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-linkedin.png'?>" alt="">
                </a>
                <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-email.png'?>" alt="">
                </a>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(  ).'/img/miembro-default.png' ?>" alt="">
            <div class="desc">
                Leopoldo Ita<br>
                <strong>Consultor SR.</strong>
            </div>
            <div class="social-cont">
                   <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-linkedin.png'?>" alt="">
                </a>
                <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-email.png'?>" alt="">
                </a>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(  ).'/img/miembro-default.png' ?>" alt="">
            <div class="desc">
                Mario Lugo<br>
                <strong>Consultor SR.</strong>
            </div>
            <div class="social-cont">
                   <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-linkedin.png'?>" alt="">
                </a>
                <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-email.png'?>" alt="">
                </a>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(  ).'/img/miembro-mujer.png' ?>" alt="">
            <div class="desc">
                Susana del Toro<br>
                <strong>Ejecutivo de capacitación</strong>
            </div>
            <div class="social-cont">
                   <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-linkedin.png'?>" alt="">
                </a>
                <a class="link" href="#">
                    <img src="<?php echo get_template_directory_uri(  ).'/img/icon-email.png'?>" alt="">
                </a>
            </div>
        </div>
    </div>
</div>


<div class="form-container">
    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="113" title="Contacto"]'); ?>
    </div>
</div>

<?php get_footer(); ?>
