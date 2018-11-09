
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Title</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
    body{
            box-sizing: border-box;
            padding: 0%;
            margin: auto;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-weight: 700;
            font-family: "Roboto Slab", serif;
            text-shadow: 0 2px 2px rgba(211, 63, 63, 0.966);
            overflow-x: hidden;
            
    }

    .background-image 
    {
        position:fixed;
        background-image: url('pic6.jpg');
        left: 0;
        right: 0;
        z-index: -1;
        display: block;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 800px;
        width: 100%;
        height: 100%;
        filter: blur(1px);
  }

     .part{
         position:absolute;
         top:15%;
         left:15%;
         margin:auto;
         overflow-x:hidden;
     }  

    .container1, .container2 {
        z-index: 1;
        border:1px solid rgb(0, 0, 0) !important;
        background: linear-gradient(-39deg, rgb(0, 204, 255), rgb(197, 137, 221)) !important;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.671), 0 6px 20px 0 rgba(0, 0, 0, 0.678);
        padding:20px;
        margin: 28px;
        }

    input{
            display:block;
            border:none;
            border-radius:20px;
            color:#353535;
            padding:9px;
            margin:15px;
            text-align:center;
        }

    .clearfix{
        z-index: 9999;
        position:absolute;
        top:400px;
        left:40%;
    }

    button{
        color: black;
        background: rgb(228, 72, 44);
        padding: 20px;
        margin:20px;
        border:none;
        outline:none;
        cursor:pointer;
        border-radius: 20px;
        position:relative;
        left:30%;
    }

    .input .inp{
            background:rgb(204, 198, 198);
            cursor: not-allowed;
        }

    @media(max-width:400px)
    {
        form {
        width:50%;
        }

        .container1, .container2 {
            width:100%;
        }

        .part{
            left:8px;
            
        }

        .container1, .container2 {
            margin:5% auto 10% auto;
        }
        
    }

    

</style>
<body>

   
   <div class= "background-image"></div>
        
        <form  class="input" method="post" action="final.php">
        <div class="container part">
                <div class="row">
                        <div class="col-md-4 container1 ">
                            <label for="hotel id"><b>Hotel Id</b></label>
                            <input type="text" class="inp" name="Hotelid" value="<?php echo @$_hotel; ?>"required readonly>
    
                            <label for="phone"><b>Phone</b></label>
                            <input type="tel" placeholder="Enter Phone no." name="phone" required >
     
                            <label for="package no"><b>Package number</b></label>
                            <input type="text" class="inp" name="aadhar" value="<?php echo @$_pkgg; ?>" required readonly>
                        </div>

                        <div class="col-md-4 container2">
                            <label for="Date"><b>Date</b></label>
                            <input type="date" name="date" required>
            
                            <label for="ppl"><b>Number of People</b></label>
                            <input type="number" placeholder="Enter no. of Adults" name="psw-repeat" required>

                            <label for="days"><b>Number of days</b></label>
                              <input type="number" name="remember" placeholder="Enter no. of Days">
                        
                        </div>

                <div class="col-lg-12">
                    <button type="submit" class="signupbtn" name="sub"><b>Submit</b></button>
                </div>
        </div>

        </div>        
        </form> 
        
        <?php 
                 
                 $username = "";
                 $email    = "";
                 $errors = array(); 
   
                 // connect to the database
                 $db = mysqli_connect('localhost', 'root', '', 'travle');
                
   
                 if (isset($_POST['btnn'])) {
                     
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
   
                     }            
   
                     else{
                         array_push($errors, "Please enter valid city");
                     }
                 }
   
                 mysqli_close($db);
               ?> 
</body>
</html>