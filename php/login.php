<!DOCTYPE html>
<html>

<head>
<title>Login</title>

<style>

form{
	text-align: center;
}
</style>


</head>

<body>

<form method="POST" id="form" action="">
NAME:<input type="text" name="username"><br>
PASS:<input type="password" name="pass"></br>
<input type="submit"  name="submit" value="Login">


</form>

</body>



</html>

<?php

$con=mysqli_connect("localhost","root","") or die(mysqli_error());
$db=mysqli_select_db('my_db',$con) or die(mysqli_error());

if(isset($_POST['submit']))
{
	$name=$_POST['NAME'];
	$pass$_POST['pass'];	
}

?>