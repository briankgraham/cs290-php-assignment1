
<?php
echo '<!DOCTYPE html>
<html>
<head>
<title>multtable.php</title>
<link rel="stylesheet" type = "text/css" href="stylez.css">
</head>

<body>';
$minCand = $_GET['min-multiplicand'];
$maxCand = $_GET['max-multiplicand'];
$minMult = $_GET['min-multiplier'];
$maxMult = $_GET['max-multiplier'];
$tempCand = $minCand;
$tempMult = $minMult;
$originalMult = $minMult;
$multiCandArray = array();
$multiplierArray = array();
$array2d = array(array());
$plierLength = $maxMult - $minMult + 2;
$candLength = $maxCand - $minCand + 2;
$counter = 0;
$i = 4;
if (!ctype_digit($minCand)){
	echo "min-multiplicand is not an integer.<br>";
	$i--;
}
if (!ctype_digit($maxCand)){
	echo "max-multiplicand is not an integer.<br>";
	$i--;
}
if (!ctype_digit($minMult)){
	echo "min-multiplier is not an integer.<br>";
	$i--;
}
if (!ctype_digit($maxMult)){
	echo "max-multiplier is not an integer.<br>";
	$i--;
}
if ($minCand == ''){
	echo "Missing parameter [min-multiplicand]<br>";
	$i--;
}
if ($maxCand == ''){
	echo "Missing parameter [max-multiplicand]<br>";
	$i--;
}
if ($minMult == ''){
	echo "Missing parameter [min-multiplier]<br>";
	$i--;
}
if ($maxMult == ''){
	echo "Missing parameter [max-multiplier]<br>";
	$i--;
}
if ($minCand > $maxCand){
	echo "Minimum [multiplicand] larger than maximum.";
	$i--;
}
if ($minMult > $maxMult){
	echo "Minimum [multiplier] larger than maximum.";
	$i--;
}

if ($i == 4)
{
	echo '<p>
	<table><tr>';
	for ($x = 0; $x < $candLength; $x++){
		if ($x != 0){
			echo "</tr><tr><td>$minCand</td>";
			$minCand++;
			$counter++;
			if ($counter > $plierLength){ break; }
			$tempCand = $minCand - 1;
			$tempMult = $originalMult;
		}
		for ($y = 0; $y < $plierLength; $y++){
			if ($x == 0){
				if ($y == 0){
					echo "<td>&nbsp&nbsp&nbsp&nbsp</td>";
				}
				else{
					echo "<td>$minMult</td>";
					$minMult++;
				}	
			}
			if ($x != 0 && $y != 0){
				echo "<td>" .$tempCand*$tempMult. "</td>";
				$tempMult++;
			}
		}
	}
	echo '</table>';
}

echo '</body>
</html>';
?>