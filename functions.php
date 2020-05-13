<?php

// Check function exists.
if (function_exists('acf_add_options_page'))
{

    // Mahd. asetuksia (?)
    $parent = acf_add_options_page(array(
        'page_title' => __('Theme General Settings') ,
        'menu_title' => __('Theme Settings') ,
        'redirect' => false,
    ));
}

function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array() , false, 'all');
    wp_register_style('main', get_template_directory_uri() . '/assets/css/app.css', array() , false, 'all');
    wp_register_style('FA', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array() , false, 'all');

    wp_register_style('swiper', 'https://unpkg.com/swiper/css/swiper.css', '', 1, 'all');
    wp_register_style('swiper-min', 'https://unpkg.com/swiper/css/swiper-min.css', '', 1, 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('swiper');
    wp_enqueue_style('swiper-min');
    wp_enqueue_style('main');
    wp_enqueue_style('FA');

}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('swiper', 'https://unpkg.com/swiper/js/swiper.js', array() , false, true);
    wp_register_script('swiper-min', 'https://unpkg.com/swiper/js/swiper.min.js', array() , false, true);
    wp_enqueue_script('swiper');
    wp_enqueue_script('swiper-min');
}

add_action('wp_enqueue_scripts', 'load_js');

// Menu support
add_theme_support('menus');
// Register menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
);

// Thumbnail support
add_theme_support('post-thumbnails');

//#################################
// Custom post type -  Events  //
//#################################
function event_type()
{

    $args = array(
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Event',
        ) ,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'template'
        ) ,

    );

    register_post_type('Events', $args);
}

add_action('init', 'event_type');

// Jotta saadaan kuva kilpailuller
function insert_attachment($file_handler, $post_id, $setthumb = 'false')
{

    if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK)
    {
        return __return_false();
    }
    require_once (ABSPATH . "wp-admin" . '/includes/image.php');
    require_once (ABSPATH . "wp-admin" . '/includes/file.php');
    require_once (ABSPATH . "wp-admin" . '/includes/media.php');

    $attach_id = media_handle_upload($file_handler, $post_id);

    if ($setthumb == 1) update_post_meta($post_id, '_thumbnail_id', $attach_id);
    return $attach_id;

}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
    return 'class="styled-button"';
}

//############################################################//
//                           EVENTS                           //
//############################################################//
add_action('wp_ajax_myfilter', 'ajax_events_function');
add_action('wp_ajax_nopriv_myfilter', 'ajax_events_function');

function ajax_events_function()
{

    $args = array(
        'post_type' => 'events',
        'order' => $_POST['date'],
        'posts_per_page' => 16,
        'next_btn' => true
    );

    $query = new WP_Query($args);
    $iterator = 0;

    if ($query->have_posts())
    {
?>
<?php
        while ($query->have_posts()):
            $query->the_post();

            if ($iterator === 0 || $iterator === 8)
            {
                echo "<div class='swiper-slide'>";
            }
?>

<div class="contestant">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <div class="actions">
        <button class="vote">ÄÄNESTÄ<i class="fa fa-heart-o" aria-hidden="true"></i></button>
        <button class="share">JAA</button>
    </div>
    <h5 class="contestant__information-title"><?php the_title(); ?></h5>
    <p class="contestant__information-name"><?php echo get_the_content(); ?></p>
</div>

<?php
            if ($iterator === 7 || $iterator === 16)
            {
                echo "</div>";
            }
            $iterator++;
        endwhile;

?>
</div>
<?php
        wp_reset_postdata();
    }
    else
    {
        echo 'No results...';
    }

    wp_reset_query();

    die();
}

