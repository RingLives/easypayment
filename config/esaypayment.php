<?php
	
return [

	/*
    |--------------------------------------------------------------------------
    | Mode
    |--------------------------------------------------------------------------
    |
    | This is the default mode that will be used when application is live or sandbox mode.
    |
    */

	'mode' => env('ESAYPAYMENT_MODE', 'sandbox'),

	/*
    |--------------------------------------------------------------------------
    | Currency
    |--------------------------------------------------------------------------
    |
    | This is the default currency that will be used when generating charges
    | from your application. Of course, you are welcome to use any of the
    | various world currencies that are currently supported via Bkash.
    |
    */

    'currency' => env('CASHIER_CURRENCY_LOCALE', 'BDT'),

    /*
    |--------------------------------------------------------------------------
    | Currency Locale
    |--------------------------------------------------------------------------
    |
    | This is the default locale in which your money values are formatted in
    | for display. To utilize other locales besides the default en locale
    | verify you have the "intl" PHP extension installed on the system.
    |
    */

    'currency_locale' => env('ESAYPAYMENT_CURRENCY', 'bdt'),

    /*
    |--------------------------------------------------------------------------
    | Gateway
    |--------------------------------------------------------------------------
    |
    |
    */

	'gateway' => [
		'bkash' => [
			'app_key' => env('BKASH_APP_KEY', ''),
			'app_secret' => env('BKASH_APP_SECRET', ''),
			'username' => env('BKASH_APP_SECRET', ''),
			'password' => env('BKASH_APP_SECRET', ''),
		],
	],
];