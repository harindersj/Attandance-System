<?php
$con=mysqli_connect('localhost','root','','class');
if($con)
{
echo"connected";
}
else
{
echo"not connect";
}
?>