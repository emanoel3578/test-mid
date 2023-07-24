<?php

namespace Tests\Unit;

use App\Http\Services\FibonacciService;
use Tests\TestCase;

class FibonacciServiceTest extends TestCase
{
  public function testShouldCalculateCorrectFibonacciSequenceForNumber10()
  {
    $data = ['number' => 10];

    $sut = new FibonacciService();
    $sut->setData($data);
    $sut->run();

    $result = $sut->getDataToResponse();
    $expected = ['Fibonacci sequence' => [0,1,1,2,3,5,8,13,21,34]];

    $this->assertIsArray($result);
    $this->assertEquals($expected, $result);
  }
}