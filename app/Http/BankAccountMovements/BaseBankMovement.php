<?php

namespace App\Http\BankAccountMovements;

abstract class BaseBankMovement
{
  protected $amount;

  public function __construct(float $amount)
  {
    $this->amount = $amount;
  }
}