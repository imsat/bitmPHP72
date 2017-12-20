function checkFirstName() {
    var firstNameValue = $('#firstName').val();
    if(firstNameValue.length > 6 && firstNameValue.length <16){
        $('#firstNameError').text(' ');
        return true;
    }else{
        $('#firstNameError').text('First name should be 7 to 15 character');
        return false;
    }
};

function checkLastName() {
    var lastNameValue = $('#lastName').val();
    if(lastNameValue.length > 6 && lastNameValue.length <16){
        $('#lastNameError').text(' ');
        return true;
    }else{
        $('#lastNameError').text('Last name should be 7 to 15 character');
        return false;
    }
};
function checkEmailAddress() {
    var emailAddressValue = $('#email').val();
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-z0-9.-]+\.[a-zA-z]{3,3}$/i);
    if(pattern.test(emailAddressValue)){
        $('#emailError').text('');
        return true;
    }else{
        $('#emailError').text('Envalid Email Address!!');
        return false;
    }
};
function checkPassword() {
    var password = $('#password').val();
    if(password.length > 2){
        $('#passwordError').text(' ');
        return true;
    }else{
        $('#passwordError').text('Password should be 3 Character');
        return false;
    }
};

function checkConfirmPassword() {
    var password = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();
    if(password == confirmPassword){
        $('#confirmPasswordError').text(' ');
        return true;
    }else{
        $('#confirmPasswordError').text('Password Not Matched!!');
        return false;
    }
};
$('#showPassword').click(function () {
    if(this.checked){
        $('#password').attr('type', 'text');
    }else{
        $('#password').attr('type', 'password');
    }
});

function checkGender() {
    var genderValue = $('input[type="radio"]:checked').val();
    if(genderValue == "male"){
        $('#genderError').text('');
        return true;
    }else if (genderValue == "female"){
        $('#genderError').text('');
        return true;
    }else{
    $('#genderError').text('Please select Gender info');
}       return false;
    };
function checkDistrictName() {
    var districtNameValue = $('#districtName').val();
    if(districtNameValue == ' '){
        $('#districtNameError').text('Please Select a District Name');
        return false;
    }else{
        $('#districtNameError').text(' ');
        return true;
    }
};



$('#firstName').keyup(function () {
    checkFirstName();
});

$('#lastName').keyup(function () {
    checkLastName();
});

$('#email').keyup(function () {
    checkEmailAddress();
});

$('#password').keyup(function () {
    checkPassword();
});

$('#confirmPassword').keyup(function () {
    checkConfirmPassword();
});

// $('#btn').click(function () {
//     checkGender();
// });

$('#districtName').change(function () {
    checkDistrictName();
})




$('#testForm').submit(function () {
    if(checkFirstName() == true && checkLastName() == true && checkEmailAddress() == true && checkConfirmPassword() == true && checkGender() == true && checkDistrictName() == true){
        return true;
    }else{
        return false;
    }

});