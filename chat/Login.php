<?php 
include 'db.php';
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
<h1 style="color:darkwhite ;text-align:center "><strong>Login Details</strong></h1>
<div class="jumbotron" style="width:600px">
  
  <form class="form-horizontal" action="Login.php" method="post">
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
      </div>
    </div>
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-6">
        <button type="submit" name="submit" class="btn btn-default">Login</button>
      </div>
	  <div class="col-sm-6">
		<button type="submit" name="Register" Class="btn btn-default">Register</button>
	  </div>
    </div>
  </form>
  </div>
</div>
<?php
session_start();
if(isset($_POST['submit'])){
	if(count($_POST)>0)
	{
		$conn = mysql_connect("localhost","root","");
mysql_select_db("chat",$conn);
	$result = mysql_query("SELECT * FROM register WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["email"] = $row['email'];
$_SESSION["name"] = $row['name'];
echo "good";
} else {
echo $message = "Invalid Username or Password!";
}
}
}
if(isset($_SESSION['email'])) {
header("location:firstpage.php");
}
?>
</body>
</html>