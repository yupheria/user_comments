<html>
<head>
<title>Comment System</title>
<script src="myJS.js"> </script>
</head>
<body>
<?php
include('user.php');
//mysql is magically connected and to the right database (mysqli)
$database	= new mysqli("localhost","root","","comment_sys");
$user		= new user($database,1);
$user->getData();
if(isset($_POST['user_button'])){
	$user_comment = $_POST['user_input'];
	if(!preg_match("/^[a-zA-Z0-9 ]+$/", $user_comment)) { 
		echo "<font color='red'> Invalid Comment!</font>";
    } else {
		$user->setData($user_comment);
		header("Location: http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']);
	}
}
?>
<form action="index.php" method="post" onSubmit="return verifyComment()">
	<input type="text" name="user_input" placeholder="comment" id="user_input"/> <br />
    <input type="submit" name="user_button" value="Submit" />
</form>
</body>
</html>
