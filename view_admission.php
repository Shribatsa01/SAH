<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="./css/my.css">
    <link rel="stylesheet" href="./css/button.css">
    <title>View Admissions</title>
    <style>
        body {
            background-image: url(./images/managestudents1.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
        }
        .main{
            display: grid;
            justify-content: center;
            padding: 0px;
        }
        .main table{
            margin: 30px auto;
            margin-left: 40px;
        }
        .main table, th, td {
            border-collapse: collapse;
            text-align: center;
            table-layout: fixed;
            padding: 10px 20px;
        }

        .main th{
            color: #61c232;
        }

        .main tr:hover {
            background-color: #009999;
        }

        th, td {
            border-bottom: 1px solid #ddd;
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
        <?php
            $conn = mysqli_connect("localhost", "root", "", "db_admission");
            
            $sql = "SELECT id, sname, gname, contact, email, address, shift, gender, blgroup, division FROM student";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0) {
               echo "<table>
                <caption><h2>View Admissions</h2></caption>
                <tr>
                <th>ID</th>
                <th>STUDENT NAME</th>
                <th>GUARDIAN NAME</th>
                <th>CONTACT</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>SHIFT</th>
                <th>GENDER</th>
                <th>BLOOD GROUP</th>
                <th>DIVISION</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['sname'] . "</td>";
                    echo "<td>" . $row['gname'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['shift'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['blgroup'] . "</td>";
                    echo "<td>" . $row['division'] . "</td>";
                    echo "</tr>";
                  }

                echo "</table>";
            } else {
                echo "0 Student";
            }
        ?>
