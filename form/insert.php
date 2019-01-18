<?php

error_reporting(E_ERROR | E_PARSE);

$UID= $_POST["UID"];
$sub =$_POST["name"];
$branch =$_POST["branch"];
$sem =$_POST["sem"];
echo $_POST["branch"];
$con=mysqli_connect('localhost','root','','details');
if(isset($_POST['submit']))
{
$query="INSERT INTO `atttt`( `name`, `UID`, `branch`,`sem`) VALUES ('$sub','$UID','$branch','$sem')";
$run=mysqli_query($con,$query);
}
if(isset($_POST['submit2']))
{
$query2="delete from atttt where(UID='$branch2')";

$run2=mysqli_query($con,$query2);
}
?><div><?php
if($run == TRUE)
{
	echo"<script>alert('successfully inserted');</script>";
	}
	else{
		echo"not success";
	}
	?></div><?php
	if($run2 == TRUE)
{
	echo"<script>alert('success removed')</script>";
	}
	else
	{
		echo"<script> alert(not succes) </script>";
	}

?>
<html>
<head>
<style>
#at{
		width:60%;
		margin:40px;
		margin-left:30%;;
		border-radius:20px;
		background-color:#17202A;
	    opacity:0.8;
	}
	
	
	.t1{
		margin-left:30px;
		font-family:Bernard MT Condensed;
		background:#17202A;
		color:white;
		text-align:center;
	}
	#table{
		
	}
	.in{
		background:transparent;
		outline:none;
		color:white;
		margin-left:20px;
		margin:10px;
		border-style:hidden;
		border-bottom-style:ridge;
	}
	.p{
		margin:20px;
		border-radius:10px;
		outline:none;
		font-family:Bernard MT Condensed;
		background:white;
		text-align:center;
		width:50px;
		opacity:0.8;
	}
	.a{
		margin:20px;
		border-radius:10px;
		outline:none;
		font-family:Bernard MT Condensed;
		background:white;
	}
	.a:hover{
		background:red;
	}
	.p:hover{
		background:green;
	}
	
	#de2{
	width:300px;
	height:30px;
	margin:10px;
	text-align:center;
	font-size:15px;
		font-family:Bernard MT Condensed;
	border-radius:20px;
	background:black;
	color:white;
}
	#de3{
	width:300px;
	height:30px;
	margin:10px;
	text-align:center;
	font-size:15px;
		font-family:Bernard MT Condensed;
	border-radius:20px;
	background:black;
	color:white;
}

	#de2:hover{
		background:lightblue;
	}
	
	#de3:hover{
		background:red;
	}
</style>
</head>
<body style="background:url(ss.JPEG);
background-position:bottom;
background-size:cover;">
<center><a href="detail.php"><input id="de3" type="button" value="back"></a></center>
<div>
<form id="at" method="post">
<table id="table">
<tr><p class="t1" style="font-size:20px;"> Add New Students</p></tr>
<tr><td><p class="t1">UID</p></td>
<td><p class="t1">NAME</p></td>
<td><p class="t1">BRANCH</p></td>
<td><p class="t1">SEM</p></td></tr>

<tr>
           <td><input type="text" class="in" name="UID" placeholder="enter UID" required></td>
		   <td><input type="text" class="in" name="name" placeholder="enter name"required></td>
		   <td><input type="text" class="in" name="branch" placeholder="enter branch" required></td>
		   <td><input type="text" class="in" name="sem" placeholder="enter sem" required></td>
		   
</tr> 
			<tr><center><td colspan="5"><input type="submit" id="de2"  name="submit" value="enter"/></center>
</tr></table></form></div><br>
<div>
<form id="at" method="post">
<table id="table">
<tr><p class="t1" > Remove Student</p></tr>
<td><p class="t1">UID</p></td>
<td><p class="t1">NAME</p></td>
<td><p class="t1">SEM</p></td>
<tr>
           <td><input type="text" class="in" name="UID2" placeholder="enter UID" required></td>
		   <td><input type="text" class="in" name="name2" placeholder="enter name"></td>
		    <td><input type="text" class="in" name="sem2" placeholder="enter sem" required></td>
		  
</tr> 
			<tr><center><td colspan="5"><input type="submit" id="de3" name="submit2" value="delete"/></center>
</tr></table></form></div>
<br>
</body>
</html>