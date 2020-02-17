<?php 
require_once('wp-bootstrap-navwalker.php');
function blog_theme_setup(){
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    
    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'blog' ),
		'social'  => __( 'Social Links Menu', 'blog' ),
    ) );
    
    /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
    
    /*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
    ) );
    
}

add_action( 'after_setup_theme', 'blog_theme_setup');


//configure the excerpt size
function blog_excerpt_length(){
	return 60;
}

add_filter( 'excerpt_length', 'blog_excerpt_length');

// Widget Locations
function blog_init_widgets($id){
	register_sidebar(array(
		'name'  => 'Sidebar',
		'id'    => 'sidebar',
		'before_widget' => '<div class="card my-4">
								<h5 class="card-header">Shortcuts</h5>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-12">',
		'after_widget'  => '			</div>
									</div>
	  							</div>
							</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	  ));

	  register_sidebar(array(
		'name'  => 'Searchbar',
		'id'    => 'searchbar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	  ));
}


add_action('widgets_init', 'blog_init_widgets');

// function my_search_form( $form ) {
//     $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
//     <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
//     <input type="text" value="' . get_search_query() . '" name="s" id="s" />
//     <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
//     </div>
//     </form>';

//     return $form;
// }

// add_filter( 'get_search_form', 'my_search_form', 100 );
