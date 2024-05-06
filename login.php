<?php
      include("connection.php");

      if(isset($_POST["submit"]))
	{
	  $email = $_POST['email'];
	  $password = $_POST['password'];

      if(!empty($email) && !empty($password) && !is_numeric($email))
      {
        $query= "select * from dbms where email='$email' limit 1";
        $result=mysqli_query($con,$query);

      if($result)
      {
        if($result && mysqli_num_rows($result)>0)
        {
            $user_data= mysqli_fetch_assoc($result);

            if($user_data['password']== $password)
            {
                header("location: donation.php");
                die();
            }
            echo "<script type='text/javascript'> alert('Successfully Logined....')</script>";
        }
      }
      echo "<script type='text/javascript'> alert('Wrong username or password....')</script>";
      }
      else{
        echo "<script type='text/javascript'> alert('Wrong username or password....')</script>";
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
    <form  method="POST">
        <h1>SIGN IN</h1>
        <div class="Chandana">
            <input type="text" name="email" placeholder="USER NAME" required>
           
        </div>

        <div class="Chandana">
            <input type="password" name="password" placeholder="PASSWORD" required>
        </div>

        <div class="Deekshika">
            <label><input type="checkbox">Remember me!!</label>
            <a href="#">
                Forget Password!
            </a>
        </div>
        <button type="submit" class="BTN" name="submit">SIGN IN</button>
        <div class="abcd">
            <p>Don't have an account?? <a href="#" onclick="window.location.href='index.php'">SIGN UP</a></p>
        </div>

    </form>
    </div>
</body>
</html>