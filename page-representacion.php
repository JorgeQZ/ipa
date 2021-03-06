<?php
/**
 * Template Name: Representacion
 */

get_header();
?>


<div class="banner-cont" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>);">
    <div class="title-banner">
        <?php the_title(); ?>
    </div>
</div>

<div class="main-content">
    <div class="container cont-text-img">
        <div class="cont-text">
            <div class="title">
                Representación en
                Consejos Privados
            </div>
            <div class="desc">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem nostrum dolor reprehenderit nesciunt, consequuntur, aliquam sit officiis ipsa cumque, quidem hic voluptatibus incidunt vero expedita perferendis quasi? Nisi, quo molestias!
            </div>
        </div>
        <div class="cont-img">
            <img src="<?php echo get_template_directory_uri().'/img/stock-photo-female-industrial-engineer-in-the-hard-hat-uses-laptop-computer-while-standing-in-the-heavy-761907346.jpg';?>" alt="">
        </div>
    </div>

    <div class="container">
        <p class="grid-title">Integrantes del Consejo IPA</p>
        <div class="grid-cont">
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/alen.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/alfa.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/arca.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/cemex.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/clarios.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/cuprum.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/cydsa.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/deacero.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/femsa.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/copamex.png'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/heineken.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/grupotq.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/ternium.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/viakem.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/grupopromax.jpg;' ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/whirpool.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/vitro.jpg'; ?>" alt=""></div>
            <div class="grid-item"><img src="<?php echo get_template_directory_uri().'/img/logo/protexa.jpg'; ?>" alt=""></div>
        </div>

        <div class="three-columns">
            <div class="item">
                <div class="icon-img">
                    <img src="<?php echo get_template_directory_uri().'/img/logo/concamin.png'; ?>" alt="">
                </div>
                <div class="head-text">CONCAMIN</div>
                <div class="desc">
                    Comisiones de Agua y Sustentabilidad
                </div>
            </div>
            <div class="item">
                <div class="icon-img">
                    <img src="<?php echo get_template_directory_uri().'/img/logo/cesespedes.png'; ?>" alt="">
                </div>
                <div class="head-text">CESPEDES</div>
                <div class="desc">
                    Consejo Directivo y Equipo de Análisis Legislativo y Cabildeo
                </div>
            </div>
            <div class="item">
                <div class="icon-img">
                    <img src="<?php echo get_template_directory_uri().'/img/logo/consejo-nuevo-leon.png'; ?>" alt="">
                </div>
                <div class="head-text">Consejo NL</div>
                <div class="desc">
                    Comisión de Sustentabilidad
                </div>
            </div>
        </div>
    </div>

    <div class="text-img">
        <div class="cont-img">
            <img src="<?php echo get_template_directory_uri(  ).'/img/stock-photo-inspector-engineer-woman-holding-digital-tablet-working-in-solar-panels-power-farm-photovoltaic-19080799241.png'?>" alt="">
        </div>
        <div class="text bg-blue">
            Consejo Nacional de la Agenda<br>2030 para el Desarrollo Sostenible
        </div>
    </div>
    <div class="text-img ltr">
        <div class="cont-img">
            <img src="<?php echo get_template_directory_uri(  ).'/img/stock-photo-inspector-engineer-woman-holding-digital-tablet-working-in-solar-panels-power-farm-photovoltaic-19080799241.png'?>" alt="">
        </div>
        <div class="text">
            Consejo Nacional de la Agenda<br>2030 para el Desarrollo Sostenible
        </div>
    </div>
    <div class="text-img">
        <div class="cont-img">
            <img src="<?php echo get_template_directory_uri(  ).'/img/stock-photo-inspector-engineer-woman-holding-digital-tablet-working-in-solar-panels-power-farm-photovoltaic-19080799241.png'?>" alt="">
        </div>
        <div class="text bg-green">
            Consejo Nacional de la Agenda<br>2030 para el Desarrollo Sostenible
        </div>
    </div>
    <div class="text-img ltr">
        <div class="cont-img">
            <img src="<?php echo get_template_directory_uri(  ).'/img/stock-photo-inspector-engineer-woman-holding-digital-tablet-working-in-solar-panels-power-farm-photovoltaic-19080799241.png'?>" alt="">
        </div>
        <div class="text">
            Consejo Nacional de la Agenda<br>2030 para el Desarrollo Sostenible
        </div>
    </div>
    <div class="text-img">
        <div class="cont-img">
            <img src="<?php echo get_template_directory_uri(  ).'/img/stock-photo-inspector-engineer-woman-holding-digital-tablet-working-in-solar-panels-power-farm-photovoltaic-19080799241.png'?>" alt="">
        </div>
        <div class="text bg-blue">
            Consejo Nacional de la Agenda<br>2030 para el Desarrollo Sostenible
        </div>
    </div>
    <div class="text-img ltr">
        <div class="cont-img">
            <img src="<?php echo get_template_directory_uri(  ).'/img/stock-photo-inspector-engineer-woman-holding-digital-tablet-working-in-solar-panels-power-farm-photovoltaic-19080799241.png'?>" alt="">
        </div>
        <div class="text">
            Consejo Nacional de la Agenda<br>2030 para el Desarrollo Sostenible
        </div>
    </div>
    <div class="text-img">
        <div class="cont-img">
            <img src="<?php echo get_template_directory_uri(  ).'/img/stock-photo-inspector-engineer-woman-holding-digital-tablet-working-in-solar-panels-power-farm-photovoltaic-19080799241.png'?>" alt="">
        </div>
        <div class="text bg-green">
            Consejo Nacional de la Agenda<br>2030 para el Desarrollo Sostenible
        </div>
    </div>
</div>
<?php
get_footer();
?>
