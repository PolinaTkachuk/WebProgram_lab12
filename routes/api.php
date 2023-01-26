<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/model-binding/{boundFirstNumber}/{boundSecondNumber}/{boundOperation}', [CalculatorController::class, 'calculateBound'])
    ->whereIn('boundOperation', \App\Services\Calculator::getAvailableOperations());

Route::get('/model-binding-parameters/{firstNumber}/{secondNumber}/{operation}', [CalculatorController::class, 'calculate'])
    ->whereIn('operation', \App\Services\Calculator::getAvailableOperations());

Route::get('/from-body', [CalculatorController::class, 'calculateFromBody']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
