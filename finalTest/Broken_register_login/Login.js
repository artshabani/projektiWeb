var nameRegex = /^[A-Z][a-z]*/;
var passwordRegex = /^[A-Z][a-z]+\d{3}$/;

const Form = document.getElementById("form");
const username = document.getElementById("username");

const password = document.getElementById("password");

Form.addEventListener("submit", (e) => {
  e.preventDefault();

  checkInputs(); //metod e krijume ma posht kshyre
});

function checkInputs() {
  //
  const usernameValue = username.value;

  const passwordValue = password.value;

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

  //======================check per password==========================

  if (passwordValue === "") {
    setErrorFor(password, "Password required!");
  } else if (passwordValue.length < 8) {
    setErrorFor(password, "Password must contain 8 characters");
  } else {
    setSuccessFor(password);
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
