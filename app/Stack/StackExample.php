<?php

namespace App\Stack;

use App\Exceptions\StackIsEmptyException;

final class StackExample
{
  private array $stack = [];
  private int $top = -1;

  public function push(int $number): array
  {
    $this->stack[++$this->top] = $number;
    return $this->stack;
  }

  public function pop() {
    if($this->top < 0){
      throw new StackIsEmptyException();
    }

    array_shift($this->stack);
    
    return $this->stack;
  }

  public function isEmpty() {
    if( $this->top === -1 ) {
      return true;
    }

    return false;
  }
}