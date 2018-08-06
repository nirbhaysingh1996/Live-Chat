<?php 
include 'db.php';
$c=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  
  body  {
    background-image: url("wallpaper.jpg");
    
}
  </style>
  
</head>
<body>

<div class="container" style="padding:10px; width:500px ">
<h1 style="color:darkwhite ;text-align:center "><strong>Student Details</strong></h1>
<div class="jumbotron" style="width:600px">
  
  <form class="form-horizontal" action="Register.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Conatct No:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" placeholder="Enter Contact no" name="phone" required>
      </div>
    </div>
   
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="cpassword" placeholder="Enter  password Again" name="cpassword" required>
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Upload DP:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="cpassword" value="upload" name="image" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>
 <?php
if(isset($_POST['submit'])){
	$v1=rand(1111,9999);
$v2=rand(1111,9999);
$v3=$v1.$v2;
$v3=md5($v3);
$fnm = $_FILES["image"]["name"];
$dst ="./images/".$v3.$fnm;
move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
$image = $v3.$fnm;
	$name = $_POST['name'];
	$email=$_POST['email'];
	$phone = $_POST['phone'];
	$password= $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$query1 = "SELECT * FROM register";
$run =$con->query($query1);
while($row = $run->fetch_array()){
	if($row['email'] ==$email)
{
	$c=1;
}
}
if($c==0)
{
$query="INSERT INTO register (name,email,phone,password,cpassword,image) values ('$name','$email','$phone','$password','$cpassword','$image')";
$run =$con->query($query);
}
else {
	echo "registered earlier";
}
if($run)
{
	echo '<script language="javascript">';
	echo 'alert("Registerd Sucessfully")';
	echo '</script>';
	
}
if($c==0)
{
header("refresh:1;url=login.php");
}
}
?>
</body>
</html>
