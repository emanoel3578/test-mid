<?php

namespace Tests\Unit;

use App\Http\Services\PalindromeService;
use Tests\TestCase;

class PalindromeServiceTest extends TestCase
{
  public function testReturnTrueInPalindromeCase()
  {
    $data = ['word' => 'DAD'];

    $sut = new PalindromeService();
    $sut->setData($data);
    $sut->run();

    $result = $sut->getDataToResponse();
    $expected = ['Is Palindrome' => true];

    $this->assertIsArray($result);
    $this->assertEquals($expected, $result);
  }

  public function testReturnFalseInPalindromeCase()
  {
    $data = ['word' => 'Not palindrome'];

    $sut = new PalindromeService();
    $sut->setData($data);
    $sut->run();

    $result = $sut->getDataToResponse();
    $expected = ['Is Palindrome' => false];

    $this->assertIsArray($result);
    $this->assertEquals($expected, $result);
  }
}