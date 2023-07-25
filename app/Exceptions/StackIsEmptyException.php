<?php

namespace App\Exceptions;

use Exception;

class StackIsEmptyException extends Exception
{
  public final const STACK_IS_EMPTY_EXCEPTION = 'The stack is empty';
  public final const STACK_IS_EMPTY_EXCEPTION_CODE = 500;

  public function __construct()
  {
    parent::__construct(self::STACK_IS_EMPTY_EXCEPTION, self::STACK_IS_EMPTY_EXCEPTION_CODE);
  }
}