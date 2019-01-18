<?php
error_reporting(E_ERROR | E_PARSE);
$d1=mysqli_connect('localhost','root','','details');
	?><?Php
$d22=$_POST['date'];
$d2=$_POST['branch'];
$d33=$_POST['sem'];
function show2(){
	global $d22;
	global $dd;
	global $d2;
	global $d1;
	
$d2="SELECT * FROM `detaill` WHERE  date='$d22' AND branch='$d2' AND semester='$d33'";
$d3=mysqli_query($d1,$d2);
if($d2="SELECT * FROM `detaill` "){?>
	
	<div><p style="color:black;	font-family:Bernard MT Condensed;	font-size:20px;	background:lightblue;		text-align:center;		border-radius:20px;">
	   TODAY DATE:<?php echo date("d-m-y") ?> </P>
	
	<div><p style="color:black;	font-family:Bernard MT Condensed;	font-size:20px;	background:lightblue;		text-align:center; border-radius:20px;">
	    Attendence of date:<?php echo $d22 ?></div>
	<a href ="view.php"><center><input type="button" id="de3" name="back" value="Back`"></center></a><br>
	<center><input type="submit"  id="de2" value="refresh"></center>
	<INPUT TYPE="date">
	<center><table id="ef" border="2px" cellpadding="20px">
	
	<tr><td id="gh">s.no</td>
	<td id="gh">NAME</td>
	<td id="gh">UID</td>
	<td id="gh">BRANCH</td>
	<td id="gh">semester</td>
	<td id="gh">Attendence</td>
	</tr>
	<form action="" method="post">
	<?php
	
	while($d4=mysqli_fetch_array($d3)){
	?>
	<tr>
	<td id="gh"><?php echo $d4['s.no'] ?></td>
	<td id="gh"><?php echo $d4['name'] ?></td>
	<td id="gh"><?php echo $d4['UID'] ?>
	<td id="gh"><?php echo $d4['branch'] ?>	
	<td id="gh"><?php echo $d4['semester'] ?>	
	<td id="gh"><?php echo $d4['attendence']?>
	
		   
		    
	</tr><?php }?></form></table>
	
	</center><?php
}
else
{
	echo"error";
}
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet2" type="text/css" href="style2.css">
</head>
<body style=" background:white;"><form>
<?php show2()?>
<form>
</body>
</html>