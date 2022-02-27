<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="AboutUs.css" />
  </head>

  <body onload="slider()">
    <div class="banner">
      <div class="slider">
        <img src="fotot/neeko.jpg" id="slideImg" />
      </div>
      <div class="overlay">
        <div class="content">
          <h1>About us</h1>
          <h3>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Necessitatibus voluptatibus, placeat animi nemo tempore, modi earum
            dolores ullam perferendis culpa sint saepe molestias quis eum dolore
            ut aperiam vero quibusdam!
          </h3>
          <div>
            <a href="Artworks.php"
              ><button type="button">Watch more</button></a
            >
            <a href="Register.php"
              ><button type="button" class="btn-2">Sign up</button></a
            >
          </div>
        </div>
      </div>
    </div>

    <div class="logo">
      <a href="HomePage.php"><img src="Logos/logo2.png" /></a>
    </div>

    <script>
      var slideImg = document.getElementById("slideImg");
      var images = new Array(
        "fotot/neeko.jpg",
        "fotot/seraphine.jpg",
        "fotot/ekko.png",
        "fotot/lux.png"
      );

      var len = images.length;
      var i = 0;

      function slider() {
        if (i > len - 1) {
          i = 0;
        }
        slideImg.src = images[i];
        i++;
        setTimeout("slider()", 3000);
      }
    </script>
  </body>
</html>
