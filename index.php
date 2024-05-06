<?php
      session_start();

      include("connection.php");

      if(isset($_POST["submit"]))
	{
	  $firstname = $_POST['firstname'];
	  $lastname = $_POST['lastname'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
	  $password = $_POST['password'];

      if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	} else {
		$stmt = $con->prepare("insert into dbms(firstname,lastname,email,phone,password) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $firstname, $lastname, $email,$phone, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "<script type='text/javascript'> alert('Registration successfully...')</script>";
		$stmt->close();
		$con->close();
	}
	  }
	  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD MANEGEMENT</title>
    <link rel="stylesheet" href="prog1.css">

</head>

<body>
    <div class="xyz">
        <h1>SIGN IN</h1>
        <form method="POST" >

            <div class="Chandana">
                <label for="firstname"></label>
                <input type="text" name="firstname" id="firstname" placeholder="FIRST NAME" required>

            </div>

            <div class="Chandana">
                <label for="lastname"></label>
                <input type="text" name="lastname" id="lastname" placeholder="LAST NAME" required>
            </div>

            <div class="Chandana">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="E-MAIL" required>

            </div>

            <div class="Chandana">
                <label for="phone"></label>
                <input type="tel" name="phone" id="phone" placeholder="PHONE NUMBER" required>
            </div>

            <div class="Chandana">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="PASSWORD" required>
            </div>

            <button type="submit" class="BTN" name="submit">SIGN IN</button>
            <div class="abcd">
            <p>Go to Login page <a href="#" onclick="window.location.href='login.php'">SIGN UP</a></p>
        </div>
        </form>
    </div>
</body>

</html>