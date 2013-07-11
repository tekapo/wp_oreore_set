<?php

/*
 * Adding menu.
 * 
 */
//register_nav_menus( array(
//	'footer_menu' => 'フッターメニュー',
//	'secondary_menu'	 => 'メニュー2'
//) );

/*
 * Out put copyright.
 * 
 */

function echo_copyright( $param ) {
	echo '<div id="footer-copy-right">Copyright &copy; '
	. date( 'Y' )
	. ' '
	. $param
	. ' All Rights Reserved.</div>';
}

/*
 * The page is a child of the specifid page or not. 
 * 
 */

function is_child_page_of( $page_id_or_slug ) {
	global $post;
	if ( !is_int( $page_id_or_slug ) ) {
		$page = get_page_by_path( $page_id_or_slug );
		if ( !is_null( $page ) ) {
			$page_id_or_slug = $page->ID;
		}
	}
	if ( is_page() && $post->post_parent == $page_id_or_slug ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Register widgetized area and update sidebar with default widgets
 */
//function s_base_widgets_init_2() {
//	register_sidebar( array(
//		'name'			 => '右サイドバー',
//		'id'			 => 'sidebar-2',
//		'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
//		'after_widget'	 => '</aside>',
//		'before_title'	 => '<h1 class="widget-title">',
//		'after_title'	 => '</h1>',
//	) );
//}
//
//add_action( 'widgets_init', 's_base_widgets_init_2' );

/**
 * When a page has children pages:
 * 1. Show the list of childer's pages
 * 2. When showing a child page, show the list of siblings' page.
 *
 */
function has_parent() {
	global $post;
	if ( $post->post_parent ) {
		return true;
	} else {
		return false;
	}
}

function has_children() {
	global $post;
	if ( get_children( $post->ID ) ) {
		return true;
	} else {
		return false;
	};
}

function echo_child_pages_titles() {
	global $post;

	$page_ID	 = $post->ID;
	$page_title	 = $post->post_title;
	$parent_ID	 = $post->post_parent;

	if ( has_children() ) {
		echo '<div class="has-child">';
		echo '<h2 class="has-child-title">' . $page_title . '</h2>';
		wp_list_pages( 'title_li=&child_of=' . $page_ID . '&depth=1' );
		echo '</div>';
	} else {
		echo '<div class="has-child">';
		echo '<h2 class="has-child-title">' . $page_title . '</h2>';
		wp_list_pages( 'title_li=&child_of=' . $parent_ID . '&depth=1' );
		echo '</div>';
	}
}

/**
 * add body class.
 *
 */
add_filter( 'body_class', 'xxxx' );

function xxxx( $classes ) {
	if ( is_page( 'xx' ) ) {
		$classes[] = 'xx-home';
		return $classes;
	}
	return $classes;
}

/*
 * add the post gag function to a page.
 * 
 */

function add_tag_to_page() {
	register_taxonomy_for_object_type( 'post_tag', 'page' );
}

add_action( 'init', 'add_tag_to_page' );

function add_page_to_tag_archive( $obj ) {
	if ( is_tag() ) {
		$obj->query_vars['post_type'] = array( 'post', 'page' );
	}
}

add_action( 'pre_get_posts', 'add_page_to_tag_archive' );

/*
 * Show the list of pages having the same tag.
 * 
 */

function related_by_post_tag() {

	global $wp_query;
	$the_page_id = $wp_query->post->ID;

	$tags = wp_get_post_tags( $the_page_id );

	if ( empty( $tags ) ) {
		return;
	}

	$tag_id = $tags[0]->term_id;

	$args = array(
		'tag_id'	 => $tag_id,
		'post_type'	 => 'page',
	);

	$query = new WP_Query( $args );

	echo '<ul>';
	while ( $query->have_posts() ) {
		$query->the_post();
		$page_permalink	 = get_permalink();
		$page_title		 = get_the_title();
		$page_id_in		 = get_the_ID();
		$page_thumbnail	 = get_the_post_thumbnail();

		if ( $the_page_id === $page_id_in ) {
			continue;
		}

		echo '<li><a href="'
		. $page_permalink
		. '">'
		//		. $page_title
		. $page_thumbnail
		. '</a></li>';
	}
	echo '</ul>';
	wp_reset_postdata();
}