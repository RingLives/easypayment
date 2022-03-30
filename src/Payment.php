<?php

namespace Ringlives\Easypayment;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;

class Payment implements Arrayable, Jsonable, JsonSerializable
{
	/**
     * The related customer instance.
     *
     */
    protected $customer;
}