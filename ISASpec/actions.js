function myLogin()
{
//$("submit" ).click();
var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
var username = document.getElementById("uname").value;
var password = document.getElementById("psw").value;

    if(username == "user" && password == "user"){
    alert ("Login successfully");
    window.location = "LoggedIn.html"; // Redirecting to other page.
    return false;
    }
else{
    alert("Wrong password!");
    attempt --;// Decrementing by one.
    alert("You have left "+attempt+" attempt;");
    // Disabling fields after 3 attempts.
    if(attempt == 0){
    document.getElementById("uname").disabled = true;
    document.getElementById("psw").disabled = true;
    document.getElementById("submit").disabled = true;
    return false;
    }
    }
}



