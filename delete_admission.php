<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/home1.css">
    <link rel="stylesheet" href="./css/my.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Delete admission</title>
    <style>
        body {
            background-image: url(./images/manageclasses.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
        }
        .buttonlogo {
            padding: 1px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }
        .button {
            padding: 1px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {background-color: #ff3300}

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
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
    <div class="main">
        <br><br>
        <div style="margin: -80px" align="center">
        <form method="post">
            <fieldset style="width: 600px">
                <legend><b>Delete Admissions<b></legend>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "db_admission");
                    
                    $class_result=mysqli_query($conn,"SELECT `sname` FROM `student`");
                        echo '<select name="sname">';
                        echo '<option selected disabled>Select Student</option>';
                    while($row = mysqli_fetch_array($class_result)){
                        echo "<meta http-equiv='refresh' content='0'>";
                        $display=$row['sname'];
                        echo '<option value="'.$display.'">'.$display.'</option>';
                    }
                    echo'</select>'
                ?>
                <table>
                <tr>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "db_admission");
                    
                    $class_result=mysqli_query($conn,"SELECT `id` FROM `student`");
                        echo '<select name="id">';
                        echo '<option selected disabled>Select ID</option>';
                    while($row = mysqli_fetch_array($class_result)){
                        $display=$row['id'];
                        echo '<option value="'.$display.'">'.$display.'</option>';
                    }
                    echo'</select>'
                ?>
                </tr>
                <tr>
                <th colspan="90"><input type="submit" value="Delete" ></th>
            </tr>
        </table>
            </fieldset>
        </form>
        </div>  
</body>
</html>

<?php
    if(isset($_POST['sname'],$_POST['id'])) {
        $sname=$_POST['sname'];
        $id=$_POST['id'];
        $delete_sql=mysqli_query($conn,"DELETE FROM `student` WHERE `sname` = '$sname' AND `id` = '$id'");
        if(!$delete_sql){
            echo '<script language="javascript">';
            echo 'alert("Not available")';
            echo '</script>';
        } else {
            echo "<meta http-equiv='refresh' content='0'>";
            echo '<script language="javascript">';
            echo 'alert("Deleted")';
            echo '</script>';
        } 
    }

?>