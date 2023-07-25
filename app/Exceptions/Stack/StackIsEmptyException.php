<?php

namespace App\Exceptions\Stack;

use Exception;

class StackIsEmptyException extends Exception
{
  public final const EXCEPTION_MESSAGE = 'The stack is empty';
  public final const EXCEPTION_CODE = 500;

  public function __construct()
  {
    parent::__construct(self::EXCEPTION_MESSAGE, self::EXCEPTION_CODE);
  }
}