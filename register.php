 <?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  
</head>
<body>

  <div class= "background-image"></div>

  <div class="container container1 ">
  <div class="row">
    <div class="col-lg-8 offset-lg-2">
    <form class="modal-content animate" method="post" action="register.php">
        <?php include('errors.php'); ?>
        <h1>Sign Up</h1>
        <hr>
        <div class="input-group">
          <label for="email"><b>Email</b></label>
          <input type="email" placeholder="Enter Email" name="email" required>

          </div>
          
        <div class="input-group">
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter FullName" name="cname" required>
        </div>
          
        <div class="input-group">
          <label for="phone"><b>Phone</b></label>
          <input type="tel" placeholder="Enter Phone no." name="phone" required>
        </div>
          
        <div class="input-group">
          <label for="aadhar"><b>Aadhar</b></label>
          <input type="text" placeholder="Enter Aadhar no." name="aadhar" required>
                  
        </div>
        
        <div class="input-group">
        <label for="psw" ><b>Password</b></label>
        <input type="password" id="psw" placeholder="Enter Password" name="psw" required>         
        </div>

        <div class="input-group">
        <label for="psw-repeat" ><b>Confirm Password</b></label>
        <input type="password" id="pswrpt" placeholder="Confirm Password" name="psw-repeat" required>
        </div>
        
        <div class="btn">
          <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        
        <p>
          <b>Already a member? <a href="login.php">Sign in</a> </b>
        </p>
      </form>
</div>
    </div>
</div> 
</body>
</html>