<?php
require('function2.php');
 session_start();
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
        .row1 .register{
            display: flex;
            align-items: center;
            background-color: bisque;
            padding: 15px;
        }
        .row1 .register h2{
            font-size: 36px;
            margin: 0;
        }
        .row1 .register  i.bx {
            margin-right: 500px;
            cursor: pointer;
            font-size: 36px;
            right: 10px;
            left: 10px;
        }
            .row{
            display: flex;
            justify-content: space-between;
            margin: -10px;
            flex-wrap: wrap;
            text-align: center;
            
            }
            .row .col-md-3{
                width: 20%;
                border: 2px solid black;
                border-radius: 20px;
                cursor: pointer;
                box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
                transition: 0.2s ease;
                position: relative;
                margin: 10px;
            }
            .row .col-md-3 .card {
                padding: 10px 0;
                width: 320px;

            }
            .row .col-md-3 .card .card-header img{
                width: 60px;
            
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
<section class="row1">
    <div class="register">
    <i class='bx bx-arrow-back' onclick="window.location.href='donation1.php'"></i>
        <h2>Patient</h2>
        </section>
        <br><br><br><br>
    <section class="row">
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header">
                    <img src="img/ap.png" alt=""><br><br><br>
                </div>
                <div class="card-body">
                    <p class="card-text">Total A+ blood :<?php echo  get_a1_count();?></p><br><br>
                    <a href="a1.php" class="btn" >View A+ Donor</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header"><img src="img/ap-.png" alt=""><br><br><br></div>
                
                <div class="card-body">
                    <p class="card-text">Total A- blood :<?php echo get_b1_count();?></p><br><br>
                    <a href="b1.php" class="btn" >View A- Donor</a>
                </div>
            </div>
        </div> 
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header"><img src="img/bp+.png" alt=""><br><br><br></div>
                <div class="card-body">
                    <p class="card-text">Total B+ blood :<?php echo get_c1_count();?></p><br><br>
                    <a href="c1.php" class="btn" target="_blank">View B+ Donor</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header">
                    <img src="img/bp.png" alt=""><br><br><br>
                </div>
               
                <div class="card-body">
                    <p class="card-text">Total B- blood :<?php echo get_d1_count();?></p><br><br>
                    <a href="d1.php" class="btn" >View B- Donor</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header"><img src="img/ab+.png" alt=""><br><br><br></div>
                
                <div class="card-body">
                    <p class="card-text">Total AB+ blood :<?php echo get_e1_count();?></p><br><br>
                    <a href="e1.php" class="btn" >View AB+ Donor</a>
                </div>
            </div>
        </div> 
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header"><img src="img/ab.png" alt=""><br><br><br></div>
              
                <div class="card-body">
                    <p class="card-text">Total AB- blood :<?php echo get_f1_count();?></p><br><br>
                    <a href="f1.php" class="btn" target="_blank">View  AB- Donor</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header">
                    <img src="img/op.png" alt=""><br><br><br>
                </div>
                
                <div class="card-body">
                    <p class="card-text">Total O+ blood :<?php echo get_g1_count();?></p><br><br>
                    <a href="g1.php" class="btn" >View O+ Donor</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card ">
                <div class="card-header"><img src="img/op-.png" alt=""><br><br><br></div>
                
                <div class="card-body">
                    <p class="card-text">Total O- blood: <?php echo get_h1_count();?></p><br><br>
                    <a href="h1.php" class="btn" >View O- Donor</a>
                </div>
            </div>
        </div> 
    </section>
</body>
</html>