<?php


include('description.php');


?>


<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel='stylesheet' type='text/css' media='screen' href='Artworks.css'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"
        integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Ubuntu:ital,wght@1,500&display=swap"
        rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='Artworks.css'>

</head>

<body>

    <header class="headeri">



        <nav>

            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">

                <i class="fas fa-bars "></i>

            </label>

            <a href="HomePage.php"><label class="drkart">DRK ART</label></a>

            <ul class="lista">
                <li><a href="HomePage.php">Home</a></li>
                <li><a class="active" href="#">Artworks </a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="Register.php">Sign up</a></li>
                <li><a href="AboutUs.php">About Us</a></li>
            </ul>

        </nav>




    </header>


    <section>

        <div class="kategorite">

            <ul class="art">
                <a href="Sketches.php">
                    <li>Sketches</li>
                </a>

                <li><a href="Artworks.php"><img src="Logos/logo2.png"></a></li>

                <a href="DigitalArt.php">
                    <li>Digital Art</li>
                </a>


            </ul>

        </div>



        <div class="container">

            <div class="phcontainer">
                <?php
                foreach($artworks as $result){
                
                ?>
                
                <div class="img">   

                    <img class="image" src="<?php echo $result['profile_image']; ?>" href="#">
                    <div class="image__overlay image__overlay--blur">

                        <div class="image__title"><?php echo $result['name']; ?></div>
                        <p class="image__description"><?php echo $result['description']; ?></p>

                    </div>

                    <div class="views">
                        <p><?php echo $result['views']; ?> views</p>
                        <p><?php echo $result['likes']; ?> likes</p>

                    </div>

                </div>
                <?php } ?>
            </div>

            <div class="pagebuttons">

                <a href="#"><button class="active">1</button></a>
                <a href="Artworks2.php"><button>2</button></a>


            </div>

            <div class="credits">

                <div>

                    <p>Credits: Anisa Berjani and Art Shabani</p>

                </div>

            </div>


    </section>

    <footer>

        <div class="footer-content">
            <h3>Follow Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et quisquam alias aperiam quod similique.</p>
            <ul class="social">
                <li><img src="fotot/pinterest-logo.png"></li>
                <li><img src="fotot/instagram-logo.png"></li>
                <li><img src="fotot/simple-twitter-logo-in-circle.png"></li>
                <li><img src="fotot/facebook-icon.png"></li>
            </ul>
        </div>

        <div class="footer-bottom">
            <p>Legal Disclaimer <br>@2022 DrkArt</p>
        </div>

    </footer>


</body>

</html>