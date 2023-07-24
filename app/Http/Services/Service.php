<?php

namespace App\Http\Services;

abstract class Service
{
  private array $data;

  public function setData(array $data): self
  {
      $this->data = $data;

      return $this;
  }

  public function getDataToResponse(): array
  {
      return [];
  }

  protected function getData(string $key): mixed
  {
      return $this->data[$key];
  }

  abstract public function run(): void;
}