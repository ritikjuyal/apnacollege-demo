<?php
session_start();
include('connection.php');
$id=$_GET['id'];
$a="SELECT * FROM customers WHERE id='$id'";
$query=mysqli_query($connection,$a);
$b=mysqli_fetch_assoc($query);
$fname=$b['firstname'];
$lname=$b['lastname'];
$gender=$b['gender'];
$dob=$b['date_of_birth'];  
$email=$b['email_address'];
$password=$b['password'];  
$img=$b['student_images'];  
$status="Approved";
if(isset($_POST['submit'])){
    $sql="UPDATE customers SET status WHERE id='$id'";
}
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
    <form method="POST">
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
            </tr>
            <?php
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
                echo "</tr>";
        ?>
        </table>
        <input type="submit" name="submit" value="Submit">    
    </form>
</body>
    </html>