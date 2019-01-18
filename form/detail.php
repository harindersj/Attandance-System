<?php
	
error_reporting(E_ERROR | E_PARSE);


$d1=mysqli_connect('localhost','root','','details');
/*truncate command*/
if(isset($_POST['truncate'])){
	$tru="truncate table atttt";
	$r=mysqli_query($d1,$tru);
	}
	if($r==true){
		echo"<script>alert('success')</script>";	
	}



$flag=0;
if(isset($_POST['submit']))
  {
	    foreach($_POST['check'] as $id=>$check)
	    {
			$sno=$_POST['sno'][$id];
		
			$name=$_POST['studentname'][$id];
			$UID=$_POST['studentuid'][$id];
			$branch=$_POST['branch'][$id];
			$date=$_POST['date'][$id];
			$sem=$_POST['sem'][$id];
			$d=mysqli_query($d1,"INSERT INTO `detaill`(`s.no`, `name`, `UID`, `branch`,`date`,`attendence`,`semester`) VALUES ('$sno','$name','$UID','$branch','$date','$check','$sem')");
		}
	}
			if($d==true)
			{
				$flag=1;
			}?>

<?php
echo $_POST['bd'];
$df=$_POST['bd'];
$dv=$_POST['dv'];
$d2="SELECT * FROM `atttt` where branch='$df' AND sem='$dv'";

$d3=mysqli_query($d1,$d2);
?>
		<html>
		<head>
			<link rel="stylesheet" type="text/css" href="style2.css">
		</head>
		<body 
							style="background:url(PIC/A1.JPG);
							background-size:cover;	   ">

	
<div id="ds">
<form action="" method="post">
IT:<input id="xz" type="radio" value="IT" name="bd">
CSE:<input id="xz" type="radio" value="CSE" name="bd">
ECE:<input id="xz" type="radio" value="ECE" name="bd">
ME:<input id="xz" type="radio" value="ME" name="bd">
CE:<input id="xz" type="radio" value="CE" name="bd"><br>

1:<input id="xz" type="radio" value="1" name="dv">
2:<input id="xz" type="radio" value="2" name="dv">
3:<input id="xz" type="radio" value="3" name="dv">
4:<input id="xz" type="radio" value="4" name="dv">
5:<input id="xz" type="radio" value="5" name="dv">
6:<input id="xz" type="radio" value="6" name="dv">
7:<input id="xz" type="radio" value="7" name="dv"><br>
<input type="submit" id="yz" value="open" name="submit3"></form></div>
<div>
		<?php if($flag==1)
		{													
				?><p id="true"> Attendace is Success</p><?php
		} 
			else
		{
			?> <p id="false">Attendace is not Done</p><?php
		}
?> 
</div>
<div> 		<form action="" method="post">		
		<center><input type="submit" id="de2" name="truncate" value="New Record"></center><br>
			</form>
</div>

<div> 				
		<a href="insert.php"><center><input type="button" id="de2" name="insert" value="Add or Remove student"></center></a><br>
</div>
<div id="ip">
				<a href ="view.php"><center><input  type="button" id="de2" name="view" value="View Attendence`"></center></a>
</div>
<?php
		if($d2="SELECT * FROM `atttt`")
	{
			?><div>
		<form action=""  method="post">
					<center>
			<table cellpadding="20px" cellspacing="10px" border="2px" id="ab">
				<tr><td id="cd"><p>s.no</p></td>
					<td id="cd"><p>NAME</p></td>
					<td id="cd"><p>UID</p></td>
					<td id="cd"><p>Date</p></td>
					<td id="cd"><p>BRANCH</p></td>
					<td id="cd"><p>SEMESTER</p></td>
					<td id="cd"><p>Attendence</p></td>
				</tr>
	
<?php
	    $counter=0;
			while($d4=mysqli_fetch_array($d3))
	{
?>
	
		<tr>
			<td id="bc"><?php echo $d4['s.no'] ?></td>
				<input type="hidden" value="<?php echo $d4['s.no'] ?>" name="sno[]">
			<td id="bc"><?php echo $d4['name'] ?></td>
				<input type="hidden" value="<?php echo $d4['name'] ?>" name="studentname[]">
			<td id="bc"><?php echo $d4['UID'] ?> </td>
				<input type="hidden" value="<?php echo $d4['UID'] ?>" name="studentuid[]">
			<td id="bc"><?php echo date("y-m-d") ?></td>
				<input type="hidden"  value="<?php echo date("y-m-d") ?>" name="date[]">
			<td id="bc"> <?php echo $d4['branch'] ?></td>
				<input type="hidden" value="<?php echo $d4['branch'] ?>" name="branch[]">
			<td id="bc"><?php echo $d4['sem']?></td>
				<input type="hidden"  value="<?php echo $d4['sem'] ?>" name="sem[]">
			
			<td id="bc"><input type="radio" name="check[<?php echo $counter; ?>]" value="Present" > present<input type="radio" name="check[<?php echo $counter; ?>]" value="Absent">absent</td>
<?php
		$counter++;
    }?>
            </tr>
			</table>
				<input type="submit" name="submit" id="hi" value="SUBMIT"> 
	</form>
	</center>
	</div>
<?php
}
			else
		{
			echo"error";
		}

?>
<style>
#xz{
	
	width:20px;
	height:20px;

	}
#yz{
	text-align:center;
	width:60px;
	height:30px;
	border-radius:20px;
}
#ds{
	margin-left:30%;
	width:30%;
	border-radius:20px;
	opacity:0.8;
	background:white;
	
}
</style>
</body>
</html>