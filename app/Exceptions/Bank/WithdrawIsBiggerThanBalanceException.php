<?php

namespace App\Exceptions\Bank;

use Exception;

class WithdrawIsBiggerThanBalanceException extends Exception
{
  protected final const EXCEPTION_MESSAGE = 'The withdrawed value is greater than your current balance';
  protected final const EXECEPTION_CODE = 500;

  public function __construct()
  {
    parent::__construct(self::EXCEPTION_MESSAGE, self::EXECEPTION_CODE);
  }
}