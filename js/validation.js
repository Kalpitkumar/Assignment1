function validateLogin(){
    var name=document.loginForm.username.value;  
    var password=document.loginForm.password.value; 

    if (name==""){
        document.getElementById("name_error").innerHTML="please, Enter Username !"
      }else{
        document.getElementById("name_error").innerHTML=""
    }
    if (password==""){  
        document.getElementById("password_error").innerHTML="please, Enter Password !"
      }else{
        document.getElementById("password_error").innerHTML=""
    }
    
    if(name=="Conestogac" && password=="c123")
    { 
        window.location = "account.html";
        return false;  
    }else{
        alert("Please Enter Username(Conestogac) or Password(c123).");
        return false;
    }
}  