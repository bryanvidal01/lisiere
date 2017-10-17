<?php


function bbx_theme_setup() {
	if ( ! isset( $content_width ) ) $content_width = 1200;
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_filter( 'show_admin_bar', '__return_false' );
}
add_action( 'after_setup_theme', 'bbx_theme_setup' );


function bbx_enqueue_scripts() {
	$js_directory = get_template_directory_uri() . '/javascript/';
	wp_register_script( 'global', $js_directory . 'global.js', 'jquery', '1.0' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'global' );
}
add_action( 'wp_enqueue_scripts', 'bbx_enqueue_scripts' );



// Size
add_image_size( '800x800', 800, 800, true );
add_image_size( '1800x800', 1800, 800, true );
add_image_size( '800x600', 800, 600, true );

// Post type
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'service',
    array(
      'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'Service' )
      ),
      'public' => true,
	  'menu_icon' => 'dashicons-format-status',
    )
  );
  register_post_type( 'devis',
    array(
      'labels' => array(
        'name' => __( 'Devis' ),
		'singular_name' => __( 'Devis' ),
		'has_archive' => true,
      ),
      'public' => true,
	  'supports' => array('title'),
	  'menu_icon' => 'dashicons-media-default',
    )
  );
}

// Autorisations
$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );

// Page option

if( function_exists('acf_add_options_page') ) {
	// Page principale
	acf_add_options_page(array(
		'page_title'    => 'Options',
		'menu_title'    => 'Options',
		'menu_slug'     => 'options-generales',
		'capability'    => 'edit_posts',
		'redirect'      => true
	));

}

// Correspondance des pages

function get_contact_page(){
	$urlPage = get_field('contact_page', 'option');
	return $urlPage;
}

function get_reservation_page(){
	$urlPage = get_field('reservation_page', 'option');
	return $urlPage;
}


// Demande de Devis
function send_mail(){
	if(
		(!empty($_POST['genre']))
		&& (!empty($_POST['civility']))
		&& (!empty($_POST['prenom']))
		&& (!empty($_POST['nom']))
		&& (!empty($_POST['phone']))
		&& (!empty($_POST['email']))
		&& (!empty($_POST['adresse']))
		&& (!empty($_POST['ville']))
		&& (!empty($_POST['pays']))
		&& (!empty($_POST['date']))
		&& (!empty($_POST['flexibility']))
		&& (!empty($_POST['budget']))
		&& (!empty($_POST['invites']))
		&& (!empty($_POST['event']))
		&& (!empty($_POST['code_postal'])) ) {

		$genre = $_POST['genre'];
		$civility = $_POST['civility'];
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$societe = $_POST['societe'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$adresse = $_POST['adresse'];
		$ville = $_POST['ville'];
		$pays = $_POST['pays'];
		$date = $_POST['date'];
		$flexibility = $_POST['flexibility'];
		$budget = $_POST['budget'];
		$invites = $_POST['invites'];
		$event = $_POST['event'];
		$code_postal = $_POST['code_postal'];
		$message = $_POST['message'];


		$postInsert = array(
			'post_title' => $prenom . ' ' . $nom,
	        'post_status' => 'draft',
	        'post_type' => 'devis'
	    );

		$postID = wp_insert_post( $postInsert );

        update_field('field_59e5169fc73ee', $genre, $postID);
        update_field('field_59e516aec73ef', $civility, $postID);
        update_field('field_59e516bdc73f0', $prenom, $postID);
        update_field('field_59e516cac73f1', $nom, $postID);
        update_field('field_59e516e6c73f3', $phone, $postID);
        update_field('field_59e516efc73f4', $email, $postID);
        update_field('field_59e516fcc73f5', $adresse, $postID);
        update_field('field_59e51706c73f6', $ville, $postID);
        update_field('field_59e51710c73f7', $pays, $postID);
        update_field('field_59e51718c73f8', $date, $postID);
        update_field('field_59e51725c73f9', $flexibility, $postID);
        update_field('field_59e51731c73fa', $budget, $postID);
        update_field('field_59e51739c73fb', $invites, $postID);
        update_field('field_59e51743c73fc', $event, $postID);
        update_field('field_59e5174cc73fd', $code_postal, $postID);

		if(($societe != '') && (isset($societe))):
			update_field('field_59e516d7c73f2', $societe, $postID);
		endif;

		if(($message != '') && (isset($message))):
			update_field('field_59e51755c73fe', $message, $postID);
		endif;


        $success = 1;

        // $adminEmail = get_field('email_adress', 'option');
        // $siteName = get_bloginfo('name');
		//
        // $bodyMail = '<p>Name : ' . $name . '</p><p>Email : ' . $email . '</p><p>Message : ' . $message . '</p>';
        // $headers = array('Content-Type: text/html; charset=UTF-8');
		//
        // wp_mail($adminEmail, $siteName .' | '. $name . '', $bodyMail, $headers);

        return $success;

	}else{
        $success = 0;
        return $success;
    }
}

function addCustomImportButton()
{
    global $current_screen;

    // Not our post type, exit earlier
    // You can remove this if condition if you don't have any specific post type to restrict to.
    if ('devis' != $current_screen->post_type) {
        return;
    }

    ?>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery('.subsubsub').append('<li><a href="?post_type=devis&export=1">Exporter les demandes de devis</a></li>');
            })
        </script>
    <?php
}

add_action('admin_head-edit.php','addCustomImportButton');


function submitExport(){
    if(isset($_GET['post_type']) && (isset($_GET['export']))){

        $posttype = $_GET['post_type'];

        $args = array(
        	'post_type' => $posttype,
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {


            $dataExport = array();

            while ( $query->have_posts() ) {
                $query->the_post();

                $dataItem = array(
					get_field('gender'),
					get_field('civility'),
					get_field('prenom'),
					get_field('nom'),
					get_field('societe'),
					get_field('phone'),
					get_field('email'),
					get_field('adresse'),
					get_field('ville'),
					get_field('pays'),
					get_field('date'),
					get_field('flexibility'),
					get_field('budget'),
					get_field('invites'),
					get_field('event'),
					get_field('message')
				);
                array_push($dataExport, $dataItem);
             }


            $out = fopen('php://output', 'w');

            foreach ($dataExport as $data) {
                fputcsv($out, $data);
            }

            fclose($out);
        }

        header("Content-Disposition: attachment; filename=\"devis.csv\"");
        header("Content-Type: application/force-download");
        header("Connection: close");
        die;

    }
}

add_action('admin_init', 'submitExport');
