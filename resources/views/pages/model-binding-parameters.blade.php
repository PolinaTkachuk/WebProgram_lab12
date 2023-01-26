@extends('layout')

@section('content')
    <div class="content" id="calculator">
        <div class="col-md-12">
            <label class="form-label" for="firstNumber">Первое число</label>
            <input type="text" class="form-control" name="firstNumber" id="firstNumber">
        </div>

        <div class="col-md-12">
            <select class="form-control-list" name="operation" id="operation">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select>
        </div>

        <div class="col-md-12">
            <label class="form-label" for="secondNumber">Второе число</label>
            <input type="text" class="form-control" name="secondNumber" id="secondNumber">
        </div>

        <button onclick="fetchCalculation('model-binding-parameters')"> Submit
        </button>
    </div>
    <div class="content" id="result" style="visibility: hidden">
        <p id="resultExpression"></p>
    </div>
@endsection
