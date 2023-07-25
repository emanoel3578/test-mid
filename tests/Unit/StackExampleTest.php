<?php

namespace Tests;

use App\Exceptions\Stack\StackIsEmptyException;
use App\Stack\StackExample;

class StackExampleTest extends TestCase
{
  protected final const TEST_ERROR_STACK_HAS_NOT_BEEN_PUSHED = 'The number pushed is not on the stack';
  protected final const TEST_ERROR_PUSHED_NUMBERS_ORDER_IS_NOT_ON_THE_STACK = 'The order of the pushed number on the stack is not as expected';
  protected final const TEST_ERROR_REMOVE_ITEM_STILL_PRESENT = 'The removed item still present on the stack';

  public function testShouldStackPushNewNumericValue()
  {
    $number = 1;
    
    $sut = new StackExample();

    $result = $sut->push($number);
    $expected = [$number];

    $this->assertEquals($expected, $result, self::TEST_ERROR_STACK_HAS_NOT_BEEN_PUSHED);
  }

  public function testShouldPushNewValueToLastPositionOnStack()
  {
    $firstPush = 1;
    $secondPush = 2;
    $lastPosition = 3;
    
    $sut = new StackExample();

    $sut->push($firstPush);
    $sut->push($secondPush);
    $result = $sut->push($lastPosition);

    $expected = [$firstPush, $secondPush, $lastPosition];

    $this->assertEquals($expected, $result, self::TEST_ERROR_PUSHED_NUMBERS_ORDER_IS_NOT_ON_THE_STACK);
  }

  public function testShouldRemoveLastItemOfStack()
  {
    $firstItem = 1;
    $lastItem = 2;

    $sut = new StackExample();

    $sut->push($firstItem);
    $sut->push($lastItem);
    $result = $sut->pop();

    $expected = [$lastItem];

    $this->assertEquals($expected, $result, self::TEST_ERROR_REMOVE_ITEM_STILL_PRESENT);
  }

  public function testShouldThrowExceptionIfStackIsEmptyOnPop()
  {
    $this->expectException(StackIsEmptyException::class);

    $sut = new StackExample();
    $sut->pop();
  }

  public function testShouldAssertTrueIfStackIsEmpty()
  {
    $sut = new StackExample();
    $result = $sut->isEmpty();

    $this->assertTrue($result);
  }

  public function testShouldAssertFalseIfStackHasItems()
  {
    $firstItem = 1;
    $sut = new StackExample();
    $sut->push($firstItem);
    $result = $sut->isEmpty();

    $this->assertFalse($result);
  }
}