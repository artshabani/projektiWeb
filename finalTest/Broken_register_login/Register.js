var nameRegex = /^[A-Z][a-z]*/;
var surnameRegex = /^[A-Z][a-z]*/;
var usernameRegex = /^[A-Za-z]\w{7,14}$/;
var emailRegex = /^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/;
var passwordRegex = /^[A-Z][a-z]+\d{3}$/;

const Form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");

Form.addEventListener("submit", (e) => {
  e.preventDefault();

  checkInputs(); //metod e krijume ma posht kshyre
});

function checkInputs() {
  //
  const usernameValue = username.value;
  const emailValue = email.value;
  const passwordValue = password.value;
  const password2Value = password2.value;

  //======================check per username==========================

  if (usernameValue === "") {
    setErrorFor(username, "Username cannot be blank"); //setError metod e krijume ma posht kshyre
  } else if (usernameValue.length < 3) {
    setErrorFor(username, "Username should contain 3+ characters");
  } else if (nameRegex.test(usernameValue)) {
    setSuccessFor(username); // setSucces metod e krijume ma posht kshyre
  } else {
    setErrorFor(username, "Username not valid");
  }

  //======================check per email=============================

  if (emailValue === "") {
    setErrorFor(email, "Email required");
  } else if (emailRegex.test(emailValue)) {
    setSuccessFor(email);
  } else {
    setErrorFor(email, "Email not valid");
  }

  //======================check per password==========================

  if (passwordValue === "") {
    setErrorFor(password, "Password required!");
  } else if (passwordValue.length < 8) {
    setErrorFor(password, "Password must contain 8 characters");
  } else {
    setSuccessFor(password);
  }

  //======================check per password2==========================

  if (password2Value === "") {
    setErrorFor(password2, "Password confirmation required!");
  } else if (passwordValue !== password2Value) {
    setErrorFor(password2, "Passwords do not match!");
  } else {
    setSuccessFor(password2);
  }

  //===================================================================
}

/*Qeky funksion ja shton classes '.form-control'  'error'-in dmth e bon trigger at
stilin prej css qe e kemi bo met kuqe, perveq ksa e zgedh ti cfar mesazhi
 po don met dal met kuqe (error)
*/

function setErrorFor(input, message) {
  const formControl = input.parentElement; //n'qet var ruhet parenti i inputit p.sh id='username' e ka parent  classen='.form-control', dmth nqet var ruhet .form-control

  const small = formControl.querySelector("small"); // n'qet var ruhet smalli, se prej varit formControl(qe eshte e rujtt formcontrola) e selekton itemin small(qe osht aj teksti i kuq)

  small.innerText = message; //qetu ja qon mesazhin qe e shkrujm si input te small-i (teskti met kuqe)

  formControl.className = "form-control error"; //edhe qetu ja shton klases .form-control error-in
}

//=================================================================

/*Qeky funksion ja shton classes '.form-control'  'successin'-in  
edhe dmth bohet trigger aj stili prej css qe e kemi bo met gjelbert
*/

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control success"; //Qetu ja shton varit klases .form-control success-in
}

//=================================================================
