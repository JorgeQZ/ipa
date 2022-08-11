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
                <?php 
                  $args = array(
                    'post_type' => 'capacitacion',
                    'post_status' => 'publish',
                    'posts_per_page' => 8,
                    'orderby' => 'DATE',
                    'order' => 'DESC',
                );
        
                $loop = new WP_Query( $args );
                $aux_tab = 0;

                while ( $loop->have_posts() ) : 
                    $aux_tab ++;
                    $loop->the_post();
                    ?>
                    <div class="tab-item <?php if($aux_tab == 1){echo 'active';}?>" id="<?php echo $post->ID;?>"><?php the_title(); ?></div>
                    <?php
                endwhile;
                ?>
             
            </div>
            <div class="tabs-content">
                <?php 
                $aux_content = 0;
                while ( $loop->have_posts() ) : 
                    $aux_content ++;
                    $loop->the_post();
                    ?>
                    <div class="tab-content <?php if($aux_content == 1){echo 'active';}?>" data-tab-content="<?php echo $post->ID.'-content'; ?>">
                        <?php the_content(); ?>
                    </div>
                    <?php 
                endwhile;
                ?>
            </div>
        </div>

        <?php 
        $aux_calendars = 0;
        $aux_calendar_container= 0;
        while ( $loop->have_posts() ) : 
            $aux_calendar_container ++;
            $loop->the_post();
            $calendario = get_field('calendario', $post->ID);
            ?>
            <div class="tab-calendar-container<?php if($aux_calendar_container == 1){echo ' active';}?>" data-calendar="<?php echo $post->ID.'-calendar'; ?>">
                <div class="tab-calendar-dropdown">
                    <div class="calendar-option-selected" >
                        <span data-selected-month="<?php echo $post->ID.'-selected'; ?>">
                            <?php 
                            if($calendario[0]['mes']){
                                echo $calendario[0]['mes'];
                            } else{
                                echo 'Sin calendario';
                            }
                            ?>
                        </span>
                        <div class="button-calendar-tab" data-button-burguer="<?php echo $post->ID.'-calendar'; ?>">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        </div>
                    <ul class="calendar-menu" data-menu-months="<?php echo $post->ID.'-calendar';?>">  
                    <?php 
                        foreach($calendario as $mes):
                            echo '<li class="calendar-option" data-menu-calendar="'.$post->ID.'-calendar" data-selected-month="'.$post->ID.'-selected" data-button="'.$post->ID.'-'.$mes['mes'].'">'.$mes['mes'].'</li>';
                        endforeach;
                    ?>
                    </ul>
                </div>
                <?php  
                foreach($calendario as $mes):
                    $aux_calendars ++;
                    
                ?>
                <div class="tab-calendar <?php if($aux_calendars == 1){echo 'active';}?>" data-calendar-content="<?php echo $post->ID.'-'.$mes['mes']; ?>">
                    <table class="calendar" cellspacing="0" cellpadding="0">
                        <thead>
                            <th>fechas</th>
                            <th>curso</th>
                            <th>socio caintra</th>
                            <th>no socio</th>
                            <th>duración</th>
                        </thead>
                        <tbody>
                        <?php
                            foreach($mes['cursos'] as $cursos):
                                echo '<tr>';
                                echo '<td>'.$cursos['fechas'].'</td>';
                                echo '<td>'.$cursos['curso'].'</td>';
                                echo '<td>'.$cursos['socio_caintra'].'</td>';
                                echo '<td>'.$cursos['no_socio'].'</td>';
                                echo '<td>'.$cursos['duracion'].'</td>';
                                echo '</tr>';
                            endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
                <?php  endforeach; ?>
            </div>
            <?php 
        endwhile;
        ?>
        <!-- <div class="tab-calendar-container">
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
        </div> -->
    </div>
    <div class="form-container">

        <p class="head-form">¡Conoce todos nuestros cursos!</p>
        <?php echo do_shortcode( '[contact-form-7 id="129" title="Capacitacion"]')?>
    </div>
</div>
<?php
get_footer();
?>
