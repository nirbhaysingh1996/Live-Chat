<?php 
include 'db.php';
session_start();
if ( empty( $_SESSION['email'] )) {
echo "please login to view chat history";
}
else
{
$user11 =$_SESSION['email'];
$user22 =$_SESSION['user2'];
?> <b><?php echo $_SESSION['email'];
	?></b> &nbsp <span> Chating with </span> <b><?php echo $_SESSION['user2'];?></b><?php
$query = "SELECT * FROM chat  WHERE ((user1 LIKE '%$_SESSION[email]%'  AND user2 LIKE '%$_SESSION[user2]%')OR
(user1 LIKE '%$_SESSION[user2]%'  AND user2 LIKE '%$_SESSION[email]%'))";
$run =$con->query($query);
while($row = $run->fetch_array()){
?><?php
if($row['user1']==$_SESSION['email']&& $row['user2']==$_SESSION['user2'])
{?>
<div id="chat_data" class="well well-sm" style="background-color:darkblue">
<span style="color:green" ><?php echo $row['name']; ?></span>  :
<span style="color:white;"><?php echo $row['message']; ?></span>
<span style="float:right; color:white"><?php echo formatDate($row['date']) ?></span>
</div>
<?php } ?>
<?php
if($row['user1']==$_SESSION['user2']&& $row['user2']==$_SESSION['email'])
{?>
<div id="chat_data" class="well well-sm" style="background-color:red">
<span style="color:green" ><?php echo $row['name']; ?></span>  :
<span style="color:white;"><?php echo $row['message']; ?></span>
<span style="float:right;"><?php echo formatDate($row['date']) ?></span>
</div>
<?php }?>
<?php }
}?>