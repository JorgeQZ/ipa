<?php
/**
 * Template Name: Servicios
 */

get_header(); ?>
<div class="banner-cont" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID))?>);">
    <div class="title-banner">
        <?php the_title(); ?>
    </div>
</div>

<div class="main-content">
    <div class="container">
        <?php
        $terms = get_terms( array(
            'taxonomy' => 'servicio_categorias',
            'hide_empty' => true,
            'orderby' => 'date',
            'order' => 'ASC'
        ) );


        foreach($terms as $term): ?>
            <div class="category-list">
            <p class="category-desc"><?php echo $term->name ?></p>
            <div class="grid">
                <?php
                $args = array(
                    'post_type' => 'servicio',
                    'post_status' 		=> 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'publish_date',
                    'order' => 'DESC',
                    'tax_query'			=> array(
                        array(
                            'taxonomy' => 'servicio_categorias',
                            'field' => 'slug',
                            'terms' =>  $term->slug
                        )
                    )
                );

                $the_query = new WP_QUERY ( $args );
                if($the_query->have_posts()):
                    while ( $the_query->have_posts() ) :
                        $the_query->the_post();
                        ?>
                        <div class="item">
                            <?php if(get_field('icono')): ?>
                            <div class="icon">
                                <?php echo file_get_contents(get_field('icono')); ?>
                            </div>
                            <?php endif; ?>
                            <div class="title"><?php the_title(); ?></div>
                            <div class="desc">
                               <?php the_content(); ?>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query(  );
                endif;
                ?>

            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
get_footer();
?>
