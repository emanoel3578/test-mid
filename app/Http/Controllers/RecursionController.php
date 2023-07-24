<?php

namespace App\Http\Controllers;

use App\Http\Requests\FactorialRequest;
use App\Http\Services\FibonacciService;

final class RecursionController extends Controller
{
  public function calculateFibonacci(FactorialRequest $request, FibonacciService $fibonacciService)
  {
    $validatedData = $request->validated();

    $fibonacciInput = [
      'number' => $validatedData
    ];

    $fibonacciService->setData($fibonacciInput)->run();

    return $fibonacciService->getDataToResponse();
  }
}