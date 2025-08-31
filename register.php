<?php
session_start();
include('connection.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM customers WHERE email_address='$email' AND password='$password'";
    $query=mysqli_query($connection,$sql);
    if(mysqli_num_rows($query)==1){
        $_SESSION['email_address']=$email;
        $_SESSION['password']=$password;
        header("Location:user.php");
        exit();
    }
    else{
        echo "Invalid email or password";
    }
}
?>
<html>
    <head>
        <style>
            body{
                display:flex;
                flex-direction:column;
                justify-content:space-between;
                align-items:start;
                height:500px;
            }
            form{
                display:flex;
                flex-direction:column;
                justify-content:space-evenly;
                height:300px;
                width:30%;
                border-radius:40px;
                margin-left:30%;
                padding:10px 40px;
                background-color:#f00;
                color:#fff;
            }
            input{
                width:90%;
                padding:10px;
                border-radius:40px;
            }
            input[type='submit']{
                margin:0 20%;
                width:200px;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <label>Email Address:</label>
            <input type="email" name="email">
            <label>Password:</label>
            <input type="password" name="password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>