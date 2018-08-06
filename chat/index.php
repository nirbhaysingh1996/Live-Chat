<?php
include 'db.php';
session_start();
if ( empty( $_SESSION['email'] )) {
header("Location:login.php");

	} 
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<title>
chat system in php</title>
<script>
function ajax(){
	var req =new  XMLHttpRequest();
	req.onreadystatechange = function()
	{
		if(req.readyState == 4 && req.status == 200)
		{
			document.getElementById('chat').innerHTML = req.responseText;
			
			
			
		}
	}
	req.open('GET','chat.php',true);
	req.send();
}
	setInterval(function(){ajax()},1000);		
	
	

</script>
<script>
 $('.demo').scrollTop($('.demo')[0].scrollHeight);
</script>
<style>

</style>
</head>
<body onload="ajax();">
<div class="container" style="width:800px" >
<div  id ="chat_box" class="jumbotron"> 
<div class=""  id="chat" class="jumbotron">
</div></div>
<div class="jumbotron">
<form method="post" action="index.php">
     
<div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Type Your Message" name="msg" required>
      </div>
<input type="submit" name="submit" value="send it" />

</form>
<a href="logout.php"><input type="submit" name="logout" value="Log Out" /></a> 	
</div>
</div>
</div>

<?php
if(isset($_POST['submit'])){
	$msg=$_POST['msg'];
	$user1=$_SESSION['email'];
	$user2=$_SESSION['user2'];
	$name = $_SESSION['name'];
$query="INSERT INTO chat (name,message,user1,user2) values ('$name','$msg','$user1','$user2')";
$run =$con->query($query);
if($run)
{
	echo "<embed loop ='false' src='chat.wav' hidden='true' autoplay='true'/>";
}}
?>
</body>

</html>