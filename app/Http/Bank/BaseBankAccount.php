<?php

namespace App\Http\Bank;

abstract class BaseBankAccount
{
  protected string $accountType;

  protected float $balance = 0;

  public function getAccountType(): string
  {
    return $this->accountType;
  }
}