<html>
<body>
<?php

$id=$_POST['id'];
$cost=$_POST['cost'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travle";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$sql="update bookings set status ='confirm' where bookid='$id'";

if ($conn->query($sql)===TRUE) 
{
    $_SESSION['bookid']='$id';
    header('location: index2.php');
   
} 
else 
{
    echo "oops something went wrong";
    header('location: index3.php');
}

$conn->close();
?>
</body>
</html>
