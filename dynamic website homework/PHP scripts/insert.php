<?php
$conn=new mysqli("localhost","id7615103_daroooo","daro123daro","id7615103_daro");
if($conn->connect_error)
die("connection error".$conn->connect_error );
$id=$_POST["id"];
$name=$_POST["name"];
$sql="insert into person (id,name)values('$id','$name')";
if($conn->query($sql)==true)
echo "row inserted successfuly";
else
	echo"error";
$conn->close();

?>