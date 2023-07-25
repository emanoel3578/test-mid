<?php

namespace App\Http\Bank\Interfaces;

interface IBankAccount
{
  public function getBalance(): float;
}