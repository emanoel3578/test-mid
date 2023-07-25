<?php

namespace Tests\Unit\Bank;

use App\Http\Bank\CheckingAccount;
use App\Http\Bank\SavingsAccount;
use Tests\TestCase;

class BankTest extends TestCase
{
  protected const CHECKING_ACCOUNT_TYPE = 'Checking Account';
  protected const SAVINGS_ACCOUNT_TYPE = 'Savings Account';

  public function testShouldReturnAmountSubtractedFromFeeForCheckingAccounts()
  {
    $initialBalance = 1000.0;
    $newBalanceWithSubtractedCheckingAccount = $initialBalance - ($initialBalance * CheckingAccount::CHECKING_ACCOUNT_FEE);
    $sut = new CheckingAccount($initialBalance);

    $result = $sut->getBalance();
    $accountTypeResult = $sut->getAccountType();
    $this->assertEquals($newBalanceWithSubtractedCheckingAccount, $result);
    $this->assertEquals(self::CHECKING_ACCOUNT_TYPE, $accountTypeResult);
  }

  public function testShouldReturnAmountMultipliedWithFeeForSavingAccounts()
  {
    $initialBalance = 1000.0;
    $newBalanceWithMultipliedFees = $initialBalance * SavingsAccount::SAVINGS_ACCOUNT_FEE;
    $sut = new SavingsAccount($initialBalance);

    $result = $sut->getBalance();
    $accountTypeResult = $sut->getAccountType();
    $this->assertEquals($newBalanceWithMultipliedFees, $result);
    $this->assertEquals(self::SAVINGS_ACCOUNT_TYPE, $accountTypeResult);
  }
}