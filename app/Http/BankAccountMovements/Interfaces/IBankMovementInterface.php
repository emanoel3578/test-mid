<?php

namespace App\Http\BankAccountMovements\Interfaces;

use App\Http\Bank\Interfaces\IBankAccount;

interface IBankMovementInterface
{
  public function applyMovementation(IBankAccount $bankAccount);

  public function getMovementInfo():string;

  public function getAmount():float;
}