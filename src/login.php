<?php
echo '<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type = "text/css" href="stylez.css">
<title> Login Page </title>
</head>
<body>
<form action = "content1.php" method = "post">
Enter your username:<input type = "text" name = "username"><br>
<input type = "submit" value = "Login">
</form>
</body>
</html>';
?>


<?php 

// Second way to save a string in a variable
echo <<< EOT

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type = "text/css" href="stylez.css">
<title> Login Page </title>
</head>
<body>
<form action = "content1.php" method = "post">
Enter your username:<input type = "text" name = "username"><br>
<input type = "submit" value = "Login">
</form>
</body>
</html>

EOT

$hello = "World";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type = "text/css" href="stylez.css">
<title> Login Page </title>
</head>
<body>
<?php echo "I'm great"; ?>
<form action = "content1.php" method = "post">
Enter your username:<input type = "text" name = "username"><br>
<input type = "submit" value = "Login">
</form>
</body>
</html>