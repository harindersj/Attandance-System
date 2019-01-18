<?php
$sno= $_POST['sno'];
$UID= $_POST['UID'];
$name= $_POST['name'];
$atd= $_POST['atd'];

$con=mysqli_connect('localhost','root','','class');
$doo="INSERT INTO `attendence`(`Sno`, `uid`, `name`,`attendence`) VALUES ('$sno','$UID','$name','$atd')";
$run=mysqli_query($con,$doo);

if($run == TRUE)
{
	echo"succ<a href='index.php'>click here to inert more</a>";
	}
	else
	{
		echo"not succes";
	}

?>