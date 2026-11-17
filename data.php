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
                <th>Email ID</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
<?php
include "connection.php";
$data="SELECT * FROM contact";
$sql=mysqli_query($connection,$data);
while($a=mysqli_fetch_assoc($sql)){
    ?>
    <tr>
        <td><?php echo $a['name'];?></td>
        <td><?php echo $a['email'];?></td>
        <td><?php echo $a['number'];?></td>
        <td><?php echo $a['address'];?></td>
        <td><img src="<?php echo $a['image'];?>"</td>
        <td><a href="update.php?fname=<?php echo $a['name'];?>">Update</a></td>
        <td><a href="delete.php?fname=<?php echo $a['name'];?>">Delete</a></td>
</tr>
    <?php
}
?>
</body>
</html>