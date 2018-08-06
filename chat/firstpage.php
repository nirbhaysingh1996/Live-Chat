	<?php
include 'db.php';
session_start();
?>
<html>
<head>
<title>
first page
</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container">
<form name="match_data" action="firstpage.php" method="get">

<div class="row">
<?php
$query = "SELECT * FROM register  ORDER BY id DESC";
$run =$con->query($query);
while($row = $run->fetch_array()){
	if($_SESSION['email']==$row['email'])
	continue;
	?>

		<a href="index.php"><div class="col-lg-3 col-md-6 col-sm-12">
	<button value="<?php echo $row['email'];  ?>" name="submit">	
	<div class="well well-lg">
		<image class="img-responsive img-circle" style="height:200px;width:200px" src="images/<?php echo $row['image'];?>" />
		<h3><?php echo $row['name']; ?></h3>
		</div></button></a>
 
 
 </form>

</div>
<?php
}
http://192.168.43.79/
?>

<?ph
if(isset($_GET['submit']))
{
	$_SESSION["user2"]= $_GET['submit'];
     
	 

header("Location:index.php");
	echo $_SESSION['user2'];
	echo $_SESSION['email'];
	
}
?>
</body>
</html>