<?php
include('connection.php');
if(isset($_POST['submit'])){
$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$contact=$_POST['contact'];
$image=$_POST['image'];
$email_id=$_POST['email'];
$sql="INSERT INTO schools (id,name,address,city,state,contact,image,email_id) VALUES('$id','$name','$address','$city','$state','$contact','$image','$email_id')";
$query=mysqli_query($connection,$sql);    
if($query){
    echo "New record created successfully!";
}
else{
    echo "Error: ".mysqli_error($connection);
}
}
?>
<html>
    <head>
        <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
        <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    </head>
    <body>
        <div id="root"></div>
        <script type="text/babel">
            const a={
                margin:'10px 0',
                display:'block',
                padding:'20px',
                borderRadius:'40px'
            }
            const b={
                backgroundColor:'#ff0',
                color:'#fff',
                padding:'15px 30px',
                margin:'10px 20%',
                borderRadius:'40px'
            }
            const c={
                color:'#fff',
                fontFamily:'Arial',
                margin:'20px 0 5px 5px',
                display:'block'
            }
            const d={
                margin:'20px 20%',
                backgroundColor:'#f00',
                padding:'10px 20%'
            }
            function Root(){
                return(
                    <form method="POST" action="data.php" style={d}>
                        <label style={c}>Id</label>
                        <input type="number" name="id" style={a} />
                        <label style={c}>Name</label>
                        <input type="text" name="name" placeholder="Enter your name" style={a} />
                        <label style={c}>Address</label>
                        <input type="text" name="address" placeholder="Enter your address" style={a} />
                        <label style={c}>City</label>
                        <input type="text" name="city" placeholder="Enter your city" style={a} />
                        <label style={c}>State</label>
                        <input type="text" name="state" placeholder="Enter your state" style={a} />
                        <label style={c}>Contact No.</label>
                        <input type="text" name="contact" placeholder="Enter your contact no." style={a} />
                        <label style={c}>Image</label>
                        <input type="text" name="image" placeholder="Choose image" style={a} />
                        <label style={c}>Email Address</label>
                        <input type="text" name="email" placeholder="Email address" style={a} />
                        <input type="submit" name="submit" value="Submit" style={b} />
                    </form>           
                );
            }
            ReactDOM.createRoot(document.getElementById("root")).render(<Root />);
        </script>
    </body>
</html>