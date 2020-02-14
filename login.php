<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('connect.php');
session_start();
if (isset($_POST['username'])){
$username = stripslashes($_REQUEST['username']);
$username = mysqli_real_escape_string($con,$username);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
$query = "SELECT * FROM `user` WHERE username ='$username' and pasword ='".md5($password)."'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);
if($rows == 1)
{
 header("Location:pgm1.php");
 }else{
echo "<h3> Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a>";
}
}else{
?>
<div class="form">
<h1>Login</h1>
<form name="login" action="" method="post">
<br/><input type="text" name="username" placeholder="Username" required />
<br/><input type="password" name="password" placeholder="Password" required />
<input type="submit" name="login" value="login" />
</form>
</div>
<?php } ?>
</body>
</html>