<?php get_header();



//Current post
$post_id = $_REQUEST['postid'];

$post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
$post_link = get_field('url_de_interes',  $post_id );
$descripcion = get_field('descripcion',  $post_id );

$categories = wp_get_post_terms($post_id, 'gaceta_categorias',  array("fields" => "names"));



?>
<div class="main-content">
    <div class="container gaceta-cont">
        <div class="column cat-tabs">
            <ul class="menu-cat">

                <?php
                    // Categorías en lista
                    $terms = get_terms( array(
                        'taxonomy' => 'gaceta_categorias',
                        'hide_empty' => true,
                    ) );

                    foreach ( $terms as $term ) {
                        echo '<li class="cate-button" data-cat="'.$term->name.'">'.$term->name.'</li>';
                    }
                ?>
            </ul>

            <div class="menu-filter">
                <select class="year-button">
                    <option value="">Año</option>
                </select>
                <select class="month-button">
                    <option value="">Mes</option>

                </select>
            </div>
        </div>
        <div class="column grid-list">

            <?php
                $args = array(
                    'post_type' => 'gaceta',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'DATE',
                    'order' => 'DESC',

                );

                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                $loop_post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
                $loop_post_link = get_field('url_de_interes',  $post->ID );
                $loop_descripcion = get_field('descripcion',  $post->ID );
                ?>
                <div
                data-link="<?php echo $loop_post_link; ?>"
                data-image="<?php echo $loop_post_image; ?>"
                data-description="<?php echo $loop_descripcion; ?>"
                class="item single-gaceta-item"
                style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>)">
                    <div class="overlay"></div>
                    <div class="title"><?php the_title(); ?></div>
                    <div class="desc"><?php the_date(); ?></div>
                </div>
                <?php
                endwhile;

                wp_reset_postdata();
            ?>
        </div>
        <div class="column post-item">
            <div class="single-gaceta-main-img featured-img">
                <img src="<?php echo $post_image[0] ?>" alt="">
            </div>
            <div class="text single-gaceta-main-text">
              <?php echo $descripcion; ?>
            </div>
            <a target="_blank" class="button single-gaceta-main-button" href="<?php echo $post_link ?>">ver más</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
