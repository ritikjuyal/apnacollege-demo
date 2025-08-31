<?php
include('connection.php');
$sql="SELECT name,address,city,image FROM schools";
$query=mysqli_query($connection,$sql);
?>
<html>
    <head>
        <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
        <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>        
        <style>
            tr:nth-child(odd){
                background-color: #ff0;
            }
            tr:nth-child(even){
                background-color: #f00;
            }
            table{
                border-collapse:collapse;
                width: 50%;
                text-align:center;
            }
            th{
                padding:10px;
            }
            th,td{
                border:1px solid #000;
                color: #fff;
                font-family:Arial;
            }
            img{
                width:150px;
                height:100px;
                padding:10px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Image</th>
            </tr>
            <?php
                while($a=mysqli_fetch_assoc($query)){
                    $name=$a['name'];
                    $address=$a['address'];
                    $city=$a['city'];
                    $image=$a['image'];
                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td>$address</td>";
                    echo "<td>$city</td>";
                    echo "<td><img src=$image></td>";
                    echo "</tr>";
                }
            ?>
        </table>    
    </body>
</html>