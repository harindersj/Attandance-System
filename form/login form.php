<?php
$b=$_POST['US'];
$c=$_POST['pass'];
$r=mysqli_connect('localhost','root','','fb');
$ff="INSERT INTO `fbb`(`name`, `pass`) VALUES ('$b','$c')";
$rr=mysqli_query($r,$ff);
if($ff==true){
	echo "true";
}
else{
	echo "false";
}
?><html>
<head>
</head>

<body>
<div class="loginbox">
<p>LOGIN HERE</p>
<form action="login form.php" name="loginform" method="post">
<p>username</p>
<input type="text" name="US" placeholder="enter username" required>
<p>password</p>
<input type="password" name="pass" placeholder="enter password" required>
<input type="submit" name="" value="submit" >
<a href="#">forget password</a>
</form>
</body>
</html>
