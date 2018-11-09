
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="main.js"></script>
    <style>
        
        body{
            position: relative;
            box-sizing: border-box;
            padding: 0%;
            margin: auto;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-weight: 700;
            font-family: "Roboto Slab", serif;
            text-shadow: 0 2px 2px rgba(252, 0, 0, 0.966);
            width:100%;
            height: auto;
        }

        .background-image {
        position:fixed;
        background-image: url('pic7.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        left: 0;
        right: 0;
        z-index: -1;
        display: block;
        width: 100%;
        height: 100%;
        filter: blur(1px);
    }

        .container1, .container2 {
        z-index: 1;
        border:1px solid rgb(0, 0, 0) !important;
        background: linear-gradient(-39deg, rgb(0, 204, 255), rgb(197, 137, 221)) !important;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.671), 0 6px 20px 0 rgba(0, 0, 0, 0.678);
        padding:20px;
        margin: 28px;;
        }
       

        .check_status{
              text-align: center;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.671), 0 6px 20px 0 rgba(0, 0, 0, 0.678);
              border:1px solid rgb(83, 198, 233);
              background: linear-gradient(-39deg, rgb(0, 204, 255), rgb(231, 136, 250));
              margin:30px;
              padding:80px 0;
        }

        .check_status h3{
            padding:10px;
            margin:10px;
        }

        .check_status form input{
            padding:10px;
            margin-bottom: 20px;
            

        }

        .check_status button{
            padding:20px;
            color:black;
            background-color: aqua;
            border: none;
            border-radius: 20px;


        }

        .choose_city{
              text-align: center;
              border:1px solid rgb(83, 198, 233);
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.671), 0 6px 20px 0 rgba(0, 0, 0, 0.678);
              background: linear-gradient(-39deg, rgb(0, 204, 255), rgb(231, 136, 250));
              margin:30px;
              padding:80px 0;
        }

        .choose_city h3{
            padding:10px;
            margin:10px;
        }

        .choose_city form input{
            padding:10px;
            margin-bottom: 20px;
            

        }

        .choose_city button{
            padding:20px;
            color:black;
            background-color: aqua;
            border: none;
            border-radius: 20px;

        }

        button:hover{
            color:black;
            background-color: rgb(17, 247, 197);
            cursor: pointer;
        }
         
       /* input[type="text"]:focus, #city-style:focus{
            transition: 0.6s ease-out;
            padding: 16px;
            font-size: 15px;
            color:black;
            border:none;
            border-radius: 10px;
        }

        .city{

        } */

        .popup {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

       

    </style>
</head>
<body>


         <div class= "background-image"></div>
    <div class="container">
        <div class="row">
        <div class="col-md-4 check_status">
                    <h3>Check Status</h3>
                    <form action="">
                        <input type="text" placeholder="Enter Booking_id" name="book_id">
                    </form>
                    <button type="submit">Check</button>
                
        </div>

            <div class="col-md-4 choose_city">
                    <h3>New Booking</h3>
                    <form  method="post" action="package.php">
                        <input id="city-style" list="city" name="city" placeholder="Enter source city">
                            <datalist id="city">
                            <option value="Bangalore">
                            <option value="Delhi">
                            <option value="Kolkata">
                            <option value="Goa">
                            </datalist>
                            <div>
                            <button type="submit" name="btnn">submit</button>
                            </div> 
                    </form>
                             
                </div>
        </div>
           
    </div>

  
</body>
</html>