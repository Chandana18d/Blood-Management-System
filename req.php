<?php
        require('function.php');
        session_start();

        $con = mysqli_connect("localhost","root","","register");
        $firstname = "" ;
        $lastname = "";
        $email = "";
        $date1 = "";
        $hname = "";
        $location1 = "";
        $quantity = "";
        $reason = "";

        $query="select * from request";
       
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
           
        }
        body{
            background: beige;
        }
        .row .register{
            display: flex;
            align-items: center;
            background-color: bisque;
            padding: 10px;
        }
        .row .register h2{
            font-size: 36px;
            margin-top: 30px;
        }
        .row .register  i.bx {
            margin-right: 500px;
            cursor: pointer;
            font-size: 36px;
            right: 10px;
            left: 10px;
            margin-top: 30px;
        }
        .row .col-md-8 table {
            width: 90%;
            margin: auto;
            
        }
        
        .row .col-md-8  th, td {
            border: 1px solid;
            text-align: left;
            padding: 8px;
            
        }

    </style>
</head>
<body>
   <div class="row">
    <div class="register">
    <i class='bx bx-arrow-back' onclick="window.location.href='donation1.php'"></i>
        <h2>Registered Users</h2>
    </div>
<br><br>
    <div class="col-md-8">
            <table >
            <tr>
                <th>firstname:</th>
                <th>lastname:</th>
                <th>Email:</th>
                <th>Date:</th>
                <th>Hospital Name:</th>
                <th>Location</th>
                <th>Quantity</th>
                <th>Reason</th>
                
            </tr>
            <?php
               $query_run=mysqli_query( $con, $query );
               while($row= mysqli_fetch_assoc($query_run)){
                $firstname=$row["firstname"];
                $lastname=$row["lastname"];
                $email=$row["email"];
                $date1 = $row['date1'];
                $hname = $row['hname'];
                $location1 = $row['location1'];
                $quantity = $row['quantity'];
                $reason =$row['reason'];
                
               
            ?>
                    <tr>
                        <td><?php echo $firstname;?></td>
                        <td><?php echo $lastname;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $date1?></td>
                        <td><?php echo $hname;?></td>
                        <td><?php echo $location1;?></td>
                        <td><?php echo $quantity;?></td>
                        <td><?php echo $reason?></td>
                    </tr>
            <?php
            }
            ?>
        </table>
        
    </div>
   </div>
</body>
</html>