<?Php
error_reporting(E_ERROR | E_PARSE);
$ab= $_POST['lus'];
$bc= $_POST['lpass'];
$cd= $_POST['rus'];
$de= $_POST['rpass'];
$ef= $_POST['rcpass'];
$js=mysqli_connect("localhost","root","","details");
if($js==true){
	echo"succ";
	
}
else{
	echo"not succ";
}
if(isset($_POST['submit'])){
	$qw=mysqli_query($js,"select * from login info where username='$lus' and password='$lpass'");
	if($qw==true){
		echo "<script>alert('success')</alert>";
	}
	else{
		echo"not";
	}
}

$qq=mysqli_query($js,"INSERT INTO `login info`(`username`, `password`, `confirmpass`) VALUES ('$cd','$de','$ef')");
if($qq==true){
	echo"succ";
	
}
else{
	echo"not succ";
}
?>

<html>
<head>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style3.css">
<div>
<form id="f1" action=""  method="post">
<p id="nm">user name</p>
<input type="text" placeholder="enter user name" id="uss" name="lus"><br>
<p id="nm">password</p>
<input type="password" placeholder="enter password" id="uss" name="lpass"><br>
<input type="submit" value="login" name="submit"  id="us2">
</form>
<form id="f1" action=""  method="post">
<p id="nm">user name</p>
<input type="text" placeholder="enter user name" id="uss" name="rus"><br>
<p id="nm">password</p>
<input type="password" placeholder="enter password" id="uss" name="rpass"><br>
<p id="nm">confirm password</p>
<input type="password" placeholder="enter password" id="uss" name="rcpass"><br>
<input type="submit" name="submit2" value="login"  id="us2">
</form>
</div>

</body>
</html>