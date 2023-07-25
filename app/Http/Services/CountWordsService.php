<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

final class CountWordsService extends Service
{
  private int $wordsTotal = 0;

  public function run(): void
  {
    $this->runCountWordsOnFile();
  }

  private function runCountWordsOnFile(): void
  {
    $wordsTotal = 0;
    $file = $this->getData('file');
    $fileContents = File::get($file['file_input']);

    if (!empty($fileContents)) {
      $wordsTotal = Str::of($fileContents)->wordCount();
    }

    $this->wordsTotal = $wordsTotal;
  }

  public function getDataToResponse(): array
  {
    return [
      'Total words on file' => $this->wordsTotal
    ];
  }
}