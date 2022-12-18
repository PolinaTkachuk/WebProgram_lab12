<?php

namespace App\Services;

class Calculator
{
    const ADD = 'add';
    const SUBTRACT = 'subtract';
    const MULTIPLY = 'multiply';
    const DIVIDE = 'divide';
    const AVAILABLE_OPERATIONS = [self::ADD => '+', self::SUBTRACT => '-', self::MULTIPLY => '*', self::DIVIDE => '/'];

    public static float $firstNumber;
    public static float $secondNumber;
    public static string $operation;

    public static function formExpressionFromBound(): string
    {
        if (!self::isFilled()) {
            throw new \Exception(
                __CLASS__ . ' ' . __METHOD__ . ' | all values need to be filled before performing calculations!'
            );
        }
        return self::formExpression(self::$firstNumber, self::$secondNumber, self::$operation);
    }

    public static function formExpression(float $firstNumber, float $secondNumber, string $operation): string
    {
        $result = match ($operation) {
            self::ADD => $firstNumber + $secondNumber,
            self::SUBTRACT => $firstNumber - $secondNumber,
            self::MULTIPLY => $firstNumber * $secondNumber,
            self::DIVIDE => $secondNumber != 0 ? $firstNumber / $secondNumber : throw new \Exception(
                'Division by zero found!'
            ),
            default => throw new \Exception(__CLASS__ . ' ' . __METHOD__ . ' | unknown operation: ' . $operation)
        };
        return $firstNumber . ' ' . self::AVAILABLE_OPERATIONS[$operation] . ' ' . $secondNumber . ' = ' . $result;
    }

    protected static function isFilled(): bool
    {
        return (isset(self::$firstNumber) && isset(self::$secondNumber) && isset(self::$operation));
    }

    public static function getAvailableOperations(): array
    {
        return array_keys(self::AVAILABLE_OPERATIONS);
    }
}
