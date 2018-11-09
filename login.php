<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <style>

    </style>
</head>
<body>

     <div class= "background-image"></div>
  <div class="container container1">
  <div class="row">
    <div class="col-lg-8 offset-lg-4">
    <form class="modal-content animate" method="post" action="login.php">
        <?php include('errors.php'); ?>
          <div class="imgcontainer">
              <img src="pic1.png" alt="Avatar" class="avatar">
          </div>
        
        <div class="input-group">
          <label for="uname"><b>E-mail</b></label>
          <input type="text" placeholder="Enter E-mail-id" name="uname" required>
        </div>
        <div class="input-group">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
        <div class="btn">
            <button type="submit" class="btn" name="login_user" >Login</button>
        </div>
      
        <p>
          <b>Not yet a member? <a href="register.php">Sign up</a></b>
        </p>
        </div>
    </form>
    </div>
    </div>
</div>
</div>
</body>
</html>