<?php get_header(); ?>

<div class="main-container">
    <div class="container">
        <?php
        $s=get_search_query();
        $args = array('s' =>$s);
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ): 
          echo "<div class='title'>Resultados de: ".get_query_var('s')."</div>";
          echo '<ul class="results">';
          while ( $the_query->have_posts() ): 
            $the_query->the_post();
            $obj = get_post_type_object(get_post_type(get_the_ID())) ;
            ?>
            <li>
              (<strong><?php echo $obj->labels->singular_name ;?>)</strong>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php
          endwhile;
          echo '</ul>';
        else: 
        ?>
        <div class="title">Sin Resultados</div>
        <div class="alert alert-info">
            <p>Parece que no hay resultados de la busqueda que hiciste. Intenta con otra palabra.</p>
        </div>
        <?php endif; ?>

        <br>
        <hr>
        <div class="container-sidebar">
          <div class="title">¿Nueva búsqueda?</div>
          <br>
          <?php get_search_form(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>