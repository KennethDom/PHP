<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1 align="center">Calculadora</h1>
    <form name = "calculator" >
        <table align="center">
            <tr>
                <td colspan="4"><input class="res" type="textfield" name="ans" value=""></td>
            </tr>
            <tr>
                <td><input class="num" type="button" value="7" onClick="document.calculator.ans.value += '7'"></td>
                <td><input class="num" type="button" value="8" onClick="document.calculator.ans.value += '8'"></td>
                <td><input class="num" type="button" value="9" onClick="document.calculator.ans.value += '9'"></td>
                <td><input class="num" type="button" value="-" onClick="document.calculator.ans.value += '-'"></td>
            </tr>
            <tr>
                <td><input class="num" type="button" value="4" onClick="document.calculator.ans.value += '4'"></td>
                <td><input class="num" type="button" value="5" onClick="document.calculator.ans.value += '5'"></td>
                <td><input class="num" type="button" value="6" onClick="document.calculator.ans.value += '6'"></td>
                <td><input class="num" type="button" value="+" onClick="document.calculator.ans.value += '+'"></td>
            </tr>
            <tr>
                <td><input class="num" type="button" value="3" onClick="document.calculator.ans.value += '3'"></td>
                <td><input class="num" type="button" value="2" onClick="document.calculator.ans.value += '2'"></td>
                <td><input class="num" type="button" value="1" onClick="document.calculator.ans.value += '1'"></td>
                <td><input class="num" type="button" value="*" onClick="document.calculator.ans.value += '*'"></td>
            </tr>
            <tr>
                <td><input class="num" type="button" value="0" onClick="document.calculator.ans.value += '0'"></td>
                <td><input class="num" type="button" value="." onClick="document.calculator.ans.value += '.'"></td>
                <td><input class="num" type="button" value="="onClick="document.calculator.ans.value = eval(document.calculator.ans.value)"></td>
                <td><input class="num" type="button" value="/" onClick="document.calculator.ans.value += '*'"></td>
                <td><input type="reset" value="Del"></td>
            </tr>
        </table>
    </div>
</body>
</html>