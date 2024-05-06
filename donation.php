<?php
  include 'connection.php';
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
        .body{
          background-image: url("img/blood.jpg");
          background-size: cover;
          background-repeat: repeat;
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

        #blog{
        padding: 150px 150px 0 150px;
        display: flex ;
        justify-content: center;
        align-items: center;
}
#blog .chinnu{
     width: 700px;
    background: #fff;
     text-align: center;
    border-radius: 10px;
    padding: 30px 40px;
    left: 20px;
}

#blog .blog-box{
  display: flex;
  align-items: center;
  width: 100%;
  position: relative;
  padding-bottom: 90px;
}

#blog .blog-img{
  width: 50%;
  margin-right: 40px;
}

#blog img{
  width: 100%;
  height: 300px;
  object-fit: cover;
}
#blog .blog-details{
  width: 50%;
}
#blog .blog-details ul {
    list-style: none; /* Remove default list styles */
    padding-left: 0; /* Remove default padding */
}

#blog .blog-details li {
    margin-bottom: 10px; /* Adjust spacing between each list item */
}

#blog .blog-details li:before {
    content: "•"; /* Use a bullet point character as the bullet */
    color: black; /* Change the color if needed */
    display: inline-block;
    width: 1em; /* Adjust spacing between the bullet and the text */
    margin-left: -1em; /* Adjust spacing between the bullet and the text */
}



#blog .blog-details a{
  text-decoration: underline;
}

#blog .blog-box h1{
  position: absolute;
  top: -40px;
  left: 0;
  font-size: 70px;
  font-weight: 700;
  color: #c9cbca;
  z-index: -9;
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
                <li><a href="stock.php">Blood Stock</a></li>
            </ul>
        </div>    
    </section>

    <section id="blog">
      <div class="honey">
      <div class="chinnu">
      <form >
       
        <h1>Registration</h1><br><br>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/form.jpg" alt="">
            </div>
            <div class="blog-details">
                <ul>
                    <li>We’ll sign you in and go over <a href="#">basic eligibility</a>.</li>
                    <li>You’ll be asked to show ID, such as your driver’s license.</li>
                    <li>You’ll read some information about donating blood.</li>
                    <li>We’ll ask you for your complete address. Your address needs to be complete (including PO Box, street/apartment number) and the place where you will receive your mail 8 weeks from donation.</li>
                </ul>
            </div>

            
        </div>
       
      </form>
      </div>

      <div class="chinnu">
      <form >
       
        <h1>Health History</h1><br><br>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/health.jpg" alt="">
            </div>
            <div class="blog-details">
             <li>You’ll answer a few questions about your health history and places you’ve traveled, during a private and confidential interview.</li>
             <li>You’ll tell us about any prescription and/or over the counter medications that may be in your system </li>
             <li>We’ll check your temperature, pulse, blood pressure and hemoglobin level. </li>
            </div>
            
        </div>
       
      </form>
      </div>
      <div class="chinnu">
      <form >
       
        <h1>Donation </h1><br><br>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/form.jpg" alt="">
            </div>
            <div class="blog-details">
             <li>If you’re donating whole blood, we’ll cleanse an area on your arm and insert a brand new sterile needle for the blood draw .</li>
             <li>Other types of donations, such as platelets, are made using an apheresis machine which will be connected to both arms .</li>
             <li>You’ll read some information about donating blood. </li>
             <li>We’ll ask you for your complete address.  Your address needs to be complete (including PO Box, street/apartment number) and the place where you will receive your mail 8 weeks from donation</li>
            </div>
            
        </div>
       
      </form>
      </div>
      </div>
        </section>
</body>
</html>