<?php
error_reporting(E_ERROR | E_PARSE);
$d1=mysqli_connect('localhost','root','','details');
	?><?Php
	


$d2="SELECT DISTINCT date FROM `detaill`";
$d3=mysqli_query($d1,$d2);
if($d2="SELECT * FROM `it`")
{?><a href ="detail.php"><center><input  type="button" id="de2" name="back" value="Back`"></center></a>
	<center><table id="ef" border="2px" cellpadding="20px">
<center><div id="de">
<form id="acb"  action="showatt.php" method="post">
<p id="df">Enter branch</p>
	<input type="text" class="ab" placeholder="type branch" name="branch" required>
	<p id="df">Enter the date</p>
	<input type="DATE" class="ab" placeholder="type date" name="date" required>
	<p id="df">Enter the semester</p>
	<input type="text" class="ab" placeholder="type sem" name="sem" required>
	
	<input type="submit" class="bc"name="submit" value="SHOW ATTENDANCE">
		   </form> 
	</div></center>
	
	<tr><td ID="DE2">DATE OF ATTENDANCE TAKEN </td></TR><?php
	
	while($d4=mysqli_fetch_array($d3)){
	?>
	<tr>
	<td id="de2"><?php echo $d4['date'] ?> </td>
		    
	</tr><?php }?></table>
	</center><?php
}?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body style=" background:url(bfgi1.JPG);"><form>
<?php s?>
<form>
</body>
</html>