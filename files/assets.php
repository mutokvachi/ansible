<?php

return [
	'public_img_path' => '/img/',
	'private_file_path' => '/app/files',
	
	'images' => [
		
		'paths' => [
			'input' => 'public/img',
			'resources' => 'public/resources',
			'resources_route' => '/resources',
			'output' => 'storage/app/cache/images',
			'root_folder' => env('ROOT_PATH'),
		],
		
		'sizes' => [
			'small' => [
				'width' => 150,
				'height' => 100,
			],
			'big' => [
				'width' => 600,
				'height' => 400,
			],
			'medium' => [
				'width' => 180,
				'height' => 108,
			],
			'small_avatar' => [
				'width' => 29,
				'height' => 29,
			],
			'employee_pic' => [
				'width' => 76,
				'height' => 76,
			],
			'employee_row' => [
				'width' => 60,
				'height' => 60,
			],
			'employee_100' => [
				'width' => 100,
				'height' => 100,
			],
			'gallery_thumbn' => [
				'width' => 305,
				'height' => 200,
			],
			'gallery_big' => [
				'width' => 1220,
				'height' => 800,
			],
			'gallery_medium' => [
				'width' => 180,
				'height' => 108,
			],
		],
	],
	
	// Here we provide paths to where images and files will be copied after upload in CMS
	// Replase "C:\wamp64\www\cms" with appropriate path on your server and use Linux style seperators.
	// where CMS web is saved for examle on linux it can be: /var/www/cms
	'copy_paths' => [
		
		// Public files (access without authorization)
		'public' => [
			// Images with resizing options
			'images' => [
				
				[
					'folder_path' => env('ROOT_PATH').'/public/formated_img/medium',
					'width' => '180',
					'height' => '108',
					'is_for_gallery' => false,
				],
				
				[
					'folder_path' => env('ROOT_PATH').'/public/formated_img_galery/gallery_medium',
					'width' => '180',
					'height' => '108',
					'is_for_gallery' => true,
				],
				
				[
					'folder_path' => env('ROOT_PATH').'/public/formated_img_galery/gallery_big',
					'width' => '1220',
					'height' => '800',
					'is_for_gallery' => true,
				],
			],
			
			'other' => [],
		],
		
		'private' => [
			'images' => [],
			'other' => [],
		],
	],
];
