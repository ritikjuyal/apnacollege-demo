<html>
    <head>
    <style>
        th{
            background-color:#f00;
        }
        td{
            background-color:#ff0;
        }
        img{
            height:100px;
            width:100px;
        }
    </style>        
</head>
    <body>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Address</th>
                <th>Image</th>
            </tr>
<?php
session_start();
include "connection.php";
if(isset($_SESSION['name'])){
    $name=$_SESSION['name'];
    $data="SELECT * FROM contact WHERE name='$name'";
    $result=mysqli_query($connection,$data);
    if(mysqli_num_rows($result)>0){
        $a=mysqli_fetch_assoc($result);
        ?>
        <tr>
        <td><?php echo $a['name'];?></td>
        <td><?php echo $a['email'];?></td>
        <td><?php echo $a['number'];?></td>
        <td><?php echo $a['address'];?></td>
        <td><img src="<?php echo $a['image'];?>"</td>
</tr>
    <?php
    }
}
?>
</body>
    </html>
