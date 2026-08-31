<?php
include('connection.php');
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($connection,trim($_POST['name']));
$email=mysqli_real_escape_string($connection,trim($_POST['email']));
$number=mysqli_real_escape_string($connection,trim($_POST['number']));
$address=mysqli_real_escape_string($connection,trim($_POST['address']));
$insert="INSERT INTO contact (name,email,number,address) VALUES('$name','$email','$number','$address')";
$query=mysqli_query($connection,$sql);
if($query){
    echo "Data inserted successfully";
}
}
?>

<html>
    <body>
        <form method="post" action="insert.php">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name">
            <label>Email</label>
            <input type="text" name="email" placeholder="Enter your email">
            <label>Number</label>
            <input type="number" name="number">
            <label>Address</label>
            <input type="text" name="address" placeholder="Enter your address">
            <input type="submit" name="submit" value="Submit">
</form>
</body>
    </html>