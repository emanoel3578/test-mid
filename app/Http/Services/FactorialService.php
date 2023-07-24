<?php

namespace App\Http\Services;

final class FactorialService extends Service
{
  private $factorialSumResult = 0;

  public function run(): void
  {
    $this->runCalculateFactorial();
  }

  private function runCalculateFactorial(): void
  {
    $number = $this->getData('number');
    $this->factorialSumResult = $this->calculateFactorialSum($number);
  }

  private function calculateFactorialSum($number): int
  {
    if ($number >= 1){
      return $number * $this->calculateFactorialSum($number - 1);
    }

    return 1;
  }

  public function getDataToResponse(): array
  {
    return [
      'Factorial Sum Number' => $this->factorialSumResult
    ];
  }
}