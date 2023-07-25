<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDataRequest;

class FormController extends Controller
{
  public function index()
  {
    return view('form');
  }

  public function store(FormDataRequest $request)
  {
    return redirect('form')->with('status', 'Form data has been saved');
  }
}