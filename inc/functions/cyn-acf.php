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
		cyn_acf_add_group('card', 'cards', [
			cyn_acf_add_text('title-1', 'Title-1'),
			cyn_acf_add_text('text-1', 'Text-1'),
			cyn_acf_add_text('title-2', 'Title-2'),
			cyn_acf_add_text('text-2', 'Text-2'),
			cyn_acf_add_text('title-3', 'Title-3'),
			cyn_acf_add_text('text-3', 'Text-3'),
		]),



	];

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
