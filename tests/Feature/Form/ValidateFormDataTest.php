<?php

namespace Tests\Feature\Form;

use Tests\TestCase;

class ValidateFormDataTest extends TestCase
{
  public function testShouldntHaveAnyErrorsOfValidationOnRequests()
  {
    $response = $this->json('POST' , '/store-form', [
      'name' => 'testName',
      'email' => 'emailtest@test.com',
      'subject' => 'subjecttest',
      'message' => 'messagetest'
      ]
    );

    $response->assertRedirect();
  }

  public function testShouldHaveNameRequiredValidationError()
  {
    $response = $this->json('POST' , '/store-form', [
      'email' => 'emailtest@test.com',
      'subject' => 'subjecttest',
      'message' => 'messagetest'
      ]
    );

    $response->assertStatus(422);
    $response->assertJsonValidationErrorFor('name');
  }

  public function testShouldHaveValidationErrorForSubjectWithSpecialCharacters()
  {
    $response = $this->json('POST' , '/store-form', [
      'name' => 'nameTest',
      'email' => 'emailtest@test.com',
      'subject' => 'subjecttest@1234@3124$%%!',
      'message' => 'messagetest'
      ]
    );

    $response->assertStatus(422);
    $response->assertJsonValidationErrorFor('subject');
  }
}