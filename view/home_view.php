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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">

        <h1>Milano-Cortina Volunteer Portal</h1>

        <?php

            finishMessage();

            if( isset($_SESSION['message']) ){
                echo '<br>';
                echo $_SESSION['message'] . '</p>';
            }

        ?>

        <h2>Login</h2>

        <br>

        <form action="index.php" method="POST">
            <input type="text"     name="username" placeholder="username" required>
            <br>
            <input type="password" name="password" placeholder="password" required>
            <br><br>
            <input type="hidden"   name="action"   value="login">
            <input type="submit"   value="Log In"  class="btn btn-primary">
        </form>

        <br>
        <hr>
        <br>
        

        <h2>Registration</h2>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>