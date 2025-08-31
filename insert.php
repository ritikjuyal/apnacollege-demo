<?php
include('connection.php');
if(isset($_POST['submit'])){
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$password=$_POST['password'];
$img=$_POST['img'];
$sql="INSERT INTO customers (id,firstname,lastname,gender,date_of_birth,email_address,password,student_images) VALUES('$id','$fname','$lname','$gender','$dob','$email','$password','$img')";
$query=mysqli_query($connection,$sql);
if($query){
    echo "New record created successfully!";
}
else{
    echo "Error: ".mysqli_error($connection);
}
}
?>
<html>
    <head>
        <style>
            form{
                background-color:#f00;
                padding:20px;
                display:flex;
                flex-direction:column;
                align-items:start;
                justify-content:space-between;
                height:700px;
            }
            form div{
                display:flex;
                width:150px;
            }
            div label{
                transform:translate(0,7px);
            }
            input{
                margin:10px 0;
                padding:5px;
                gap:10px;
                width:200px;
                color:#ff0;
            }
            input[type="submit"]{
                background-color:#ff0;
                color:#f00;
                border-radius:40px;
                padding:10px;
            }
        </style>
    </head>        
    <body>
        <form method="POST">
            <label>S.No.</label>
            <input type="text" name="id">
            <label>First Name:</label>
            <input type="text" name="fname">
            <label>Last Name:</label>
            <input type="text" name="lname">
            <label>Gender:</label>
            <div>
            <input type="radio" value="Male" name="gender">
            <label>Male</label>
            <input type="radio" value="Female" name="gender">
            <label>Female</label>
            </div>
            <label>Date Of Birth:</label>
            <input type="date" name="dob">
            <label>Email Address:</label>
            <input type="email" name="email">
            <label>Password:</label>
            <input type="password" name="password">
            <label>Student Images:</label>
            <input type="text" name="img">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>    