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

	'mode' => env('EASYPAYMENT_MODE', 'sandbox'),

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

    'currency' => env('EASYPAYMENT_CURRENCY', 'BDT'),

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

    'currency_locale' => env('EASYPAYMENT_CURRENCY_LOCALE', 'bdt'),

    /*
    |--------------------------------------------------------------------------
    | Gateway
    |--------------------------------------------------------------------------
    |
    |
    */

	'gateway' => [
		'bkash' => [
			'app_key' => env('BKASH_APP_KEY', '5tunt4masn6pv2hnvte1sb5n3j'),
			'app_secret' => env('BKASH_APP_SECRET', '1vggbqd4hqk9g96o9rrrp2jftvek578v7d2bnerim12a87dbrrka'),
			'username' => env('BKASH_APP_SECRET', 'sandboxTestUser'),
			'password' => env('BKASH_APP_SECRET', 'hWD@8vtzw0'),
		],
	],
];