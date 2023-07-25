<?php

namespace App\Exceptions\Bank;

use Exception;

class WithdrawIsBiggerThanBalanceException extends Exception
{
  protected final const EXCEPTION_MESSAGE = 'The withdrawed value is greater than your current balance';

  public function __construct()
  {
    parent::__construct(self::EXCEPTION_MESSAGE);
  }
}