<?php

namespace App\Http\BankAccountMovements;

use App\Http\Bank\Interfaces\IBankAccount;
use App\Http\BankAccountMovements\Interfaces\IBankMovementInterface;

final class DepositBankMovement extends BaseBankMovement implements IBankMovementInterface
{
  protected const BANK_MOVEMENT_TYPE = 'Deposit';

  public function applyMovementation(IBankAccount $bankAccount): float
  {
    return $bankAccount->getBalance() + $this->amount;
  }

  public function getMovementInfo(): string
  {
    return self::BANK_MOVEMENT_TYPE;
  }

  public function getAmount(): float
  {
    return $this->amount;
  }
}