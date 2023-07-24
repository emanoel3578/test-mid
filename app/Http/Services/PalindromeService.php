<?php

namespace App\Http\Services;

use App\Http\Services\Service;

final class PalindromeService extends Service
{
  private bool $isPalindrome = false;

  public function run(): void
  {
    $this->runCheckIsPalindrome();
  }

  public function runCheckIsPalindrome(): void
  {
    $isPalindrome = false;
    $word = $this->getData('word');

    if (strrev($word) === $word) {
      $isPalindrome = true;
    }

    $this->isPalindrome = $isPalindrome;
  }

  public function getDataToResponse(): array
  {
    return [
      'Is Palindrome' => $this->isPalindrome
    ];
  }
}