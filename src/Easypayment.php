<?php

namespace Ringlives\Easypayment;

use Money\Formatter\IntlMoneyFormatter;
use Money\Currencies\ISOCurrencies;
use Ringlives\Easypayment\Bkash;
use Money\Currency;
use Money\Money;
use NumberFormatter;

class Easypayment
{
	/**
     * The easypayment app version.
     *
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * The custom currency formatter.
     *
     * @var callable
     */
    protected static $formatCurrencyUsing;

    /**
     * The default customer model class name.
     *
     * @var string
     */
    public static $customerModel = 'App\\Models\\User';

    /**
     * Get the Stripe SDK client.
     *
     * @param  array  $options
     * @return \Stripe\StripeClient
     */
    public static function bkash(array $options = [])
    {
        return new StripeClient(array_merge([
            'api_key' => $options['api_key'] ?? config('cashier.secret'),
            'bkash_version' => Bkash::STRIPE_VERSION,
            'api_base' => Bkash::getBaseUrl(),
        ], $options));
    }

    /**
     * Set the custom currency formatter.
     *
     * @param  callable  $callback
     * @return void
     */
    public static function formatCurrencyUsing(callable $callback)
    {
        static::$formatCurrencyUsing = $callback;
    }

    /**
     * Format the given amount into a displayable currency.
     *
     * @param  int  $amount
     * @param  string|null  $currency
     * @param  string|null  $locale
     * @return string
     */
    public static function formatAmount($amount, $currency = null, $locale = null)
    {
        if (static::$formatCurrencyUsing) {
            return call_user_func(static::$formatCurrencyUsing, $amount, $currency);
        }

        $money = new Money($amount, new Currency(strtoupper($currency ?? config('cashier.currency'))));

        $locale = $locale ?? config('cashier.currency_locale');

        $numberFormatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
        $moneyFormatter = new IntlMoneyFormatter($numberFormatter, new ISOCurrencies());

        return $moneyFormatter->format($money);
    }

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }
}