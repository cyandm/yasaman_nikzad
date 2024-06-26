<?php

if (!class_exists('cyn_register')) {
	class cyn_register
	{
		function __construct()
		{

			add_action('init', [$this, 'cyn_post_type_register']);
			add_action('init', [$this, 'cyn_taxonomy_register']);
			add_action('init', [$this, 'cyn_term_register']);
			add_action('init', [$this, 'cyn_page_register']);
			add_action('after_setup_theme', [$this, 'cyn_register_menus']);
		}

		public function cyn_register_menus()
		{

			//for use in theme => wp_nav_menu(['theme_location' => 'header_demo'])
			register_nav_menus([
				'header' => "Header",
				'footer' => "Footer",
			]);
		}

		public function cyn_post_type_register()
		{
			// $this->cyn_make_post_type('demo_post_type' , 'demo' , 'demos')
			$this->cyn_make_post_type('landmark', 'landmark', 'landmarks', 'dashicons-format-gallery');
			$this->cyn_make_post_type('service', 'service', 'services', 'dashicons-clipboard');
			$this->cyn_make_post_type('consent', 'consent', 'consents', 'dashicons-admin-comments');
			$this->cyn_make_post_type('resume', 'Resume', 'Resumes', 'dashicons-welcome-write-blog');
		}

		public function cyn_taxonomy_register()
		{
			// $this->cyn_make_taxonomy( 'demo_taxonomy', 'demo', 'demos' , ['demo_post_type'] )
		}

		public function cyn_term_register()
		{
			//This terms can't be removed


			// wp_insert_term( 'name', 'taxonomy', [ 'slug' => 'slug' ] );
		}

		public function cyn_page_register()
		{
			//This pages can't be removed

			if (is_null(get_page_by_path('sample'))) {
				wp_insert_post([
					'post_type' => 'page',
					'post_status' => 'publish',
					'post_title' => 'Sample',
					'post_name' => 'sample',
					'page_template' => 'templates/sample.php'
				]);
			}

			if (is_null(get_page_by_path('contact-us'))) {
				wp_insert_post([
					'post_type' => 'page',
					'post_status' => 'publish',
					'post_title' => 'Contact Us',
					'post_name' => 'contact-us',
					'page_template' => 'templates/contact.php'
				]);
			}
		}


		/**
		 * Summary of cyn_make_post_type
		 * @param string $slug from Globals that defined in cyn-global.php
		 * @param string $singular_name 
		 * @param string $plural_name
		 * @param string $icon
		 * @param string[] $supports 
		 * @return void
		 */
		private function cyn_make_post_type($slug, $singular_name, $plural_name, $icon, $supports = ['title', 'thumbnail'])
		{
			$labels = [
				'name' => $singular_name,
				'singular_name' => $singular_name,
				'menu_name' => $plural_name,
				'name_admin_bar' => $singular_name,
				'add_new' => 'Add ' . $singular_name,
				'add_new_item' => 'Add ' . $singular_name . ' New',
				'new_item' => $singular_name . ' New',
				'edit_item' => 'Edit ' . $singular_name,
				'view_item' => 'View ' . $singular_name,
				'all_items' => 'All ' . $plural_name,
				'search_items' => 'Search ' . $singular_name,
				'not_found' => $singular_name . '‌not found',
				'not_found_in_trash' => $singular_name . ' not found'
			];

			$args = [
				'labels' => $labels,
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => ['slug' => $slug],
				'exclude_from_search' => false,
				'has_archive' => true,
				'hierarchical' => false,
				'menu_position' => null,
				'menu_icon' => $icon,
				'supports' => $supports,

			];

			register_post_type($slug, $args);
		}

		/**
		 * Summary of cyn_make_taxonomy
		 * @param string $slug from Globals that defined in cyn-global.php
		 * @param string $singular_name
		 * @param string $plural_name
		 * @param string[] $post_types 
		 * @param boolean $is_hierarchical
		 * @return void
		 */
		private function cyn_make_taxonomy($slug, $singular_name, $plural_name, $post_types, $is_hierarchical = true)
		{

			$args = [
				'labels' => [
					'name' => $plural_name,
					'menu_name' => $plural_name,
					'all_items' => 'همه ' . $plural_name,
					'add_new_item' => 'افزودن ' . $singular_name . 'جدید ',
				],
				'hierarchical' => $is_hierarchical,
				'public' => true,
				'show_ui' => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'show_tagcloud' => true,
				'query_var' => true,
				'rewrite' => ['slug' => $slug],
			];

			register_taxonomy($slug, $post_types, $args);
		}
	}
}
