<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" media="screen" href="Login.css" />
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
        <form action="LoginValidation.php" method="post"> 
            <h1 class="h1R" style="margin-left:110px">LOGIN</h1>

            <input class="inputAcc" type="text" name="username" id="username" placeholder="Enter a Username!" required><br>
            <label for="username" id="usernameMessage"></label><br>

            <input class="inputAcc" type="password" name="password" id="password" placeholder="Enter a Password" required><br>
            <label for="password" id="passwordMessage"></label><br>

            <button style="margin-left:120px;"class="button-1" role="button" name="submit" id="register" value = "Login">Login</button>
            <a href="Register.php"><p style="margin-left: 5px; margin-top: 20px;">Create an Account?</a></p>
        </form>
                    
</div>

    </div>

    <script src="Logini.js"></script>
  </body>
</html>
