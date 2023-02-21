<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/my.css">
    <style>
        body{
            background-image: url(./images/index1.jpg);
            background-repeat: no-repeat;
            background-attachment: ;
            background-size: cover;
        }
        .title{
            
            font-family: impact;
            font-size: 90px;
            color: #4563ff;
            }
    </style>
    <title>Homepage | SAH institution</title>
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
         <div class="slider">
            <img src="images/s1.png" class="slider-image" alt="img" width="2000" height="800">
        </div>
        <div class="main">
            <span>GOALS</span><hr>
            <p>
                <li>Enhance engagement with society and industry</li>    
<LI>Broaden educational areas</LI>                                 <li>Improve internal support systems</li>                        
<li>Enhance student experience</li>                               
<li>Broaden funding base</li>                                      
<LI>Attract international students and faculty</li>
<li>Advance frontiers of knowledge</li>                        
<li>Enhance diversity</li>
<li>Enhance alumni engagement</li> 
<li>Develop a cleaner and greener campus</li></p>
    
            <div class="main">
                <div>
                    <span>VISION</span> <hr>
                    <p>To be a leading global technology university that provides a transformative education to create leaders and innovators, and generates new knowledge for society and industry..</p>
                </div>
                <div>
                    <span>Core Values</span> <hr>
                    <p>The core values adopted by the Institute as enduring principles are Integrity, Excellence, Accountability, Transparency, and Empathy. </p>
                </div>
            </div>
        </div>
        <div style="background-image: url(./images/contact1.jpg); background-repeat: no-repeat;" class="footer" height="400" width="800">
            <div class="footer-contact">
                <span>Contact Us</span>
                <p>SAHstudies@hotmail.com</p>
                <p>+91-6531584569 (Reception)</p>
                <p>+91-6531502563 (Accounts)</p>
            </div>
        </div>

    </div>

</body>
</html>