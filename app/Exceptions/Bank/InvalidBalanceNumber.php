<?php

namespace App\Exceptions\Bank;

use Exception;

class InvalidBalanceNumber extends Exception
{
  protected final const EXCEPTION_MESSAGE = 'The given balance value is not valid';

  public function __construct()
  {
    parent::__construct(self::EXCEPTION_MESSAGE);
  }
}