<?php

namespace App\Http\Bank;

use App\Http\Bank\Interfaces\IBankAccount;

final class SavingsAccount extends BaseBankAccount implements IBankAccount
{
  protected const ACCOUNT_TYPE = 'Savings Account';

  public function __construct()
  {
    $this->accountType = self::ACCOUNT_TYPE;
  }

  public function balance(): float
  {
    return $this->balance * 0.2;
  }
}