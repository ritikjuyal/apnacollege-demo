<?php
include('connection.php');
$sql="SELECT * FROM customers";
$query=mysqli_query($connection,$sql);
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
                <td><b>Status</b></td>
                <td><b>Update</b></td>
                <td><b>Delete</b></td>
            </tr>
            <?php
            while($a=mysqli_fetch_assoc($query)){
            $id=$a['id'];
            $fname=$a['firstname'];
            $lname=$a['lastname'];
            $gender=$a['gender'];
            $dob=$a['date_of_birth'];  
            $email=$a['email_address'];
            $password=$a['password'];  
            $img=$a['student_images'];  
            $status=$a['status'];  
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$fname</td>";
            echo "<td>$lname</td>";
            echo "<td>$gender</td>";
            echo "<td>$dob</td>";
            echo "<td>$email</td>";
            echo "<td>$password</td>";
            echo "<td><img src=$img></td>";
            echo "<td>$status</td>";
            echo "<td><a href='approve.php?id=$id'>Approve</a></td>";
            echo "<td><a href='reject.php?id=$id'>Reject</a></td>";
            echo "</tr>";
        }
        ?>
        </table>    
    </body>
</html>    