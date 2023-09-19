

<?php 


require_once("update.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User info</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.css">
</head>
<body>

     <div class="container-fluid">
      <div class="login-Page">
        <form action="" method="post" class="loginForm">
          <div class="loginTittle">Update Information</div>

            <div class="form-floating mb-3 mt-3" >


    <div id="updateDivsStyle" class="updateUsername">

        <div>
              <input
                id="updateUser"
                type="text"
                name="username"
                autocomplete="off"
                placeholder="Username"
              />
              <label for="username"></label>
            </div>

    </div>


    <div id="updateDivsStyle" class="updatePassword">

        <input
              id="updatePass"
              type="password"
              name="password"
              autocomplete="off"
              placeholder="Password"
            />
            <label for="password"></label>
    </div>


    <div id="updateDivsStyle" class="updateEmail">

        <input
              id="updateEmail"
              type="text"
              name="email"
              autocomplete="off"
              placeholder="Email"
            />
            <label for="email"></label>
          </div>

    </div>


    <div id="updateDivsStyle" class="updatePhone">

       
            <input
              id="updatePhone"
              type="text"
              name="phone"
              autocomplete="off"
              placeholder="Phone number"
            />
            <label for="phone"></label>
          
          </div>

    </div>


          <button type="submit" class="btnUpdate">Update</button>
          <!-- <input type="submit" name="update_button" value="Update"> -->
        </form>
      </div>
    </div>

    <script src="app.js"></script>
</body>
</html>  