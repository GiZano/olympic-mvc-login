<!--

    ********************************************
    *                                          *
    * MVC - VIEW                               *
    * Project: Volunteer Milano-Cortina Portal *
    * Author: GiZano                           *
    *                                          *
    ********************************************

-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Milano-Cortina</title>
    <link rel="icon" type="image/svg" href="..\public\assets\icon.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="..\public\css\style.css" rel="stylesheet">
  </head>
  <body>

    <div class="bg-info container-fluid text-center pt-5 pb-5">
        <h1 class="title">Milano-Cortina Volunteer Portal</h1>
    </div>

    <div class="container mt-5 text-center">
        

        <?php

            finishMessage();

            if( isset($_SESSION['message']) ){
                echo '<br>';
                echo $_SESSION['message'] . '</p>';
            }

        ?>

        <!-- Login Form Card -->
    
        <div id="login" class="card col-12 col-md-3 m-auto text-center mt-5">
            <a href="https://shop.olympics.com/en/milano-cortina-2026/milano-cortina-2026-olympic-winter-games-poster-by-olimpia-zagnoli-50x70cm/t-80254572+p-80443683924993+z-8-4074408053" target="_blank"><img src="..\public\assets\login-card.png" class="card-img-top" alt="Milano Cortina 2026 Olympic Winter Games Poster by Olimpia Zagnoli"></a>
            <div class="card-body">
                <h2 class="card-title login-title">Login</h2>
                <br>
                <form action="index.php" method="POST">
                    <input type="text"     name="username" placeholder="username" required value="<?= $username ?>">
                    <br><br>
                    <input type="password" name="password" placeholder="password" required>
                    <br><br>
                    <input type="hidden"   name="action"   value="login">
                    <input type="submit"   value="Log In"  class="btn btn-primary">
                </form>
            </div>
        </div>

        <br>

        <h4>Want to join the volunteering team? Register <em><a href="#register">Here!</a></em></h4>

        <br><br><br>
        <hr>
        <br>
        
        <!-- Registration Form Card -->

        <div id="register" class="card col-12 col-md-3 m-auto text-center">
            <a href="https://shop.olympics.com/en/milano-cortina-2026/milano-cortina-1956-2026-olympics-anniversary-poster-by-pierpaolo-rovero-50x70cm/t-13695650+p-579947744326309+z-9-94122450" target="_blank"><img src="..\public\assets\registration-card.png" class="card-img-top" alt="Milano Cortina 1956-2026 Olympics Anniversary poster By Pierpaolo Rovero"></a>
            <div class="card-body">
                <h2 class="card-title registration-title">Registration</h2>
                <br>
                <form action="index.php" method="POST">
                    <input type="text"     name="username"  placeholder="username" required>
                    <br>
                    <input type="password" name="password"  placeholder="password" required>
                    <br><br>
                    <input type="hidden"   name="action"    value="register">
                    <input type="submit"   value="Register" class="btn btn-primary">
                </form>
            </div>
        </div> 
        
        <br><br><br><br>

        © 2026 Giovanni Zanotti. All rights reserved.

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>