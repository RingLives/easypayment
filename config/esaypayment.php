<?php
	
return [

	'mode' => env('ESAYPAYMENT_MODE', 'sandbox'),

	'gateway' => [

		'bkash' => [
			'app_key' => env('BKASH_APP_KEY', ''),
			'app_key' => env('BKASH_APP_KEY', ''),
			'app_secret' => env('BKASH_APP_SECRET', ''),
		],
	],
];