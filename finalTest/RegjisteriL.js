var nameRegex = /^[A-Z][a-z]*/;
var surnameRegex = /^[A-Z][a-z]*/;
var usernameRegex = /^[A-Za-z]\w{7,14}$/;
var emailRegex = /^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/;
var passwordRegex = /^[A-Z][a-z]+\d{3}$/;

var registerButton = document.getElementById("register");
var nameMsg = document.getElementById("nameMessage");
var surnameMsg = document.getElementById("surnameMessage");
var usernameMsg = document.getElementById("usernameMessage");
var emailMsg = document.getElementById("emailMessage");
var passwordMsg = document.getElementById("passwordMessage");

registerButton.addEventListener("click", function (event) {
  var name = document.getElementById("name").value;
  var surname = document.getElementById("surname").value;
  var email = document.getElementById("email").value;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (name == "") {
    nameMsg.innerText = "Enter a name";
    event.preventDefault();
  } else {
    if (nameRegex.test(name)) {
    } else {
      nameMsg.innerText = "Start with uppercase";
      event.preventDefault();
    }
  }
  if (surname == "") {
    surnameMsg.innerText = "Enter a surname";
    event.preventDefault();
  } else {
    if (surnameRegex.test(surname)) {
    } else {
      surnameMsg.innerText = "Start with uppercase";

      event.preventDefault();
    }
  }
  if (username == "") {
    usernameMsg.innerText = "Enter a Username";

    event.preventDefault();
  } else {
    if (usernameRegex.test(username)) {
    } else {
      usernameMsg.innerText = "Username must be 8 to 15 characters";

      event.preventDefault();
    }
  }
  if (email == "") {
    emailMsg.innerText = "Enter an email";

    event.preventDefault();
  } else {
    if (emailRegex.test(email)) {
    } else {
      emailMsg.innerText = "Enter a valid email";

      event.preventDefault();
    }
  }
  if (password == "") {
    passwordMsg.innerText = "Enter password";

    event.preventDefault();
  } else {
    if (passwordRegex.test(password)) {
    } else {
      passwordMsg.innerText = "Start with uppercase & End with 3 numbers";

      event.preventDefault();
    }
  }
});
