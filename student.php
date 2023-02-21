<?php
$cn = mysqli_connect("localhost", "root", "", "db_admission");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/my.css">
    <link rel="stylesheet" href="style.css">
     <style>
        body{
            background-image: url(./images/admission.jpg);
            background-repeat: no-repeat;
            
            background-size: cover;
        }
        .title{
            
            font-family: impact;
            font-size: 90px;
            color: #4563ff;
            }
    </style>
    <title>Admission Management</title>
</head>
<body>
 <div class="container">
        <div class="title">
            <span class="heading">SAH GROUP OF INSTITUTIONS</span>
        </div>
        
        <div class="nav">
            <ul>
                <li>
                    <a href="aboutus.php">About us</a>
                </li>
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li class="dropdown" onclick="toggleDisplay('1')">
                    <a href="#" class="dropbtn">Manage  &nbsp
                        
                    </a>
                    <div class="dropdown-content" id="1">
                        <a href="view_admission.php">View Admissions</a>
                        <a href="delete_admission.php">Delete Admissions</a>
                    </div>
                </li>
                <li class="dropdown" onclick="toggleDisplay('1')">
                    <a href="#" class="dropbtn">Branch &nbsp
                        
                    </a>
                    <div class="dropdown-content" id="1">
                        <a href="cse.php">Computer science and engineering</a>
                        <a href="ce.php">Civil engineering</a>
                        <a href="eee.php">Electronics and electrical engineering</a>
                        <a href="ee.php">Electrical engineering</a>
                        <a href="ece.php">Electronics and communication engineering</a>
                        <a href="me.php">Mechanical engineering</a>
                    </div>
                </li>
                <li class="dropdown" onclick="toggleDisplay('2')">
                    <a href="#" class="dropbtn">Student &nbsp
                       
                    </a>
                    <div class="dropdown-content" id="2">
                        <a href="student.php">Admissions</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-12">

                    <?php include ('controller.php'); ?>

                </div>
