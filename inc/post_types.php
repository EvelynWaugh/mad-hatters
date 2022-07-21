<?php
add_action( 'init', 'hat_register_post_types' );

function hat_register_post_types() {
	register_post_type(
		'hat',
		array(
			'labels'              => array(
				'name'               => __( 'Hats' ),
				'singular_name'      => __( 'Hat' ),
				'menu_name'          => __( 'Hats' ),
				'all_items'          => __( 'All Hats' ),
				'add_new'            => __( 'Add new' ),
				'add_new_item'       => __( 'Add Hats' ),
				'edit'               => __( 'Edit' ),
				'edit_item'          => __( 'Edit Hats' ),
				'new_item'           => __( 'New Hat' ),
				'view'               => __( 'See Hats' ),
				'view_item'          => __( 'See Hat' ),
				'search_items'       => __( 'Search Hats' ),
				'not_found'          => __( 'Hats not found' ),
				'not_found_in_trash' => __( 'Hats not found in trash' ),
				'parent'             => __( 'Parent Hat' ),
			),
			'rewrite'             => array(
				'slug' => 'hats',

			),
			'description'         => '',
			'public'              => true,
			'show_ui'             => true,
			'capability_type'     => 'page',
			'map_meta_cap'        => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'hierarchical'        => false,
			'query_var'           => true,
			'show_in_rest'        => true,

			'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'menu_position'       => 3,
			'has_archive'         => true,
			'show_in_nav_menus'   => true,

		)
	);

	register_taxonomy(
		'hat_category',
		array( 'hat' ),
		array(
			'label'             => '',
			'labels'            => array(
				'name'                       => __( 'Category' ),
				'singular_name'              => __( 'Category' ),
				'search_items'               => __( 'Search Category' ),
				'popular_items'              => __( 'Popular Category' ),
				'all_items'                  => __( 'All Category' ),
				'parent_item'                => __( 'Parent Category' ),
				'parent_item_colon'          => __( 'Parent Category:' ),
				'edit_item'                  => __( 'Edit Category' ),
				'update_item'                => __( 'Update Category' ),
				'add_new_item'               => __( 'Add new Category' ),
				'new_item_name'              => __( 'New Name Category' ),
				'separate_items_with_commas' => __( 'Separate Category by comma' ),
				'add_or_remove_items'        => __( 'Add or remove Category' ),
				'choose_from_most_used'      => __( 'Choose from the most used Category' ),
				'not_found'                  => __( 'Category not found.' ),
				'menu_name'                  => __( 'Category' ),
			),
			'rewrite'           => array(
				'slug' => 'hat-category',

			),
			'public'            => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'meta_box_cb'       => 'post_categories_meta_box',

		)
	);
}
