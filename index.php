
<?php   


require_once("config.php");


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login form with PHP</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.css" />
  </head>
  <body>
    
    <div class="container-fluid">
      <div class="login-Page">
        <form action="" method="post" class="loginForm" onsubmit="return validateForm()">
          <div class="loginTittle">Login</div>

          <div class="form-floating mb-3 mt-3">
            <input
              id="loginEmail"
              type="text"
              name="email"
              autocomplete="off"
              placeholder="Email"
            />
            <label for="email"></label>
          </div>

          <div>
            <input
              id="loginPass"
              type="password"
              name="password"
              autocomplete="off"
              placeholder="Password"
            />
            <label for="password"></label>
          </div>

          <button type="submit" class="btnLog" >Sign In</button>
          <p class="registerLink">
            Don't have an account? <a href="register.php">Sign up Here</a>
          </p>
        </form>
      </div>
    </div>

    <script src="app.js"></script>
    
  </body>
</html>
