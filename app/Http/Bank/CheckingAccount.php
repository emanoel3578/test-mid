<?php

namespace App\Http\Bank;

use App\Http\Bank\Interfaces\IBankAccount;

final class CheckingAccount extends BaseBankAccount implements IBankAccount
{
  protected const ACCOUNT_TYPE = 'Checking Account';
  public const CHECKING_ACCOUNT_FEE = 0.2;
  protected string $accountType = self::ACCOUNT_TYPE;

  /**
   * For Checking accounts the custom rule is that the balance is applied a fee of 20%.
   */
  public function getBalance(): float
  {
    return $this->balance - ($this->balance * self::CHECKING_ACCOUNT_FEE);
  }
}