<?php
session_start();
include("connection.php");


if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    
    $sql = "SELECT * FROM dbms WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if($result && mysqli_num_rows($result) > 0) {
       
        $fetch_info = mysqli_fetch_assoc($result);
    } else {
        
        header('Location: login.php');
        exit; 
    }
} else {
  
    header('Location: login.php');
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
         @import url("hhtps://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
      *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
        }
        body{
            font-family: "Poppins",sans-serif;
            background: url('img/back1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
          

        }
 
 
            .pro{
                display: flex ;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }
            .pro .pro1{
                max-width: 700px;
                background-image: url('img/blood.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }
            .pro .pro2{
                width: 400px;
                background: #fff;
                text-align: center;
                border-radius: 10px;
                padding: 5px 15px;
                left: 20px;

            }
            .pro .dbms{
                text-align: center;
               
            }
            .pro .pro2 h1{
                font-size: 36px;
            }
            .pro .pro2 h1 i{
               
                font-size: 36px;
                color: darkcyan;
                cursor: pointer;
            }
            .pro .dbms label{
                flex: 0 0 200px; /* Adjust width as needed */
                font-weight: bold;
                margin-right: 10px;
            }
            .pro .dbms p{
                flex: 1;
    margin: 0;
            }

            .pro .dbms .pro3{
                padding: 10px; /* Add padding for better visual appearance */
                font-size: 16px; /* Adjust the font size as needed */
                width: 250px; /* Adjust the width as needed */
                height: 40px;
                border: 2px solid  black;
                border-radius: 40px;
                padding: 2px 15px 4px 15px;

            }
            .pro .pro1 .btn{
                width: 50%;
                height: 45px;
                background-color: rgb(247, 183, 138);
                border: none;
                outline: none;
                border-radius: 40px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                font-size: 20px;
                cursor: pointer;
                font-weight: 600;
                color: black;
            }       
            
    </style>
</head>
<body>

    <section class="pro">
        <div class="pro1">
            <div class="pro2">
            <h1><i class='bx bx-arrow-back' onclick="window.location.href='donation.php'"></i>&nbsp;&nbsp;&nbsp;&nbsp;View Your Profile</h1><br><br>
                <div class="dbms">
                     <p> <label>Frist Name :</label>  <?php echo $fetch_info['firstname']; ?></p><br><br>
                     <p><label>Last Name :</label> <?php echo $fetch_info['lastname']; ?></p><br><br>   
                     <p><label>Email :</label> <?php echo $fetch_info['email']; ?></p><br><br>
                     <p><label>Phone Number :</label> <?php echo $fetch_info['phone']; ?></p><br><br>
                     <p><label>Age :</label> <?php echo $fetch_info['age']; ?></p><br><br>
                     <p><label>Date Of Birth :</label> <?php echo $fetch_info['dob']; ?></p><br><br>
                     <p><label>Gender :</label> <?php echo $fetch_info['gender']; ?></p><br><br>
                     <p><label>Address :</label> <?php echo $fetch_info['address']; ?></p><br><br>
                </div>
        </div>
    </section>




</body>
</html>