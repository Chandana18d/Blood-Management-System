<?php
require('function.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
        }
            .chinnu .menu-bar{
                background: #E3E6F3;
                text-align: center;
            }
            .chinnu .menu-bar ul{
                display: inline-flex;
                list-style: none;
                color: #fff;
            }
            .chinnu .menu-bar ul li{
                width: -50px;
                margin: 15px;
                padding: 15px;
            }
            .chinnu .menu-bar ul li a{
                text-decoration: none;
                color: #1a1a1a;
            }
            .chinnu .menu-bar ul li a:hover{
                color: #088178;
                border-radius: 3px;
            }
            .chinnu .sub-menu-1{
                display: none;
            }
            .chinnu .menu-bar ul li:hover .sub-menu-1{
                display: block;
                position: absolute;
                background: #E3E6F3;
                margin-top: 15px;
                margin-left: -15px;
            }
            .chinnu .menu-bar ul li:hover .sub-menu-1 ul{
                display: block;
                margin: 10px;
            }
            .chinnu .menu-bar ul li:hover .sub-menu-1 ul li{
            width: 150px;
            padding: 10px;
            border-bottom: 1px dotted #fff;
            background: transparent;
            border-radius: 0;
            text-align: left;
            }
            .chinnu .menu-bar ul li:hover .sub-menu-1 ul li:last-child{
                border-bottom: none;
            }
            .chinnu .menu-bar ul li:hover .sub-menu-1 ul li a:hover{
                color: #088178;
            }
            .chinnu .fa-angle-right{
                float: right;
            }
            .chinnu .sub-menu-2{
                display: none;
            }
            .chinnu .hover-me:hover .sub-menu-2{
                position: absolute;
                display: block;
                margin-top: -40px;
                margin-left: 140px;
                background: #E3E6F3;
            }

            .row{
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            flex-wrap: wrap;
            text-align: center;
            margin: 0;
            }
            .row .col-md-3{
                width: 26.1%;
                min-width: 250px;   
                border: 2px solid black;
                border-radius: 20px;
                cursor: pointer;
                box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
                transition: 0.2s ease;
                position: relative;
            }
            .row .col-md-3 .card {
                padding: 10px 0;
                width: 400px;

            }
            .row .col-md-3 .card .card-header{
                font-size: 38px;
            
            }
            .row .col-md-3 .card .card-header .card-body{
                text-align: center;
            }
            .card-body .card-text{
                font-size: 36px;
                text-align: center;
            }
           .card-body .btn {
                width: 60px;
                height: 60px;  
                color: black;
                border: 2px solid burlywood;
                background-color: burlywood;
                bottom: 20px;
                right: 10px;
                font-size: 28px;
                position: static;
                text-decoration: none;
                
            }
    </style>
</head>
<body>
    <section class="chinnu">
<div class="menu-bar">
        <ul>
            <li><a  href="donation.php">Home</a></li>
           
                <li><a href="#">Register</a>
                    <div class="sub-menu-1">
                                    <ul>
                                        <li class="hover-me"><a href="#" onclick="window.location.href='dregister.php'">Donor</a></li>
                                        <li class="hover-me"><a href="#" onclick="window.location.href='rregister.php'">Receiver</a></li>
                                    </ul>
                    </div>
                </li>

                <li><a class="active" href="donation1.php">Donation</a></li>
                <li><a href="request.php">Blood Request</a></li>
                <li><a href="req.php">Request history</a></li>
                <li><a href="stock.php">Blood stock</a></li>
            </ul>
        </div>    
    </section>
    <br><br>
    <section class="row">
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header">Registered Users:</div><br>
                <hr>
                <br><br>
                <div class="card-body">
                    <p class="card-text">No. of total users: <?php echo get_user_count();?></p>
                    <br><br>
                    <a href="regusers.php" class="btn" >View Registered Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header">Donors:</div><br>
                <hr><br><br>
                <div class="card-body">
                    <p class="card-text">No. of Donors: <?php echo get_donor_count();?></p><br><br>
                    <a href="donor1.php" class="btn" >View Donors</a>
                </div>
            </div>
        </div> 
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header">Patient:</div><br>
                <hr><br><br>
                <div class="card-body">
                    <p class="card-text">No. of Patient: <?php echo get_patient_count();?></p><br><br>
                    <a href="patient.php" class="btn" target="_blank">View Patient</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>