<?php
include('connection.php');
session_start();
$email=$_SESSION['email_address'];
$password=$_SESSION['password'];
$sql="SELECT * FROM customers WHERE email_address='$email' AND password='$password'";
$query=mysqli_query($connection,$sql);
$a=mysqli_fetch_assoc($query);
?>
<html>
    <head>
        <style>
            table{
                border-collapse:collapse;
                width: 40%;
            }  
            tr,td{
                border:1px solid #000;
                padding: 10px;
            }  
            tr:nth-child(odd){
                background-color:#f00;                
            }
            tr:nth-child(even){
                background-color:#ff0; 
                color:#fff;               
            }
            img{
                height:80px;
                width:80px;
            }
        </style>    
    </head>
<body>
            <table>
            <tr>
                <td><b>ID</b></td>
                <td><b>First Name</b></td>
                <td><b>Last Name</b></td>
                <td><b>Gender</b></td>
                <td><b>Date Of Birth</b></td>
                <td><b>Email Address</b></td>
                <td><b>Password</b></td>
                <td><b>Student Images</b></td>
            </tr>
            <?php
                $id=$a['id'];
                $fname=$a['firstname'];
                $lname=$a['lastname'];
                $gender=$a['gender'];
                $dob=$a['date_of_birth'];  
                $email=$a['email_address'];
                $password=$a['password'];  
                $img=$a['student_images'];  
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$fname</td>";
                echo "<td>$lname</td>";
                echo "<td>$gender</td>";
                echo "<td>$dob</td>";
                echo "<td>$email</td>";
                echo "<td>$password</td>";
                echo "<td><img src=$img></td>";
                echo "</tr>";
        ?>
        </table>
</body>
    </html>