<html>
<head>
<title>Comment System</title>
</head>
<body>
<?php
include('user.php');
//mysql is magically connected and to the right database (mysqli)
$database	= new mysqli("localhost","root","","comment_sys");
$user		= new user($database,1);
$user->getData();
if(isset($_POST['user_button']) && strlen($_POST['user_input'])>0){
	$user->setData($_POST['user_input']);
	header("Location: http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']);
}
?>
<form action="index.php" method="post">
	<input type="text" name="user_input" placeholder="comment" /> <br />
    <input type="submit" name="user_button" value="Submit" />
</form>
</body>
</html>
