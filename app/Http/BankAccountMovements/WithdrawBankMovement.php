<?php

namespace App\Http\BankAccountMovements;

use App\Exceptions\Bank\WithdrawIsBiggerThanBalanceException;
use App\Http\Bank\Interfaces\IBankAccount;
use App\Http\BankAccountMovements\Interfaces\IBankMovementInterface;

final class WithdrawBankMovement extends BaseBankMovement implements IBankMovementInterface
{
  protected const BANK_MOVEMENT_TYPE = 'Withdraw';

  public function applyMovementation(IBankAccount $bankAccount): float
  {
    $withdrawedBalance = $bankAccount->balance() - $this->amount;

    if ($withdrawedBalance < 0) {
      throw new WithdrawIsBiggerThanBalanceException;
    }

    return $withdrawedBalance;
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