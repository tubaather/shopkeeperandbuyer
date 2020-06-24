<?php 

include "header.php";

$id=$_GET['id'];

$sql="DELETE FROM users where id=".$id;

$result=mysqli_query($con,$sql);
if($result){
	header("location:view_user.php");
}else{
	echo mysqli_error($con);
}

?>