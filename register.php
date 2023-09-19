<?php 

require_once("dbreg.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.css" />
    <title>Register Page</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="register-Page">
        <form action=""  method="post" class="registerForm" onsubmit="return  validateRegister()">
          <div class="registerTittle">Register</div>

          <div class="form-floating mb-3 mt-3">
            <div>
              <input
                id="registerUser"
                type="text"
                name="username"
                autocomplete="off"
                placeholder="Username"
              />
              <label for="username"></label>
            </div>

            <div>
            <input
              id="registerEmail"
              type="text"
              name="email"
              autocomplete="off"
              placeholder="Email"
            />
            <label for="email"></label>
          </div>

          <div>
            <input
              id="registerPhone"
              type="text"
              name="phone"
              autocomplete="off"
              placeholder="Phone number"
            />
            <label for="phone"></label>
          </div>

          <div>
            <input
              id="registerPass"
              type="password"
              name="password"
              autocomplete="off"
              placeholder="Password"
            />
            <label for="password"></label>
          </div>

          <button type="submit" class="btnRegister">Sign Up</button>
          <p class="registerLink">
            Already have an account? <a href="index.php">Sign In Here</a>
          </p>
        </form>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
