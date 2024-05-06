<?php
      include("connection.php");

      if(isset($_POST["submit"]))
	{
	  $firstname = $_POST['firstname'];
	  $lastname = $_POST['lastname'];
      $age=$_POST['age'];
      $date = $_POST['dob'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
      $area= $_POST['area'];
      $blood = $_POST['blood'];
  
        $query="INSERT INTO user(firstname, lastname,age, dob, email, phone, area, blood) VALUES('$firstname', '$lastname','$age', '$date', '$email', '$phone', '$area', '$blood')";
		$result = mysqli_query($con , $query);
        if($result)
        {
            echo "<script type='text/javascript'> alert('Successful...')</script>";
            header("location: donation.php");
        }else{
            echo "<script type='text/javascript'> alert('Failed...')</script>";
        }
	  }	
	  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="a.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <form method="POST" >
        <div class="register">
            <h1> <i class='bx bx-arrow-back' onclick="window.location.href='donation.php'"></i>&nbsp;&nbsp; Patient Information</h1><br><br>
            <label>Patient Name*</label>
            <br>
            <input type="text" name="firstname" placeholder="Firstname">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="lastname" placeholder="Lastname"><br><br>
            <label Age*>Age*</label>
            <input type="num" name="age" ><br><br>
            <label >Date of  Birth*</label><br>
            <input type="date" style="color:black;" name="dob"><br><br>
            <label>Email*</label><br>
            <input type="email" name="email"><br><br>
            <label>Phone Number*</label><br>
            <input type="tel"  style="color:black;" name="phone"><br><br>
            <label> Address*</label><br>
            <textarea name="area" cols="35" rows="5" id="textarea"></textarea><br><br>

            <label>Blood Group Required*</label><br>
            <select name="blood">
            <option >--select Blood type--</option>
                <option >A+</option>
                <option >A-</option>
                <option >B+</option>
                <option >B-</option>
                <option >O+</option>
                <option >O-</option>
                <option >AB+</option>
                <option >AB-</option>
            </select><br><br>
            <button type="submit" class="btn" name="submit" >Submit</button>
        </div>
    </form>
</body>
</html>