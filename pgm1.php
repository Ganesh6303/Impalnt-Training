<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('connect.php');
if (isset($_REQUEST['username'])){
$username = stripslashes($_REQUEST['username']);
$username = mysqli_real_escape_string($con,$username);
$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($con,$email);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
$mobile = stripslashes($_REQUEST['mobile']);
$mobile = mysqli_real_escape_string($con,$mobile);
$trn_date = date("Y-m-d H:i:s");
$query = "INSERT into `user` (username, password, email, trn_date, mobile)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$mobile')";
$result = mysqli_query($con,$query);
if($result){
echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
}
}else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<br/><input type="text" name="username" placeholder="Username" required />
<br/><input type="email" name="email" placeholder="Email" required />
<br/><input type="password" name="password" placeholder="Password" required />
<br/><input type="NUMBER_FORMAT" name="mobile" placeholder="mobile" required /> 
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>