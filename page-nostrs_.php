<?php
/**
 * Template Name: Nosotros
 */
get_header(); ?>


<div class="banner-cont" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>);">
    <div class="title-banner">
        <?php the_title(); ?>
    </div>
</div>

<div class="main-content">
    <div class="text-cont">
        <div class="container">
            <div class="column">
                <div class="title">
                    En el Instituto para
                    la Protección Ambiental
                    de Nuevo León, A.C.
                </div>
                <div class="desc">
                    Organismo filial de CAINTRA, tenemos el compromiso de apoyar a nuestros Socios y Clientes a mejorar su desempeño ambiental, debido a ello hemos diseñado Cursos, Talleres y Servicios de Aspecto Ambiental, Seguridad e Higiene que son impartidos por profesionales expertos en la materia, que le brindarán soluciones inmediatas y de manera eficaz.
                    <br>
                    <br>
                    Nuestro principal objetivo es brindar un firme apoyo al Sector Industrial de nuestro País ofreciendo un amplio catálogo de servicios de asesoría, consultoría y gestión tanto en materia ambiental como en seguridad e higiene, los cuales se llevan a cabo en estricto apego a la normatividad vigente y se realizan por personal técnico especializado.
                </div>
            </div>
            <div class="column" style="background-image: url(<?php echo get_template_directory_uri().'/img/op-stock-photo-technician-offshore-worker-during-work-in-oil-and-gas-rig-platform-1488494528.png'; ?>);">
            </div>
        </div>
    </div>
    <div class="container images-text">
        <div class="column img-left">
            <div class="img">
                <img src="<?php echo get_template_directory_uri(  ).'/img/square.jpg' ?>" alt="">
            </div>
        </div>
        <div class="column text-left">
            <div class="title">
                Lorem ipsum dolor sit amet
            </div>
            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quaerat vel alias, nihil fugit quod unde hic in voluptates incidunt error perferendis similique eos labore aliquid temporibus nobis excepturi repellat.
            </div>
        </div>
    </div>

    <div class="container images-text">
        <div class="column text-right">
            <div class="title">
                Lorem ipsum dolor sit amet
            </div>
            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quaerat vel alias, nihil fugit quod unde hic in voluptates incidunt error perferendis similique eos labore aliquid temporibus nobis excepturi repellat.
            </div>
        </div>
        <div class="column img-right">
            <div class="img">
                <img src="<?php echo get_template_directory_uri(  ).'/img/square.jpg' ?>" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <img src="<?php echo get_template_directory_uri(  ).'/img/Video.jpg' ?>" alt="">
    </div>
</div>
<?php get_footer(); ?>
