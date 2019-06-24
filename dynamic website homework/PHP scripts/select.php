<?php
$conn=new mysqli("localhost","id7615103_daroooo","daro123daro","id7615103_daro");
if($conn->connect_error)
die("connection error".$conn->connect_error );
$id=$_POST["id"];
//$name=$_POST["name"];
$sql="select * from person where id='$id'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo "id: ".$row["id"] ."  name: ".$row["name"] ."</br>" ;
		
	}
	
}
else
	echo"no result";
$conn->close();

?>