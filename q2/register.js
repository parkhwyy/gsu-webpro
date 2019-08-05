function sendReqForSignup() {
    var email = document.getElementById("email").value;
    var fullName = document.getElementById("fullName").value;
    var password = document.getElementById("password").value;
    var passwordConfirm = document.getElementById("passwordConfirm").value;
    
    if (password != passwordConfirm) {
        var responseDiv = document.getElementById('ServerResponse');
        responseDiv.style.display = "block";
        responseDiv.innerHTML = "<p>Password does not match.</p>";
        return;
    }
    
    var xhr = new XMLHttpRequest();
    xhr.addEventListener("load", signUpResponse);
    xhr.responseType = "json";
    xhr.open("POST", '/users/register');
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.send(JSON.stringify({
        email: email,
        fullName: fullName,
        password: password
    }));
}
    
function signUpResponse() {
// 200 is the response code for a successful GET request
    if (this.status === 201) {
        if (this.response.success) {
            // Change current location to the signin page.
            window.location = "index.html";
        } else {
            responseHTML += "<ol class='ServerResponse'>";
            for (key in this.response) {
            responseHTML += "<li> " + key + ": " + this.response[key] + "</li>";
            }
            responseHTML += "</ol>";
        }
    } else {
        // Use a span with dark red text for errors
        responseHTML = "<span class='red-text text-darken-2'>";
        responseHTML += "Error: " + this.response.error;
        responseHTML += "</span>"
    }

    // Update the response div in the webpage and make it visible
    responseDiv.style.display = "block";
    responseDiv.innerHTML = responseHTML;
}
    
function errorCheck() {

    let fullNameInput = document.getElementById("fullName");
    let emailInput = document.getElementById("email");
    let passwordInput = document.getElementById("password");
    let confirmPassword = document.getElementById("passwordConfirm");

    let emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
    let pwdLowerReg = /[a-z]+/;
    let pwdUpperReg = /[A-Z]+/;
    let pwdNumReg = /.*\d.*/;


    let error = false;
    let updateDiv = document.getElementById("formErrors");
    let outputString = '<ul><br>';

    if (fullNameInput.value.length >= 1) {
        fullNameInput.classList.remove("error");
        fullNameInput.style.border = "1px solid #AAA"
    } else {
        fullNameInput.classList.add("error");
        fullNameInput.style.border = "2px solid red"
        error = true;
        outputString += "<li>Missing full name.</li><br>";
    }

    if (emailReg.test(emailInput.value)) {
        emailInput.classList.remove("error");
        emailInput.style.border = "1px solid #AAA"
    } else {
        emailInput.classList.add("error");
        emailInput.style.border = "2px solid red"
        outputString += "<li>Invalid or missing email address.</li><br>";
        error = true;
    }

    if (passwordInput.value.length >= 10 && passwordInput.value.length <= 20) {
        passwordInput.classList.remove("error");
        passwordInput.style.border = "1px solid #AAA"
    } else {
        outputString += "<li>Password must be between 10 and 20 characters.</li><br>";
        passwordInput.classList.add("error");
        passwordInput.style.border = "2px solid red"
        error = true;
    }

    if (pwdLowerReg.test(passwordInput.value)) {
        passwordInput.classList.remove("error");
        passwordInput.style.border = "1px solid #AAA"
    } else {
        outputString += "<li>Password must contain at least one lowercase character.</li><br>";
        passwordInput.classList.add("error");
        passwordInput.style.border = "2px solid red"
        error = true;
    }

    if (pwdUpperReg.test(passwordInput.value)) {
        passwordInput.classList.remove("error");
        passwordInput.style.border = "1px solid #AAA"
    } else {
        outputString += "<li>Password must contain at least one uppercase character.</li><br>";
        passwordInput.classList.add("error");
        passwordInput.style.border = "2px solid red"
        error = true;
    }

    if (pwdNumReg.test(passwordInput.value)) {
        passwordInput.classList.remove("error");
        passwordInput.style.border = "1px solid #AAA"
    } else {
        outputString += "<li>Password must contain at least one digit.</li><br>";
        passwordInput.classList.add("error");
        passwordInput.style.border = "2px solid red"
        error = true;
    }

    if (passwordInput.value != confirmPassword.value) {
        outputString += "<li>Password and confirmation password don't match.</li>";
        confirmPassword.classList.add("error");
        confirmPassword.style.border = "2px solid red"
        error = true;
    } else {
        confirmPassword.classList.remove("error");
        confirmPassword.style.border = "1px solid #AAA"
    }

    if (confirmPassword.value.length >= 1) {
        confirmPassword.classList.remove("error");
        confirmPassword.style.border = "1px solid #AAA"
    } else {
        confirmPassword.classList.add("error");
        confirmPassword.style.border = "2px solid red"
    }

    if(error == false) {
        document.getElementById("signup").disabled = false;
    }else{
        document.getElementById("signup").disabled = true;
    }

    outputString += "</ul><br>";
    updateDiv.innerHTML = outputString;

    if (error) {
        document.getElementById("formErrors").style.display = "block";
    } else {
        document.getElementById("formErrors").style.display = "none";
    }

    return error;

}
    
function submit() {
    if (errorCheck() == false){
        sendReqForSignup();
    }  
}

function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('passwordConfirm');

    if(pass1.value != pass2.value){
        $('#regBtn').prop('disabled', true);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("signup").addEventListener("click", submit);
    document.getElementById("formErrors").style.display = "none";
});