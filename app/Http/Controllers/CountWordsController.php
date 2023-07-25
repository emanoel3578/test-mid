<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountWordsRequest;
use App\Http\Services\CountWordsService;

class CountWordsController extends Controller
{
  public function countWords(CountWordsRequest $request, CountWordsService $countWordsService)
  {
    $validatedData = $request->validated();

    $fileInput = ['file' => $validatedData];

    $countWordsService->setData($fileInput);

    $countWordsService->run();

    return $countWordsService->getDataToResponse();
  }
}