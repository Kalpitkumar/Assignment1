function validateLogin() {
    var name = document.loginForm.username.value;
    var password = document.loginForm.password.value;

    if (name == "") {
        document.getElementById("name_error").innerHTML = "please, Enter Username !"
    } else {
        document.getElementById("name_error").innerHTML = ""
    }
    if (password == "") {
        document.getElementById("password_error").innerHTML = "please, Enter Password !"
    } else {
        document.getElementById("password_error").innerHTML = ""
    }

    if (name == "conestogac" && password == "c123") {
        window.location = "account.html";
        return false;
    } else {
        alert("Please Enter Username(conestogac) or Password(c123).");
        return false;
    }
}

function displayWelcomeMessage() {
    var today = new Date();
    var time = today.getHours();
    var message = "";

    if (time >= 0 && time <= 6) {
        message = "Have a Good Midnight!";
    }
    else if (time > 6 && time <= 11) {
        message = "Have a Good Morning!";
    }
    else if (time > 11 && time <= 17) {
        message = "Have a Good Afternoon!";
    }
    else if (time > 17 && time <= 22) {
        message = "Have a Good Evening!";
    }
    else {
        message = "Have a Good Night!";
    }


    document.getElementById("message").innerHTML = message;


}
