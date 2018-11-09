<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'travle');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['cname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
  $password_1 = mysqli_real_escape_string($db, $_POST['psw']);
  $password_2 = mysqli_real_escape_string($db, $_POST['psw-repeat']);

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
 $user_check_query = "SELECT * FROM customers WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

  if ($username) { 
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }  


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query ="INSERT INTO `customers` ()
      VALUES ('$aadhar', '$username', '$phone', '$password_1', '$email')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    header('location: login.php');
    
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['uname']);
  $password = mysqli_real_escape_string($db, $_POST['psw']);

  if (count($errors) == 0) {
  //	$password = md5($password);
  	$query = "SELECT email, pswd FROM customers WHERE email='$email' AND pswd='$password' ";
    $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) 
        {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";
          header('location: index2.php');
        }
        else 
        {
          array_push($errors, "Wrong username/password combination");
        } 
  }
}

//booking
/*if (isset($_POST['btnn'])) {

  $city=mysqli_real_escape_string($db, $_POST['city']);
  $_SESSION['source'] = $city;
  header('location: package.php');
} */


/*if (isset($_POST['btnn'])) {
                  
  $city=mysqli_real_escape_string($db, $_POST['city']);

  $_SESSION['city']= $city;

   $sql= "SELECT * FROM packages WHERE source= '$city';";
   $results = mysqli_query($db, $sql);
   if (mysqli_num_rows($results) > 0)
   {
       while($row= mysqli_fetch_assoc($results))
       {
           echo  "<tr><td>" . $row["pkgno"] ."</td><td>". $row["source"] ."</td><td>" .$row["destination"] ."</td><td>" .$row["fare"] . "</td></tr>";
       }
       echo "</table>"; 
       
      $city=mysqli_real_escape_string($db, $_POST['city']);
      $_SESSION['source'] = $city;
      header('location: hotel.php');

   }            

   else{
       array_push($errors, "Please enter valid city");
   }
}
 */
mysqli_close($db);

?>