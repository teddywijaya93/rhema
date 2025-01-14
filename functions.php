<?php
/*
Author: dhoembul
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once( 'library/bones.php' ); // if you remove this, bones will break
/*
2. library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
require_once( 'library/custom-post-type.php' ); // you can disable this if you like
/*
3. library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
// require_once( 'library/admin.php' ); // this comes turned off by default
/*
4. library/translation/translation.php
	- adding support for other languages
*/
// require_once( 'library/translation/translation.php' ); // this comes turned off by default

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'bones-thumb-600' => __('600px by 150px'),
        'bones-thumb-300' => __('300px by 100px'),
    ) );
}

/*
The function above adds the ability to use the dropdown menu to select 
the new images sizes you have just created from within the media manager 
when you add media to your content blocks. If you add more image sizes, 
duplicate one of the lines in the array and name it according to your 
new image size.
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'bonestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<?php // custom gravatar call ?>
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
				<?php // end custom gravatar call ?>
				<?php printf(__( '<cite class="fn">%s</cite>', 'bonestheme' ), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>
				<?php edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<label class="screen-reader-text" for="s">' . __( 'Search for:', 'bonestheme' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_attr__( 'Search the Site...', 'bonestheme' ) . '" />
	<input type="submit" id="searchsubmit" value="' . esc_attr__( 'Search' ) .'" />
	</form>';
	return $form;
} // don't remove this bracket!

// ================================start================================ //
function main_init_js(){
	if (!is_admin()){
		$url = 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'; // the URL to check against
		$test_url = @fopen($url,'r'); // test parameters
		if($test_url !== false){ // test if the URL exists
			wp_deregister_script('jquery'); // initiate the function  
			wp_register_script('jquery', $url, false, '1.10.2',true);
			wp_enqueue_script('jquery');
		}
	// don't remove this
	wp_enqueue_script('jquery', get_template_directory_uri().'/library/js/jquery-3.6.0.min.js', array('jquery'), '3',true);

	//add stylesheet below
	wp_enqueue_style('bootstrap-min-css', get_template_directory_uri().'/library/css/bootstrap.min.css', false, '3', 'all' );
	wp_enqueue_style('project-clean', get_template_directory_uri().'/library/css/Projects-Clean.css', false, '3', 'all' );
	wp_enqueue_style('footer-basic', get_template_directory_uri().'/library/css/Footer-Basic.css', false, '3', 'all' );

	//add javascript below
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/library/js/bootstrap.min.js', array('jquery'), '3',true);
	wp_enqueue_script('waypoint', get_template_directory_uri().'/library/js/jquery.waypoints.min.js', array('jquery'), '3',true);
	}
}
add_action('wp_enqueue_scripts', 'main_init_js');
// ================================end================================ //

// ================================custom================================ //
require_once('library/project_posttype.php');

// add_filter( 'show_admin_bar', '__return_false' );
function hide_abar() {
?>
	<style type="text/css">
		.show-admin-bar {
			display: none;
		}
	</style>
<?php
}

function hide_a_bar() {
    add_filter( 'show_admin_bar', '__return_false' );
    add_action( 'admin_print_scripts-profile.php', 
         'hide_abar' );
}
// add_action( 'init', 'hide_a_bar' , 9 );

add_action('init', 'script_js');
function script_js() {
	if (!is_admin()) {
		wp_enqueue_script('script_js', get_bloginfo('template_url') . '/library/js/myajax.js', array('jquery'), '1',true);
		$protocol = isset( $_SERVER["HTTPS"]) ? 'https://' : 'http://';
		$params = array(
		'ajaxurl'=>admin_url('admin-ajax.php', $protocol)
		);
		wp_localize_script('script_js', 'ajaxscript', $params);
	}
}
// ================================custom================================ //

// ================================paginaton================================ //
function custom_pagination_cat($numpages = '', $pagerange = '', $page='') {
	if (empty($pagerange)) {
		$pagerange = 2;
	}
	global $page;
	if (empty($page)) {
		$page = 1;
	}
	if ($numpages == '') {
		global $wp_query;
		$numpages = $wp_query->max_num_pages;
		if(!$numpages) {
			$numpages = 1;
		}
	}
	$pagination_args = array(
		'base'            	=> '?page=%#%',
		'format'          	=> '?page=%#%',
		'total'           	=> $numpages,
		'current'         	=> $page,
		'show_all'        	=> false,
		'end_size'        	=> 1,
		'mid_size'        	=> $pagerange,
		'prev_next'       	=> true,
		'type'            	=> 'plain',
		'add_args'        	=> true,
		'add_fragment'    	=> '',
	);

	$paginate_links = paginate_links($pagination_args);
	if ($paginate_links) {
		echo "<nav class='custom-pagination'>";
			echo $paginate_links;
		echo "</nav>";
	}
}

function custom_pagination($numpages = '', $pagerange = '', $paged='') {
	if (empty($pagerange)) {
		$pagerange = 2;
	}
	global $paged;
	if (empty($paged)) {
		$paged = 1;
	}
	if ($numpages == '') {
		global $wp_query;
		$numpages = $wp_query->max_num_pages;
		if(!$numpages) {
			$numpages = 1;
		}
	}
	$pagination_args = array(
		'base' 				=> '?paged=%#%',
		'format' 			=> '?paged=%#%',
		'total'         	=> $numpages,
		'current'         	=> $paged,
		'show_all'        	=> false,
		'end_size'        	=> 1,
		'mid_size'        	=> $pagerange,
		'prev_next'       	=> true,
		'type'            	=> 'plain',
		'add_args'        	=> true,
		'add_fragment'    	=> '',
	);

	$paginate_links = paginate_links($pagination_args);
	if ($paginate_links) {
		echo "<nav class='custom-pagination'>";
			echo $paginate_links;
		echo "</nav>";
	}
}
add_filter( 'get_pagenum_link', 'wpse_78546_pagenum_link' );
function wpse_78546_pagenum_link( $link ){
	return preg_replace( '~/(\d+)~', '', $link );
}
// ================================paginaton================================ //

function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads'); 

function extend_preview_link_expiration() {
	return 7 * DAY_IN_SECONDS; // Mengatur durasi menjadi 7 hari
}
add_filter('ppp_nonce_life', 'extend_preview_link_expiration');

?>