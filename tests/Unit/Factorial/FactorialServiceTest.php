<?php

namespace Tests\Unit\Factorial;

use App\Http\Services\FactorialService;
use Tests\TestCase;

class FactorialServiceTest extends TestCase
{
  public function testShouldCalculateCorrectFactorialSumOfGivenNumber()
  {
    $data = ['number' => 5];

    $sut = new FactorialService();
    $sut->setData($data);
    $sut->run();

    $result = $sut->getDataToResponse();
    $expected = ['Factorial Sum Number' => 120];

    $this->assertIsArray($result);
    $this->assertEquals($expected, $result);
  }

  public function testShouldReturnOneIfNumberIsSmallerOrEqualThanOne()
  {
    $data = ['number' => 1];

    $sut = new FactorialService();
    $sut->setData($data);
    $sut->run();

    $result = $sut->getDataToResponse();
    $expected = ['Factorial Sum Number' => 1];

    $this->assertIsArray($result);
    $this->assertEquals($expected, $result);
  }
}