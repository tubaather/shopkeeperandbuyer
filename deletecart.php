<?php 

include "header.php";

$id=$_GET['id'];

$sql="DELETE FROM usercart where id=".$id;

$result=mysqli_query($con,$sql);
if($result){
	header("location:view_cart.php");
}else{
	echo mysqli_error($con);
}

?>