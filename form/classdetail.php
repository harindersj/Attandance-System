<?php
error_reporting(E_ERROR | E_PARSE);

?><html>
<head>
<link rel="stylesheet" type="text/css" href="form.css">
</head>

<body style="margin:0;
		background:url(bfgi.JPG);
		background-size:cover;
		background-repeat:no-repeat;
		background-position:center center;">
<form action="detail.php" id="form" method="post">
<p id="clss">CLASS DETAILS </p>  

<p id="clss">LOGIN ID <?php
echo $_POST['US'];
?>
</p>

<p class="p">SEM<p>
<input type="text" name="semester" class="input" placeholder="enter semester" required>
<p class="p">BRANCH<p>
<input type="text" name="branch" class="input" placeholder="enter BRANCH" required><br>

<p class="p">SUBJECT<p>
<input type="text" name="subject" class="input" placeholder="enter subject" required><br>

<p class="p">DATE</p>

<input type="text" name="date" class="input" placeholder="enter date" required><br>
<center>
<input type="submit" name="submit" class="login" value="OPEN" ><br>
<a href="classdetail.php"><input type="button" class="refresh" value="REFRESH"></a></center>
</form>
</body>
</html>