<?php

namespace App\Http\Bank;

use App\Exceptions\Bank\InvalidBalanceNumber;

abstract class BaseBankAccount
{
  protected string $accountType;

  protected float $balance = 0;

  public function __construct(float $balance = 0.0)
  {
    $this->setBalance($balance);
  }

  public function getAccountType(): string
  {
    return $this->accountType;
  }

  public function setBalance(float $balance):void
  {
    if (is_numeric($balance) && $balance <= 0) {
      throw new InvalidBalanceNumber();
    }

    $this->balance = $balance;
  }
}