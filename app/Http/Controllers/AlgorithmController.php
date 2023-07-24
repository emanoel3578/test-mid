<?php

namespace App\Http\Controllers;

use App\Http\Requests\FactorialRequest;
use App\Http\Services\FactorialService;

final class AlgorithmController extends Controller
{
  public function calculateFactorial(FactorialRequest $request, FactorialService $factorialService)
  {
    $validatedData = $request->validated();

    $factorialInput = [
      'number' => $validatedData
    ];

    $factorialService->setData($factorialInput)->run();

    return [
      "Factorial result" => $factorialService->getDataToResponse()
    ];
  }
}