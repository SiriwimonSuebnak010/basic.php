<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>เครื่องคิดเลข</title>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }
    .calculator {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .calculator input[type="text"] {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        font-size: 18px;
        text-align: right;
    }
    .calculator button {
        width: 48%;
        padding: 10px;
        margin: 5px;
        font-size: 18px;
        cursor: pointer;
    }
</style>
</head>
<body>

<div class="calculator">
    <input type="text" id="display" disabled>
    <br>
    <button onclick="appendToDisplay('1')">1</button>
    <button onclick="appendToDisplay('2')">2</button>
    <button onclick="appendToDisplay('3')">3</button>
    <br>
    <button onclick="appendToDisplay('4')">4</button>
    <button onclick="appendToDisplay('5')">5</button>
    <button onclick="appendToDisplay('6')">6</button>
    <br>
    <button onclick="appendToDisplay('7')">7</button>
    <button onclick="appendToDisplay('8')">8</button>
    <button onclick="appendToDisplay('9')">9</button>
    <button onclick="appendToDisplay('0')">0</button>
    <button onclick="operate('+')">+</button>
    <button onclick="operate('-')">-</button>
    <button onclick="operate('*')">*</button>
    <button onclick="operate('/')">/</button>
    <br>
    <button onclick="clearDisplay()">C</button>
    <button onclick="calculate()">=</button>
</div>

<script>
    function appendToDisplay(value) {
        document.getElementById('display').value += value;
    }

    function clearDisplay() {
        document.getElementById('display').value = '';
    }

    function operate(operator) {
        document.getElementById('display').value += operator;
    }

    function calculate() {
        let expression = document.getElementById('display').value;
        let result = eval(expression);
        document.getElementById('display').value = result;
    }
</script>

</body>
</html>