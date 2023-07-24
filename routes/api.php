<?php

use App\Http\Controllers\AlgorithmController;
use App\Http\Controllers\PalindromeController;
use App\Http\Controllers\RecursionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('factorial', [AlgorithmController::class, 'calculateFactorial']);
Route::get('palindrome', [PalindromeController::class, 'checkIfIsPalindrome']);
Route::get('recursion', [RecursionController::class, 'calculateFibonacci']);