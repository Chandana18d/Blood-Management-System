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

if(isset($_POST["submit"])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone=$_POST['phone'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    // Update the user table
    $sql = "UPDATE dbms SET firstname='$firstname', lastname='$lastname', phone='$phone', age='$age', dob='$dob', gender='$gender', address='$address' WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if($result) {
        echo "<script type='text/javascript'> alert('Profile updated successfully.')</script>";
        header("Location: donation.php");
        exit;
    } else {
        echo "<script type='text/javascript'> alert('Failed to update profile.')</script>";
    }
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
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url("img/ba.jpg");
    background-size: cover;
}

.register{
    background: transparent;
    border: 2px solid rgba(255,255,255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 30px 180px;
  
}
.register h1{
    font-size: 36px;
    color: darkcyan;
    text-align: center;
}
.register h1 i{
    font-size: 36px;
    color: darkcyan;
    cursor: pointer;
}

.register h2{
    font-size: 26px;
    color: darkcyan;
    text-align: center;
}
.register label{
    font-size: 20px;
    color: black;
}
.register input{
    width: 100%;
    height:43px;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    
    padding: 2px 30px 4px 30px;
}

.register input::placeholder{
    color: black;
    font-size: 16px;
  }
  .register textarea{
    width: 100%;
    height:43px;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    
    padding: 2px 15px 4px 15px;
}

.register textarea::placeholder{
    color: black;
    font-size: 16px;
  }

select{
    padding: 10px; /* Add padding for better visual appearance */
        font-size: 16px; /* Adjust the font size as needed */
        width: 300px; /* Adjust the width as needed */
        height: 40px;
        border: 2px solid rgba(255, 255, 255, .2);
        border-radius: 40px;
        padding: 2px 15px 4px 15px;
}
.register .xyz  label{
    font-size: 20px;
    color: black;
  }

  .register .xyz input{
    color: #000000;    
    width: 5%;
    font-size: 18px;
}

.register .btn{
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

.register .xyz  label{
    font-size: 20px;
    color: black;
  }

  .register .xyz input{
    color: #000000;    
    width: 5%;
    font-size: 22px;
}

    </style>
</head>
<body>
    <form method="POST" >
        <div class="register">
        <h1><i class='bx bx-arrow-back' onclick="window.location.href='donation.php'"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Profile</h1><br><br>
        <form method="POST" >
                <label>Firstname*</label><br>
                <input type="text" name="firstname" value="<?php echo $fetch_info['firstname']; ?>"><br><br>
                <label>Lastname*</label><br>
                <input type="text" name="lastname" value="<?php echo $fetch_info['lastname']; ?>"><br><br>
                 <label>Email*</label><br>
                <input type="email" name="email" value="<?php echo $fetch_info['email']; ?>"><br><br>
                <label>Phone Number*</label><br>
                <input type="tel" name="phone" value="<?php echo $fetch_info['phone']; ?>"><br><br>

                <h2>Complete your profile</h2><br><br>
                <label >Age*</label><br>
                <input type="num" name="age" ><br><br>
                <label >Date of  Birth*</label><br>
                <input type="date" style="color:black;" name="dob" ><br><br>
                <div class="xyz">
                <label>Gender*</label><br><br>
                <input type="radio"  name="gender" value="Male" id="radiogroup1">Male<br>
                <input type="radio" name="gender" value="Female" id="radiogroup2">Female <br>
                <input type="radio" name="gender" value="Other" id="radiogroup2">Other<br><br>
                </div>
                    <label> Address*</label><br>
                <textarea name="address" cols="35" rows="5" id="textarea" value="<?php echo $fetch_info['address']; ?>"></textarea><br><br>
                <button type="submit" class="btn" name="submit" >Update</button>
       
        </div>
    </form>
</body>
</html>