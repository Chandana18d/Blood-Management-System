
<?php

                include("connection.php");

                if(isset($_POST["submit"]))
                {
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $date1 = $_POST['date1'];
                    $hname = $_POST['hname'];
                    $location1 = $_POST['location1'];
                    $quantity = $_POST['quantity'];
                    $reason =$_POST['reason'];

                    $query="INSERT INTO request(firstname, lastname,  email, date1, hname,location1, quantity , reason) VALUES('$firstname', '$lastname', '$email','$date1' ,'$hname','$location1','$quantity','$reason')";
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
            <h1> <i class='bx bx-arrow-back' onclick="window.location.href='donation.php'"></i>&nbsp;&nbsp; Request Form</h1><br><br>
            <label>Patient name*</label>
            <br>
            <input type="text" name="firstname" placeholder="Firstname">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="lastname" placeholder="Lastname"><br><br>
            <label>Email*</label><br>
            <input type="email" name="email"><br><br>
            <label>Date:</label>
            <input type="date" name="date1">
             <br><br>
             <label>Hospital name*</label>
             <input type="text" name="hname" placeholder="hospital name"><br><br>
             <label>Hospital Location*</label>
             <textarea name="location1" cols="35" rows="5" id="textarea"></textarea><br><br>
            <label>Quantity*</label>
            <input type="number" name="quantity" placeholder="units"><br><br>
            <label>Reason for Urgency*</label>
            <textarea name="reason" cols="35" rows="5" id="textarea"></textarea><br><br>
            <button type="submit" class="btn" name="submit" >Submit</button>
        </div>
    </form>
</body>
</html>