<?php

namespace Tests;

use App\Http\Bank\CheckingAccount;
use App\Http\Bank\SavingsAccount;
use App\Http\BankAccountMovements\DepositBankMovement;

class DepositBankMovementTest extends TestCase
{
  public function testShouldReturnCorrectAmountFromDepositedSavingsBankAccount()
  {
    $initialBalance = 1000;
    $depositValue = 1000;
    $bankAccount = new SavingsAccount($initialBalance);
    $expectedBalanceAfterDeposit = $bankAccount->getBalance() + $depositValue;
    $sut = new DepositBankMovement($depositValue);

    $result = $sut->applyMovementation($bankAccount);

    $this->assertEquals($expectedBalanceAfterDeposit, $result);
  }

  public function testShouldReturnCorrectAmountFromDepositedCheckingsBankAccount()
  {
    $initialBalance = 1000;
    $depositValue = 1000;
    $bankAccount = new CheckingAccount($initialBalance);
    $expectedBalanceAfterDeposit = $bankAccount->getBalance() + $depositValue;
    $sut = new DepositBankMovement($depositValue);

    $result = $sut->applyMovementation($bankAccount);

    $this->assertEquals($expectedBalanceAfterDeposit, $result);
  }
}