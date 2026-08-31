<?php
$servername="localhost";
$username="root";
$password="";
$database="about";
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection){
    echo "Database connected successfully";
}
?>