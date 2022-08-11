<?php get_header(); ?>


<div class="banner-cont" style="background-image: url(<?php echo get_template_directory_uri(  ).'/img/banner_capacitacion.png'; ?>)">
        <div class="title-banner">
            <?php the_title(); ?>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="container">

        <br>
        <br>

        <div class="tabs-container">


                <?php
                  $args = array(
                    'post_type' => 'capacitacion',
                    'post_status' => 'publish',
                    'posts_per_page' => 8,
                    'orderby' => 'DATE',
                    'order' => 'DESC',
                );

                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) :

                    $loop->the_post();

                endwhile;
                ?>


            <div class="tabs-content" style="width: 100%">
                <?php

               while ( have_posts() ) : the_post();

                    ?>
                    <div class="tab-content active" data-tab-content="<?php echo $post->ID.'-content'; ?>" style="width: 100%">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
        </div>

        <?php

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
                 $aux_calendars = 0;
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
        wp_reset_query();
        ?>
    </div>
</div>
<?php
get_footer();
?>
