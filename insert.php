<?php
include('connection.php');
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($connection,trim($_POST['name']));
$email=mysqli_real_escape_string($connection,trim($_POST['email']));
$number=mysqli_real_escape_string($connection,trim($_POST['number']));
$address=mysqli_real_escape_string($connection,trim($_POST['address']));
$image=mysqli_real_escape_string($connection,trim($_POST['image']??''));
$insert="INSERT INTO contact (name,email,number,address,image) VALUES('$name','$email','$number','$address','$image')";
$query=mysqli_query($connection,$insert);
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
            <input type="text" name="number">
            <label>Address</label>
            <input type="text" name="address" placeholder="Enter your address">
            <label>Image</label>
            <input type="text" name="image">
            <input type="submit" name="submit" value="Submit">
        </form>
</body>
    </html>