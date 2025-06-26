<?php
session_start();
include('connection.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM customers WHERE email='$email' AND password='$password'";
    $query=mysqli_query($connection,$sql);
    if(mysqli_num_rows($query)==1){
        $a=mysqli_fetch_assoc($query);
        $_SESSION['email_address']=$a['email_address'];
        $_SESSION['password']=$a['password'];
        header("Location:login.php");
    }
    else{
        echo "Invalid email or password";
    }
}
?>
<html>
    <head>

    </head>
    <body>
        <form>
            <label>Email Address</label>
            <input type="email" name="email">
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>