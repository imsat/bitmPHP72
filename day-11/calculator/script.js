var btnplus = document.getElementById('btn+');
var btnminus = document.getElementById('btn-');
var btnmul = document.getElementById('btn*');
var btndiv = document.getElementById('btn/');
btnplus.onclick = function () {
    var firstNumValue = document.getElementById('firstNumber').value;
    var secondNumValue = document.getElementById('secondNumber').value;
    var result =  firstNumValue+secondNumValue;
    document.getElementById('result').value = result;
}

btnmul.onclick = function () {
    var firstNumValue = document.getElementById('firstNumber').value;
    var secondNumValue = document.getElementById('secondNumber').value;
    var result =  firstNumValue*secondNumValue;
    document.getElementById('result').value = result;
}

btnminus.onclick = function () {
    var firstNumValue = document.getElementById('firstNumber').value;
    var secondNumValue = document.getElementById('secondNumber').value;
    var result =  firstNumValue-secondNumValue;
    document.getElementById('result').value = result;
}

btndiv.onclick = function () {
    var firstNumValue = document.getElementById('firstNumber').value;
    var secondNumValue = document.getElementById('secondNumber').value;
    var result =  firstNumValue/secondNumValue;
    document.getElementById('result').value = result;
}

