function fetchCalculation(methodType) {
    $.ajax({
        method: 'GET',
        url: getUrl(methodType),
        dataType: 'json',
        success: function (data) {
            console.log(data);
            hideCalculator();
            displayResult(data.expression);
        },
        error: function (data) {
            console.log(data);
            alert('Error while fetching the calculation!');
        }
    });
}

function hideCalculator()
{
    document.getElementById('calculator').style.display = 'none';
}

function displayResult(expression)
{
    document.getElementById('result').style.visibility = 'visible';
    document.getElementById('resultExpression').innerText = expression;
}

function getUrl(methodType) {
    let slugOperations = new Map([
        ['+', 'add'],
        ['/', 'divide'],
        ['*', 'multiply'],
        ['-', 'subtract'],
    ])
    let baseUrl = location.protocol + '//' + location.host;
    let firstNumber = document.getElementById('firstNumber').value;
    let secondNumber = document.getElementById('secondNumber').value;
    let operation = slugOperations.get(document.getElementById('operation').value);
    switch (methodType) {
        case 'model-binding':
            return baseUrl + '/api/model-binding/' + firstNumber + '/' + secondNumber + '/' + operation;
        case 'model-binding-parameters':
            return baseUrl + '/api/model-binding-parameters/' + firstNumber + '/' + secondNumber + '/' + operation;
        case 'manual':
            return baseUrl + '/api/from-body' + '?firstNumber=' + firstNumber + '&secondNumber=' + secondNumber + '&operation=' + operation;
        default:
            alert('Unknown method type!');
    }
}
