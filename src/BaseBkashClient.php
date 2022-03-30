<?php

namespace Ringlives\Easypayment;

class BaseBkashClient
{
	protected $config;

    const BKASH_PAYMENT_TOKEN = "checkout/token/grant";

	const BKASH_PAYMENT_CREATE = "checkout/payment/create";

	const BKASH_PAYMENT_EXECUTE = "checkout/payment/execute";

	const BKASH_LIVE_URL = "https://www.bkashcluster.com";

	const BKASH_SANDBOX_URL = "https://checkout.sandbox.bka.sh";

    public function __construct() {
        $this->config =  [
            'app_key' => config('easypayment.bkash.app_key'),
            'app_secret' => config('easypayment.bkash.app_secret'),
            'username' => config('easypayment.bkash.username'),
            'password' => config('easypayment.bkash.password'),
        ];
    }

    public function getUsername()
    {
        return $this->config['username'];
    }

    public function getAppSecret()
    {
        return $this->config['app_secret'];
    }

    public function getAppKey()
    {
        return $this->config['app_key'];
    }

    public function getMode()
    {
        return $this->config['mode'];
    }

	/**
     * TODO: replace this with a private constant when we drop support for PHP < 5.
     *
     * @return array<string, mixed>
     */
    protected function getDefaultConfig()
    {
        return $this->config;
    }
}