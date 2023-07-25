<?php

namespace Tests\Feature\CountWords;

use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class CountWordsFromUploadedFileTest extends TestCase
{
  public function testShouldCountWordsFromUploadedFile()
  {
    $file = new UploadedFile(storage_path('wordsfile.txt'), 'wordsfile.txt', null, null, true);

    $response = $this->json('POST', 'api/count-words', [
      'file_input' => $file
    ]);

    $response->assertOk();
    $response->assertJson([
      'Total words on file' => 11
    ]);
  }
}