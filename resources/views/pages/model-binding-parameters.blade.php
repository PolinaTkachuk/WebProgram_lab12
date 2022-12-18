@extends('layout')

@section('content')
    <div class="content" id="calculator">
        <div class="col-md-12">
            <label class="form-label" for="firstNumber">Первое число</label>
            <input type="text" class="form-control" name="firstNumber" id="firstNumber">
        </div>
        <div class="col-md-12">
            <label class="form-label" for="secondNumber">Второе число</label>
            <input type="text" class="form-control" name="secondNumber" id="secondNumber">
        </div>
        <div class="col-md-12">
            <label class="form-label" for="operation">Операция</label>
            <input type="text" class="form-control" name="operation" id="operation">
        </div>
        <button onclick="fetchCalculation('model-binding-parameters')"> Submit
        </button>
    </div>
    <div class="content" id="result" style="visibility: hidden">
        <p id="resultExpression"></p>
    </div>
@endsection
