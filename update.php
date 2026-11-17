<?php
include 'connection.php';
$fname=$_GET['fname'];
if(isset($_POST['submit'])){
    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $number=trim($_POST['number']);
    $address=trim($_POST['address']);
    $image=trim($_POST['image']);
    $data="UPDATE contact SET name='$name',email='$email',number='$number',address='$address',image='$image' WHERE name='$fname'";
    $sql=mysqli_query($connection,$data);
}
$data="SELECT * FROM contact WHERE name='$fname'";
$sql=mysqli_query($connection,$data);
$a=mysqli_fetch_assoc($sql);
?>

<html>
    <body>
        <form method="post">
            Name:<input type="text" name="name" value="<?php echo $a['name'];?>">
            Email ID:<input type="text" name="email" value="<?php echo $a['email'];?>">
            Number:<input type="text" name="number" value="<?php echo $a['number'];?>">
            Address:<input type="text" name="address" value="<?php echo $a['address'];?>">
            Image:<input type="text" name="image" value="<?php echo $a['image'];?>">
            <input type="submit" name="submit" value="Submit">
</form>
</body>
    </html>