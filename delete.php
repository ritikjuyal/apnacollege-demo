<?php
include('connection.php');
$sql="DELETE * FROM customers WHERE id=$id";
$query=mysqli_query($connection,$sql);
if($query){
    echo "Record deleted successfully!";
}
else{
    echo "Error: ".mysqli_error($connection);
}
?>
