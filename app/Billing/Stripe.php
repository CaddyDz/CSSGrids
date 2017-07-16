<?php

namespace blog\Billing;

/**
 *
 */
class Stripe
{
  protected $key;

  function __construct($key)
  {
    return $this->key = $key;
  }
}
