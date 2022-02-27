<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" media="screen" href="Register.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap"
      rel="stylesheet"
    />
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"
      integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Ubuntu:ital,wght@1,500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="logoo">
      <a href="HomePage.php"><img src="logos/logo2.png" /></a>
    </div>

    <div class="container">
      <div class="header">
        <h2>Create Account</h2>
      </div>
      <div>


<form action="registerconn.php" method="post" class="form">
  <h4>Register</h4>

    <input class="form-control" type="text" id="name" name="FName" placeholder="Enter your name!" required><br>
    <label for="name" id="nameMessage"></label><br>

    <input class="form-control" type="text" id="surname" name="SName" placeholder="Enter your surname!" required><br>
    <label for="surname" id="surnameMessage"></label><br>

    <input class="form-control" type="text" id="username" name="username" placeholder="Enter a username!" required><br>
    <label for="username" id="usernameMessage"></label><br>

    <input class="form-control" type="text" id="email" name="email" placeholder="Enter your email!" required><br>
    <label  for="email" id="emailMessage"></label><br>

    <input class="form-control" type="password" id="password" name="password" placeholder="Enter a password" required><br>
    <label for="password" id="passwordMessage"></label><br>



    <button class="button" role="button" id="register" value="register">SIGN UP</button>

    

</form>



</div>
    </div>

    <script src="RegjisteriL.js"></script>
  </body>
</html>
