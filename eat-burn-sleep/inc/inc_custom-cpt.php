<?php
/**
 * KBO Theme Custom Post Types, Custom Taxonomy and Custom Metabox
 *
 * @package KBO Theme
 * 
 * WP Icons link : https://developer.wordpress.org/resource/dashicons/
 * 
 */

/**
 * Create Custom Post Type
 */

function create_custom( $cpt = array() ) {
	register_post_type($cpt['post_type'], array(
		'label'					=> __($cpt['label'], 'kbo'),
		'description'			=> __($cpt['description'], 'kbo'),
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'capability_type'		=> 'post',
		'has_archive'			=> true,
		'hierarchical'			=> false,
		'rewrite'				=> array('slug' => $cpt['slug']),
		'query_var'				=> true,
		'exclude_from_search'	=> false,
		'menu_position'			=> 4,
        'menu_icon'				=> $cpt['menu_icon'],
		'supports'				=> array('title', 'editor', 'page-attributes', 'revisions', 'thumbnail'),
		'labels'				=> array(
									'name'					=> __($cpt['name'], 'kbo'),
									'singular_name' 		=> __($cpt['singular_name'], 'kbo'),
									'menu_name'				=> __($cpt['menu_name'], 'kbo'),
									'add_new'				=> __('Add'),
									'add_new_item'			=> __('Add '.$cpt['name'], 'kbo'),
									'edit'					=> __('Edit'),
									'edit_item'				=> __('Edit', 'kbo').' '.$cpt['name'],
									'new_item'				=> __('New', 'kbo').' '.$cpt['name'],
									'view'					=> __('View'),
									'view_item'				=> __('View', 'kbo').' '.$cpt['name'],
									'search_items'			=> __('Search', 'kbo').' '.$cpt['name'],
									'not_found'				=> __('Aucune ' . $cpt['name'] . ' trouvée', 'kbo'),
									'not_found_in_trash'	=> __('Aucune ' . $cpt['name'] . ' trouvée dans la corbeille', 'kbo'),
									'parent'				=> __('Parent '.$cpt['name'], 'kbo'),
									),
		)
	);
}

function create_taxonomie ( $cpt = array(), $label, $type ) {
	register_taxonomy( $type, $cpt['post_type'], array(
	    'label' => __( $label ),
	    'rewrite' => array( 'slug' =>  $type ),
	    'hierarchical' => true,
		)
	);
}




/**
 * Create Taxonomie for Custom Post Type
 *
 * create_taxonomie ( $custom, 'label', 'type' );
 */
 
/**
 * Create Custom Post Type
 */

/*
$custom = array(
			'post_type'		=> '',
			'label'			=> '',
			'description'	=> '',
			'slug'			=> '',
			'menu_icon'		=> '',
			'name'			=> '',
			'singular_name'	=> '',
			'menu_name'		=> '',
			);

create_custom( $custom );
*/

$custom = array(
			'post_type'		=> 'cpt-recipes',
			'label'			=> 'Recipe',
			'description'	=> '',
			'slug'			=> 'cpt-recipes',
			'menu_icon'		=> 'dashicons-carrot',
			'name'			=> 'Recipe',
			'singular_name'	=> 'Recipe',
			'menu_name'		=> 'Recipes',
			);

create_custom( $custom );
create_taxonomie ( $custom, 'Meal Type', 'recipe-meal-types' );
create_taxonomie ( $custom, 'Food Type', 'recipe-food-types' );
create_taxonomie ( $custom, 'List Type', 'recipe-list-types' );
//create_taxonomie ( $custom, 'MemberPress Rules', 'cpt-memberpress-rules' );

$custom = array(
			'post_type'		=> 'cpt-podcasts',
			'label'			=> 'Podcast',
			'description'	=> '',
			'slug'			=> 'cpt-podcasts',
			'menu_icon'		=> 'dashicons-controls-volumeon',
			'name'			=> 'Podcast',
			'singular_name'	=> 'Podcast',
			'menu_name'		=> 'Podcasts',
			);

create_custom( $custom );

$custom = array(
			'post_type'		=> 'cpt-guided-meditate',
			'label'			=> 'Guided Meditation',
			'description'	=> '',
			'slug'			=> 'cpt-guided-meditate',
			'menu_icon'		=> 'dashicons-format-video',
			'name'			=> 'Guided Meditation',
			'singular_name'	=> 'Guided Meditation',
			'menu_name'		=> 'Guided Meditation',
			);

create_custom( $custom );
create_taxonomie ( $custom, 'Categories', 'guided-meditation-categories' );
//create_taxonomie ( $custom, 'MemberPress Rules', 'cpt-memberpress-rules' );

$custom = array(
			'post_type'		=> 'cpt-movement',
			'label'			=> 'Movement Guide',
			'description'	=> '',
			'slug'			=> 'cpt-movement',
			'menu_icon'		=> 'dashicons-format-video',
			'name'			=> 'Movement Guide',
			'singular_name'	=> 'Movement Guide',
			'menu_name'		=> 'Movement Guide',
			);

create_custom( $custom );
create_taxonomie ( $custom, 'Categories', 'movement-categories' );
//create_taxonomie ( $custom, 'MemberPress Rules', 'cpt-memberpress-rules' );

$custom = array(
			'post_type'		=> 'cpt-movement-series',
			'label'			=> 'Movement Series',
			'description'	=> '',
			'slug'			=> 'cpt-movement-series',
			'menu_icon'		=> 'dashicons-format-video',
			'name'			=> 'Movement Series',
			'singular_name'	=> 'Movement Series',
			'menu_name'		=> 'Movement Series',
			);

create_custom( $custom );
//create_taxonomie ( $custom, 'MemberPress Rules', 'cpt-memberpress-rules' );

$custom = array(
			'post_type'		=> 'cpt-life-style-guide',
			'label'			=> 'Lifestyle Guide',
			'description'	=> '',
			'slug'			=> 'cpt-life-style-guide',
			'menu_icon'		=> 'dashicons-format-aside',
			'name'			=> 'Lifestyle Guide',
			'singular_name'	=> 'Lifestyle Guide',
			'menu_name'		=> 'Lifestyle Guide',
			);

create_custom( $custom );
create_taxonomie ( $custom, 'Categories', 'life-style-guide-categories' );
//create_taxonomie ( $custom, 'MemberPress Rules', 'cpt-memberpress-rules' );

$custom = array(
			'post_type'		=> 'cpt-six-week-reset',
			'label'			=> 'Six Week Reset',
			'description'	=> '',
			'slug'			=> 'cpt-six-week-reset',
			'menu_icon'		=> 'dashicons-format-aside',
			'name'			=> 'Six Week Reset',
			'singular_name'	=> 'Six Week Reset',
			'menu_name'		=> 'Six Week Reset',
			);

create_custom( $custom );
create_taxonomie ( $custom, 'Categories', 'six-week-reset-categories' );
create_taxonomie ( $custom, 'Tags', 'six-week-reset-tags' );
//create_taxonomie ( $custom, 'MemberPress Rules', 'cpt-memberpress-rules' );

$custom = array(
			'post_type'		=> 'cpt-special-advice',
			'label'			=> 'Specialized Advice',
			'description'	=> '',
			'slug'			=> 'cpt-special-advice',
			'menu_icon'		=> 'dashicons-format-aside',
			'name'			=> 'Specialized Advice',
			'singular_name'	=> 'Specialized Advice',
			'menu_name'		=> 'Specialized Advice',
			);

create_custom( $custom );
//create_taxonomie ( $custom, 'MemberPress Rules', 'cpt-memberpress-rules' );

$custom = array(
			'post_type'		=> 'cpt-my-ebs-week',
			'label'			=> 'Reboot & Revive',
			'description'	=> '',
			'slug'			=> 'cpt-my-ebs-week',
			'menu_icon'		=> 'dashicons-format-aside',
			'name'			=> 'Reboot & Revive',
			'singular_name'	=> 'Reboot & Revive',
			'menu_name'		=> 'Reboot & Revive',
			);

create_custom( $custom );
//create_taxonomie ( $custom, 'MemberPress Rules', 'cpt-memberpress-rules' );

$custom = array(
			'post_type'		=> 'cpt-masterclass',
			'label'			=> 'Masterclass Series',
			'description'	=> '',
			'slug'			=> 'cpt-masterclass',
			'menu_icon'		=> 'dashicons-format-aside',
			'name'			=> 'Masterclass Series',
			'singular_name'	=> 'Masterclass Series',
			'menu_name'		=> 'Masterclass Series',
			);

create_custom( $custom );
//create_taxonomie ( $custom, 'MemberPress Rules', 'cpt-memberpress-rules' );

register_taxonomy( 'cpt-memberpress-rules', array('cpt-recipes','cpt-guided-meditate', 'cpt-movement', 'cpt-movement-series', 'cpt-life-style-guide', 'cpt-six-week-reset', 'cpt-special-advice', 'cpt-my-ebs-week', 'cpt-masterclass'), array( 'hierarchical' => true, 'label' => 'MemberPress Rules', 'query_var' => true, 'rewrite' => true ) ); 