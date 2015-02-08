<?php
session_start();

if (!isset($_SESSION['user'])){
	header('Location: http://web.engr.oregonstate.edu/~grahamb2/phpHW/login.php');
	echo "Returning to the login screen.";
}
echo '<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type = "text/css" href="stylez.css">
<title>content1</title>
</head>
<body>';

if (isset($_SESSION['user'])){
	echo "Click <a href = \"http://web.engr.oregonstate.edu/~grahamb2/phpHW/content1.php\">here</a> to return to Content1.";
}


echo '</body>
</html>';
?>