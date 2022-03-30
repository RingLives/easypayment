<?php

namespace Ringlives\Easypayment;

class Bkash extends BaseBkashClient
{
	/**
     * The bkash version.
     *
     * @var string
     */
	const VERSION = "v1.2.0-beta";

    protected $proxy = "";

    public static function getBaseUrl()
    {
        if($this->getMode() == "live") {
            return self::BKASH_LIVE_URL;
        }

        return self::BKASH_SANDBOX_URL;
    }
	/**
     * Get the version number of the bkash application.
     *
     * @return string
     */
    public static function version()
    {
        return static::VERSION;
    }
}