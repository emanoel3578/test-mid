<?php

namespace App\Http\Services;

final class FibonacciService extends Service
{
  private array $fibonacciResult = [];

  public function run(): void
  {
    $this->runCalculateFibonacci();
  }

  private function runCalculateFibonacci(): void
  {
    $number = $this->getData('number');
    $this->calculateFibonacci($number);
  }

  private function calculateFibonacci(int $number): void
  {
    $num1 = 0;
    $num2 = 1;
  
    $counter = 0;
    while ($counter < $number){
      $this->fibonacciResult[] = $num1;
      $num3 = $num2 + $num1;
      $num1 = $num2;
      $num2 = $num3;
      $counter = $counter + 1;
    }
  }

  public function getDataToResponse(): array
  {
    return [
      "Fibonacci sequence" => $this->fibonacciResult
    ];
  }
}