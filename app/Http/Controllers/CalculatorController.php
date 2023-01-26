<?php

namespace App\Http\Controllers;

use App\Services\Calculator;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CalculatorController extends Controller
{
    public function calculateBound()
    {
        return response()->json(['expression' => Calculator::formExpressionFromBound()]);
    }

    public function calculate(float $firstNumber, float $secondNumber, string $operation)
    {
        return response()->json(['expression' => Calculator::formExpression($firstNumber, $secondNumber, $operation)]);
    }

    public function calculateFromBody(Request $request)
    {
        try {
            $request->validate([
                'firstNumber' => 'bail|required|numeric',
                'secondNumber' => 'bail|required|numeric',
                'operation' => 'required|in:' . implode(',', Calculator::getAvailableOperations()),
            ]);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
        return response()->json(
            [
                'expression' => Calculator::formExpression(
                    $request->input('firstNumber'),
                    $request->input('secondNumber'),
                    $request->input('operation')
                )
            ]
        );
    }
}
