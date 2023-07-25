<?php

namespace Tests\Unit\Bank;

use App\Exceptions\Bank\WithdrawIsBiggerThanBalanceException;
use App\Http\Bank\CheckingAccount;
use App\Http\Bank\SavingsAccount;
use App\Http\BankAccountMovements\WithdrawBankMovement;
use Tests\TestCase;

class WithdrawBankMovementTest extends TestCase
{
  public function testShouldThrowExceptionIfWithdrawValueIsGreaterThanBalance()
  {
    $initialBalance = 10;
    $withdrawValue = 1000;

    $this->expectException(WithdrawIsBiggerThanBalanceException::class);

    $bankAccount = new SavingsAccount($initialBalance);
    $sut = new WithdrawBankMovement($withdrawValue);

    $sut->applyMovementation($bankAccount);
  }

  public function testShouldReturnCorrectAmountFromWithdrawedSavingsBankAccount()
  {
    $initialBalance = 1000;
    $withdrawValue = 100;
    $bankAccount = new SavingsAccount($initialBalance);
    $expectedBalanceAfterWithdraw = $bankAccount->getBalance() - $withdrawValue;
    $sut = new WithdrawBankMovement($withdrawValue);

    $result = $sut->applyMovementation($bankAccount);

    $this->assertEquals($expectedBalanceAfterWithdraw, $result);
  }

  public function testShouldReturnCorrectAmountFromWithdrawedCheckingBankAccount()
  {
    $initialBalance = 1000;
    $withdrawValue = 100;
    $bankAccount = new CheckingAccount($initialBalance);
    $expectedBalanceAfterWithdraw = $bankAccount->getBalance() - $withdrawValue;
    $sut = new WithdrawBankMovement($withdrawValue);

    $result = $sut->applyMovementation($bankAccount);

    $this->assertEquals($expectedBalanceAfterWithdraw, $result);
  }
}