<?php
$servername='localhost';
$username='root';
$password='';
$database='admin';
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection){
    echo "Connected!";
}
?>