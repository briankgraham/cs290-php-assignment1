<?php
session_start();


if (!isset($_SESSION['count'])){
	$_SESSION['count'] = 0;
}
if (!isset($_SESSION['user']) && !empty($_POST['username'])){
	$_SESSION['user'] = $_POST['username'];
}
else if(session_status() == PHP_SESSION_ACTIVE)
{
	++$_SESSION['count'];
}
echo '<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type = "text/css" href="stylez.css">
<title>content1</title>
</head>
<body>';


if (isset($_SESSION['user'])){
	echo "Hello " .$_SESSION['user']. " you have visited this page ".$_SESSION['count']." times before. Click <a href = \"http://web.engr.oregonstate.edu/~grahamb2/phpHW/logout.php\">here</a>  to logout.<br>
	<br>Click <a href = \"http://web.engr.oregonstate.edu/~grahamb2/phpHW/content2.php\">here</a>  to go to the Content2 page.";
}
else{
	echo "A username must be entered. Click <a href = \"http://web.engr.oregonstate.edu/~grahamb2/phpHW/content2.php\">here</a> to return to the login screen.";
}

echo '</body>
</html>';
?>