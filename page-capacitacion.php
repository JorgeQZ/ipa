<?php
/**
 * Template Name: Capacitacion
 */

get_header();
?>


<div class="banner-cont" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>);">
    <div class="title-banner">
        <?php the_title(); ?>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <br>
        <br>
        <br>
        <p style="color: #243063; font-weight: bolder; font-size: 30px; text-align: center;">¡Conoce todos nuestros cursos!</p>

        <br>
        <br>

        <div class="tabs-container">
            <div class="tabs-mobile">
                <div class="active-tab">Categoría activa</div>
                <div class="burguer-tabs">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="tabs">
                <div class="tab-item">lorem</div>
                <div class="tab-item">lorem</div>
                <div class="tab-item">lorem</div>
                <div class="tab-item">lorem</div>
                <div class="tab-item">lorem</div>
            </div>
            <div class="tabs-content">
                <div class="tab-content active">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quibusdam beatae eum non enim in, mollitia ipsa, temporibus amet aliquid aperiam ea harum nulla! Officia, architecto! Sed ad eius molestiae.</div>
                <div class="tab-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quibusdam beatae eum non enim in, mollitia ipsa, temporibus amet aliquid aperiam ea harum nulla! Officia, architecto! Sed ad eius molestiae.</div>
                <div class="tab-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quibusdam beatae eum non enim in, mollitia ipsa, temporibus amet aliquid aperiam ea harum nulla! Officia, architecto! Sed ad eius molestiae.</div>
                <div class="tab-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quibusdam beatae eum non enim in, mollitia ipsa, temporibus amet aliquid aperiam ea harum nulla! Officia, architecto! Sed ad eius molestiae.</div>
                <div class="tab-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quibusdam beatae eum non enim in, mollitia ipsa, temporibus amet aliquid aperiam ea harum nulla! Officia, architecto! Sed ad eius molestiae.</div>
            </div>
        </div>

        <div class="tab-calendar-container">
            <div class="tab-calendar-dropdown">
                <div class="calendar-option-selected">Junio 2022</div>
                <ul class="calendar-menu">
                    <li class="calendar-option">Junio 2022</li>
                    <li class="calendar-option">Julio 2022</li>
                    <li class="calendar-option">Agosto 2022</li>
                    <li class="calendar-option">Septiembre 2022</li>
                </ul>
            </div>
            <div class="tab-calendar">
                <table class="calendar" cellspacing="0" cellpadding="0">
                    <thead>
                        <th>fechas</th>
                        <th>curso</th>
                        <th>socio caintra</th>
                        <th>no socio</th>
                        <th>duración</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12 y 13</td>
                            <td>induccion</td>
                            <td>$3000</td>
                            <td>$5200</td>
                            <td>16 horas</td>
                        </tr>
                        <tr>
                            <td>12 y 13</td>
                            <td>induccion</td>
                            <td>$3000</td>
                            <td>$5200</td>
                            <td>16 horas</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="form-container">

        <p class="head-form">¡Conoce todos nuestros cursos!</p>
        <?php echo do_shortcode( '[contact-form-7 id="129" title="Capacitacion"]')?>
    </div>
</div>
<?php
get_footer();
?>
