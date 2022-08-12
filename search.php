<?php get_header(); ?>

<div class="main-container" style="padding: 90px">
<?php
$s=get_search_query();
$args = array('s' =>$s);
// The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Resultados de: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Sin Resultados</h2>
        <div class="alert alert-info">
          <p>Parece que no hay resultados de la busqueda que hiciste. Intenta con otra palabra.</p>
        </div>
<?php } ?>
<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>