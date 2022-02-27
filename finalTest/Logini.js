var usernameRegex = /^[A-Za-z]\w{7,14}$/;
var passwordRegex = /^[A-Z][a-z]+\d{3}$/;

var registerButton = document.getElementById("register");
var usernameMsg = document.getElementById("usernameMessage");
var passwordMsg = document.getElementById("passwordMessage");

registerButton.addEventListener("click",function(event){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;


       if(username == ""){
        usernameMsg.innerText = "Enter a Username"
        
        event.preventDefault();
        }
        else{
            if(usernameRegex.test(username)){
            }else{
                usernameMsg.innerText = "Username must be 8 to 15 characters"
                
                event.preventDefault();
            }
        }
            if(password == ""){
                passwordMsg.innerText = "Enter password"
                
                event.preventDefault();
            }
            else{
                if(passwordRegex.test(password)){
            }else{
                    passwordMsg.innerText = "Start with uppercase & End with 3 numbers"

                    event.preventDefault();
                }
            }

        
})