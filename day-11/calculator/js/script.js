var btnElement = document.getElementById('btn');
btnElement.onclick = function () {
    var firstNameValue = document.getElementById('firstName').value;
    // alert(firstNameValue);
    var lastNameValue = document.getElementById('lastName').value;
    // alert(lastNameValue);
    var fullName =  firstNameValue+' '+lastNameValue;
    //alert(fullname);
    document.getElementById('fullName').value = fullName;

}