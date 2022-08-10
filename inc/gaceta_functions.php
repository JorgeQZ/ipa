<?php

// Enqueue Script
add_action( 'wp_enqueue_scripts', 'load_Content_scripts' );
function load_Content_scripts() {
	wp_enqueue_script('load_content', get_template_directory_uri().'/js/load_content.js', '1.0', false );
	wp_localize_script('load_content', 'ajax_var', array(
		'url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('ajaxnonce')
	));
}


// Change cat
add_action( 'wp_ajax_nopriv_change_category', 'change_category');
add_action( 'wp_ajax_change_category', 'change_category' );
function change_category() {

	$args = array(
		'post_type' => 'gaceta',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'orderby' => 'DATE',
		'order' => 'DESC',
		'tax_query'			=> array(
			array(
				'taxonomy' => 'gaceta_categorias',
				'field' => 'slug',
				'terms' => $_POST['categoria']
			)
		)
	);


	$posts = array();
	$the_query = new WP_QUERY ( $args );

	while ( $the_query->have_posts() ) :
		$the_query->the_post();

		$post_link = get_field('url_de_interes',  $post->ID  );
		$post_descripcion = get_field('descripcion',  $post->ID  );

		$post_image =  wp_get_attachment_image_src( get_post_thumbnail_id(  $post->ID ), 'single-post-thumbnail' );

		if(!$post_descripcion || $post_descripcion == null){
			$post_descripcion = '';
		}

		$data_post = array(
			'post_title' => get_the_title( $post->ID ),
			'post_date' => get_the_date( $post->ID),
			'post_image' => $post_image[0],
			'post_link' => $post_link,
			'post_description' => $post_descripcion
		);

		array_push($posts, $data_post);

	endwhile;

	header( "Content-Type: application/json" );
	echo json_encode($posts);
	exit;
}

// Get años
add_action( 'wp_ajax_nopriv_Load_Content_Anios', 'Load_Content_Anios');
add_action( 'wp_ajax_Load_Content_Anios', 'Load_Content_Anios' );

function Load_Content_Anios() {
	$args = array(
		'post_type' 		=> 'acervo-digital',
		'post_status' 		=> 'publish',
		'posts_per_page' => -1,
		'orderby' => 'publish_date',
		'order' => 'DESC',
		'tax_query'			=> array(
			array(
				'taxonomy' => 'acervo_categorias',
				'field' => 'slug',
				'terms' => $categoria
			)
		)
	);


	$post_content = array();
	$the_query = new WP_QUERY ( $args );

	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		$current_id = $post->ID;

		$content_t = get_the_content($current_id);
		$text = wp_trim_words($content_t, '35');
		$item = "
            <option value='".get_the_date( 'Y' )."'>
            ".get_the_date( 'Y' )."
        </option>
		";
		array_push($post_content, $item);
	endwhile;

	if($post_content == '' || $post_content == null){
			$item = "<option>Sin resultados de busqueda</option>";

			array_push($post_content, $item);
	}

	array_unshift($post_content,"<option>Selecciona el año de interes</option>");

	$post_content = array_unique($post_content);
	$post_content= array_values($post_content);


	header( "Content-Type: application/json" );
	echo json_encode($post_content);

	exit;
}



// //Get Meses
// add_action( 'wp_ajax_nopriv_Load_Content_Meses', 'Load_Content_Meses');
// add_action( 'wp_ajax_Load_Content_Meses', 'Load_Content_Meses' );

// function Load_Content_Meses() {
// 	$categoria = $_REQUEST['categoria'];
// 	$fecha = $_REQUEST['fecha'];

// 		$args = array(
// 			'post_type' 		=> 'acervo-digital',
// 			'post_status' 		=> 'publish',
//       'posts_per_page' => -1,
// 			'orderby' => 'publish_date',
//       'order' => 'DESC',
//       'ignore_sticky_posts' => 1,
//       'year'  => $fecha,
// 			'tax_query'			=> array(
// 			// 'relation' 		=> 'AND',
// 				array(
// 					'taxonomy' => 'acervo_categorias',
// 					'field' => 'slug',
// 					'terms' => $categoria
// 				)
// 			)
// 		);


// 	$post_content = array();
// 	$the_query = new WP_QUERY ( $args );

// 	while ( $the_query->have_posts() ) :
// 		$the_query->the_post();
// 		$current_id = $post->ID;

// 		$content_t = get_the_content($current_id);
//     $text = wp_trim_words($content_t, '35');
//     //20200230
//     $item = "
//             <option value='".get_the_date( 'm' )."'>
//             ".get_the_date( 'F' )."
//         </option>
//     ";
// 		array_push($post_content, $item);
// 	endwhile;

// 	if($post_content == '' || $post_content == null){
// 		$item = "<option>Sin resultados de busqueda</option>";

// 		array_push($post_content, $item);
//   }

//   //array_unshift($post_content,"<option>Selecciona el mes de interes</option>");

//   $post_content = array_unique($post_content);
//   $post_content= array_values($post_content);


// 	header( "Content-Type: application/json" );
// 	echo json_encode($post_content);

// 	exit;
// }


//Get Contenido
// add_action( 'wp_ajax_nopriv_Load_Content', 'Load_Content' );
// add_action( 'wp_ajax_Load_Content', 'Load_Content' );

// function Load_Content() {
// 	$categoria = $_REQUEST['categoria'];
// 	$anio = $_REQUEST['anio'];
//   $mes = $_REQUEST['mes'];

//   if($mes)
//   {
//       $args = array(
//         'post_type' 		=> 'acervo-digital',
//         'post_status' 		=> 'publish',
//         'posts_per_page' => -1,
//         'orderby' => 'publish_date',
//         'order' => 'DESC',
//         'tax_query'			=> array(
//         // 'relation' 		=> 'AND',
//           array(
//             'taxonomy' => 'acervo_categorias',
//             'field' => 'slug',
//             'terms' => $categoria
//           )
//         ),
//         'date_query' => array(
//           array(
//               'after'     => array(
//                 'year'  => $anio,
//                 'month' => $mes,
//                 'day'   => 01,
//             ),
//               'before'    => array(
//                 'year'  => $anio,
//                 'month' => $mes,
//                 'day'   => 31,
//             ),
//               'inclusive' => true,
//           ),
//         )
//       );
//   }


//   else{

//     if($anio){
//       $args = array(
//         'post_type' 		=> 'acervo-digital',
//         'post_status' 		=> 'publish',
//         'posts_per_page' => -1,
//         'orderby' => 'publish_date',
//         'order' => 'DESC',
//         'ignore_sticky_posts' => 1,
//         'year'  => $anio,
//         'tax_query'			=> array(
//         // 'relation' 		=> 'AND',
//           array(
//             'taxonomy' => 'acervo_categorias',
//             'field' => 'slug',
//             'terms' => $categoria
//           )
//         )
//       );
//     }
//     else{
//       $args = array(
//         'post_type' 		=> 'acervo-digital',
//         'post_status' 		=> 'publish',
//         'posts_per_page' => -1,
//         'orderby' => 'publish_date',
//         'order' => 'DESC',
//         'tax_query'			=> array(
//         // 'relation' 		=> 'AND',
//           array(
//             'taxonomy' => 'acervo_categorias',
//             'field' => 'slug',
//             'terms' => $categoria
//           )
//         )
//       );
//     }

//   }


// 	$post_content = array();
// 	$the_query = new WP_QUERY ( $args );

//   $aux = 0;
// 	while ( $the_query->have_posts() ) :
// 		$the_query->the_post();
//     $current_id = $post->ID;
//     /*
// 		$img = get_the_post_thumbnail_url($current_id);
// 		if(!$img){
// 			$img = get_template_directory_uri().'/img/proyecto1.jpg';
//     }
//     */
//     $titulo = get_field("titulo");
// 		$content_t = get_the_content($current_id);
// 		$text = wp_trim_words($content_t, '35');
// 		$item = "
//                 <p class='subcategory'>
//                     ".get_the_title($current_id)."
//                 </p>
//     ";

//     //Cantidad de elementos
//     $ItemXDiv = 10;

//     $ItemXDiv =  ($ItemXDiv-1);

//     if(($aux/$ItemXDiv) == 0){
//       echo ("<div class='cadaOnce'>");
//     }

//     if($titulo){
//       echo "
//       <p class='subcategory' data-id='".get_the_ID()."'>
//           ".$titulo."
//       </p>
//       ";
//     }
//     else{
//       echo "
//       <p class='subcategory' data-id='".get_the_ID()."'>
//           ".get_the_date( 'F j, Y' )."
//       </p>
//       ";
//     }

//     if(($aux/$ItemXDiv) == 1){
//       echo ("</div>");
//       $aux = 0;
//     }
//     else{
//       $aux++;
//     }


//     array_push($post_content, $item);
//   endwhile;

//   if(($aux/$ItemXDiv) != 1){
//     echo ("</div>");
//   }


// 	if($post_content == '' || $post_content == null){
// 		$item = "<div class='contenedor-proyectos '><p class='sin_resultado'>Sin resultados de busqueda</p></div>";
//     echo "<p class='fecha'>Sin resultados de busqueda</p>";
// 		array_push($post_content, $item);
// 	}

// 	//header( "Content-Type: application/json" );
//   //echo json_encode($post_content);


// 	exit;
// }

?>