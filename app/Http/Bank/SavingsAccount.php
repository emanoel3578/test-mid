<?php

namespace App\Http\Bank;

use App\Http\Bank\Interfaces\IBankAccount;

final class SavingsAccount extends BaseBankAccount implements IBankAccount
{
  protected const ACCOUNT_TYPE = 'Savings Account';
  public const SAVINGS_ACCOUNT_FEE = 0.2;
  protected string $accountType = self::ACCOUNT_TYPE;

  /**
   * For Saving accounts the custom rule is that the balance is 20% more.
   */
  public function getBalance(): float
  {
    return $this->balance * 0.2;
  }
}