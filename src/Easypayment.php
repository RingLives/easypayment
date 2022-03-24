<?php

namespace Ringlives\Easypayment;

class Easypayment
{
	/**
     * The Laravel framework version.
     *
     * @var string
     */
    const VERSION = '1.0.0';

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