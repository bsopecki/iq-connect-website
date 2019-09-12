<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);


/**
 * ADD ACF OPTION PAGE
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Ustawienia Strony');

}

/*=============================================
=            BREADCRUMBS			            =
=============================================*/
//  to include in functions.php
function the_breadcrumb() {
    $sep = '';
    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<ul class="breadcramps">';
        echo '<li class="breadcramps__item body">';
        echo '<a href="';
        echo get_option('home');
        echo '" class="breadcramps__elem body link">';
        echo 'Strona główna';
        echo '</a>';
        echo '</li>';
        
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() ){
           
            $cat = get_queried_object();

            if($cat -> category_parent == '0') {
                echo '<li class="breadcramps__item body">';
                echo $cat -> name;
                echo '</li>';
            }

            else {
                $parent = get_category($cat -> category_parent);
                echo '<li class="breadcramps__item body">';
                echo '<a href="';
                echo get_category_link($parent -> term_id);
                echo '" class="breadcramps__elem body link">';
                echo $parent -> name;
                echo '</a>';
                echo '</li>';
                echo '<li class="breadcramps__item body">';
                echo $cat -> name;
                echo '</li>';
            }
            //print_r( get_queried_object());
           
        } elseif (is_archive() || is_single()){
            if(is_single()) {
                if(get_post_type() == 'partnerzy'):
                    echo '<li class="breadcramps__item body">';
                    echo '<a href="';
                    echo get_permalink(277);
                    echo '" class="breadcramps__elem body link">';
                    echo get_post_type_object(get_post_type())->label;
                    echo '</a>';
                    echo '</li>';
                else:
                    echo '<li class="breadcramps__item body">';
                    echo '<a href="';
                    echo get_post_type_archive_link(get_post_type());
                    echo '" class="breadcramps__elem body link">';
                    echo get_post_type_object(get_post_type())->label;
                    echo '</a>';
                    echo '</li>';
                endif;
            }

            else {
                echo '<li class="breadcramps__item body">';        
                echo get_post_type_object(get_post_type())->label;
                echo '</li>';
            }
            
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo '<li class="breadcramps__item body">';
            the_title();
            echo '</li>';

            //print_r(get_post_type_object(get_post_type())->label);
           
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            $parent_id = get_page(get_the_ID())->post_parent;
            $parent = get_page($parent_id);

            if($parent_id != 0) {
                echo '<li class="breadcramps__item body">';
                echo '<a href="';
                echo get_permalink($parent_id);
                echo '" class="breadcramps__elem body link">';
                echo $parent->post_title;
                echo '</a>';
                echo '</li>';
            }
            echo '<li class="breadcramps__item body">';
            echo the_title();
            echo '</li>';
            //print_r($parent);
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                echo '<li class="breadcramps__item body">';
                the_title();
                echo '</li>';
                rewind_posts();
            }
        }

        if(is_tag()) {
            echo '<li class="breadcramps__item body">';
            echo single_tag_title();
            echo '</li>';
        }
        echo '</ul>';

        if( is_post_type_archive('oferty') )
        {
            echo 'halo';
        }
    }
}
/*
* Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/
*/


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

class Placeholder {
    function image() {
        return "images/bg-juno.jpg"; 
    }

    function title() {
        return 'Twoja bezpieczna przystań'; 
    }
} 

function image($id, $size, $class) {
    return wp_get_attachment_image($id, $size, false, ['class'=>$class]);
}

/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Projects', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'Projects', 'twentythirteen' ),
            'parent_item_colon'   => __( 'Parent Project', 'twentythirteen' ),
            'all_items'           => __( 'All Projects', 'twentythirteen' ),
            'view_item'           => __( 'View Project', 'twentythirteen' ),
            'add_new_item'        => __( 'Add New Project', 'twentythirteen' ),
            'add_new'             => __( 'Add New', 'twentythirteen' ),
            'edit_item'           => __( 'Edit Project', 'twentythirteen' ),
            'update_item'         => __( 'Update Project', 'twentythirteen' ),
            'search_items'        => __( 'Search Project', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'projects', 'twentythirteen' ),
            'description'         => __( 'Project news and reviews', 'twentythirteen' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'category' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
         
        // Registering your Custom Post Type
        register_post_type( 'projects', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
    add_action( 'init', 'custom_post_type', 0 );

    add_filter('pre_get_posts', 'query_post_type');
    function query_post_type($query) {
        if( is_category() ) {
            $post_type = get_query_var('post_type');
            if($post_type)
                $post_type = $post_type;
            else
                $post_type = array('nav_menu_item', 'post', 'projects'); // don't forget nav_menu_item to allow menus to work!
            $query->set('post_type',$post_type);
            return $query;
            }
    }