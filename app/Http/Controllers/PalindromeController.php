<?php

namespace App\Http\Controllers;

use App\Http\Requests\PalindromeRequest;
use App\Http\Services\PalindromeService;

final class PalindromeController extends Controller
{
  public function checkIfIsPalindrome(PalindromeRequest $request, PalindromeService $palindromeService)
  {
    $validatedData = $request->validated();

    $palindromeInput = [
      'word' => $validatedData
    ];

    $palindromeService->setData($palindromeInput)->run();

    return $palindromeService->getDataToResponse();
  }
}