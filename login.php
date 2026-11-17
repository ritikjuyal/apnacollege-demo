<?php
session_start();
include "connection.php";
if(isset($_POST['submit'])){
    $_SESSION['name']=trim($_POST['name']);
    header("Location:logout.php");
    exit;
}
?>

<html>
    <head>
        <style>
            form{
                background-color:#0f0;
                margin:0 20%;
                padding:100px;
            }
        </style>
</head>
    <body>
        <form method="post">
            <input type="text" name="name" placeholder="Enter name">
            <input type="submit" name="submit" value="Login">
</form>
</body>
</html>