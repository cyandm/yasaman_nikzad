<?php
add_action('acf/include_fields', 'cyn_register_acf');

function cyn_register_acf()
{
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	cyn_register_acf_company_settings();
	cyn_register_acf_service_settings();
}

function cyn_register_acf_company_settings()
{
	$fields = [
		cyn_acf_add_number('established_year', 'Established Year'),
		cyn_acf_add_text('country', 'country'),
		cyn_acf_add_text('location', 'location'),
		cyn_acf_add_text('phone', 'phone'),
		cyn_acf_add_image('flag', 'Flag'),
		cyn_acf_add_image('logo', 'Logo'),
		cyn_acf_add_options('verified_type', 'Verified Type', ['star-supplier', 'supplier']),
		cyn_acf_add_url('website', 'website'),
		cyn_acf_add_color('color', 'Color'),

	];

	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			],
		],
	];

	cyn_register_acf_group('Company Settings', $fields, $location);
}

//	Services Function 
function cyn_register_acf_service_settings()
{
	$fields = [
		cyn_acf_add_text('hours', 'Hours'),
		cyn_acf_add_text('days', 'Days'),
		cyn_acf_add_text('weeks', 'Weeks'),
	];

	//Services Page Info Cards Loop 
	$info_cards = [];

	for ($i = 1; $i <= 3; $i++) {

		$info_card = cyn_acf_add_group("card_$i", "Card $i", [

			cyn_acf_add_text("title_$i", "Title $i"),

			cyn_acf_add_text("text_$i", "Text $i"),

		]);

		array_push($info_cards, $info_card);
	}

	$fields = array_merge($fields, $info_cards);
	//End OF Services Page Info Cards Loop 


	//Services Page Slideshow
	$slideshow_imgs = [];

	for ($i = 1; $i <= 10; $i++) {

		$slideshow_img = cyn_acf_add_image("image_$i", "Image $i");


		array_push($slideshow_imgs, $slideshow_img);
	}

	$fields = array_merge($fields, $slideshow_imgs);
	//End of Services Page Slideshow

	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'service',
			],
		],
	];

	cyn_register_acf_group('Service Settings', $fields, $location);
}
