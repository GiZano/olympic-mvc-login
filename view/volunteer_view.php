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
    <title>Welcome Page - Milano-Cortina</title>
    <link rel="icon" type="image/svg" href="..\public\assets\icon.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="..\public\css\style.css" rel="stylesheet">
  </head>
  <body>
    
    <div class="bg-info container-fluid text-center pt-5 pb-5">
        <h1 class="title">Milano-Cortina Volunteer Portal</h1>
    </div>

    <div class="container mt-5 text-center">
        
        <h2 class="subtitle">Welcome <?= $_SESSION['logged_user']['username'] ?>!</h2>

        <br> 

        <a target="_blank" href="https://shop.olympics.com/en/milano-cortina-2026/milano-cortina-2026-paralympic-winter-games-poster-by-carolina-altavilla-50x70cm/t-35921216+p-46113627149668+z-8-3339894979"><img class="col-12 col-md-3" src="..\public\assets\volunteer-page.png" alt="Milano Cortina 2026 Paralympic Winter Games Poster by Carolina Altavilla"></a>

        <br><br><br>

        <h4 class="subtitle">Welcome to the official Milano-Cortina 2026 volunteer portal!</h4>

        <br>
        <a class="btn btn-danger mx-auto" href="./index.php?action=logout">Logout</a>
        <div class="container">


        </div>

      <br><br><br>

      © 2026 Giovanni Zanotti. All rights reserved.

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>