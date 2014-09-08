<?php
/*
** Includes files
*/
require_once ( 'includes/custom-functions.php' );
require_once ( 'includes/custom-widgets.php' );
require_once ( 'includes/metaboxes/example-functions.php' );
require_once ( 'includes/shortcodes.php' );
require_once ( 'includes/customizer.php' );

if ( ! isset( $content_width ) ) $content_width = 634;

add_theme_support( 'automatic-feed-links' );

/*
** WP Enqueue Style
*/
function wp_enqueue_style_movatique() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '1.0' );
}

add_action( 'wp_enqueue_scripts', 'wp_enqueue_style_movatique' );

/*
** WP Enqueue Script Movatique
*/
function wp_enqueue_script_movatique() {
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), '6.2.1', true );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/jquery.masonry.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'wp_enqueue_script_movatique' );

/*
** Navigation Menu
*/
function navigation_menu() {

	$locations = array(
		'top-menu' => __( 'This menu will appear in header.', 'ti' ),
	);
	register_nav_menus( $locations );

}

add_action( 'init', 'navigation_menu' );

/*
** Theme Support
*/
add_theme_support( 'post-thumbnails' ); /* Post Thumbnails */

/*
** General Sidebar
*/
function general_sidebar() {

	$args = array(
		'id'            => 'general_sidebar',
		'name'          => __( 'General Sidebar', 'ti' ),
		'description'   => __( 'This sidebar will appear in blog page.', 'ti' ),
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}

add_action( 'widgets_init', 'general_sidebar' );

/*
** Footer Sidebar
*/
function footer_sidebar() {

    $args = array(
        'id'            => 'footer_sidebar',
        'name'          => __( 'Footer Sidebar', 'ti' ),
        'description'   => __( 'This sidebar will appear in footer.', 'ti' ),
        'before_title'  => '<div class="widget-title">',
        'after_title'   => '</div>',
        'before_widget' => '<div id="%1$s" class="footer-one-widget %2$s">',
        'after_widget'  => '</div>',
    );
    register_sidebar( $args );

}

add_action( 'widgets_init', 'footer_sidebar' );

/*
** Footer Sidebar
*/
function subheader_sidebar() {

    $args = array(
        'id'            => 'subheader_sidebar',
        'name'          => __( 'Subheader Sidebar', 'ti' ),
        'description'   => __( 'This sidebar will appear in subheader.', 'ti' ),
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
        'before_widget' => '<div id="%1$s" class="subheader-widget %2$s">',
        'after_widget'  => '</div>',
    );
    register_sidebar( $args );

}

add_action( 'widgets_init', 'subheader_sidebar' );

/*
** Custom Post Type: Testimonials
*/
function testimonials() {

    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'ti' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'ti' ),
        'menu_name'           => __( 'Testimonials', 'ti' ),
        'parent_item_colon'   => __( 'Parent Testimonial:', 'ti' ),
        'all_items'           => __( 'All Testimonials', 'ti' ),
        'view_item'           => __( 'View Testimonial', 'ti' ),
        'add_new_item'        => __( 'Add New Testimonial', 'ti' ),
        'add_new'             => __( 'Add New Testimonial', 'ti' ),
        'edit_item'           => __( 'Edit Testimonial', 'ti' ),
        'update_item'         => __( 'Update Testimonial', 'ti' ),
        'search_items'        => __( 'Search Testimonial', 'ti' ),
        'not_found'           => __( 'Not found Testimonial', 'ti' ),
        'not_found_in_trash'  => __( 'Not found Testimonial in Trash', 'ti' ),
    );
    $args = array(
        'label'               => __( 'testimonials', 'ti' ),
        'description'         => __( 'Description for testimonials.', 'ti' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-comments',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'testimonials', $args );

}

add_action( 'init', 'testimonials', 0 );

/*
** Post Gallery
*/
add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';
    // Here's your actual output, you may customize it to your need
    $output = "<div id='custom-gallery gallery-". $post->ID ."' class='gallery galleryid-". $post->ID ." gallery-columns-". $columns ."'>\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');

        $output .= "<dl class='gallery-item gallery-columns-". $columns ."'>";
        $output .= "<a href=\"{$img[0]}\" rel='post-". $post->ID ."' class=\"fancybox\" title='". $attachment->post_excerpt ."'>\n";
        $output .= "<div class='gallery-item-thumb'><img src=\"{$img[0]}\" alt='". $attachment->post_excerpt ."' /></div>\n";
        $output .= "<div class='wp-caption-text'>";
        $output .= $attachment->post_excerpt;
        $output .= "</div>";
        $output .= "</a>\n";
        $output .= "</dl>";
    }

    $output .= "</div>\n";

    return $output;
}

