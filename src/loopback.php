
<?php 
if($_SERVER['REQUEST_METHOD'] == 'GET'){
	if (empty($_GET)){
		header('Content-type: application/json');
		$arr = array('Type' => '[GET]', 'parameters' => null);
		echo json_encode($arr);
	}
	else{
		header('Content-type: application/json');
		$arr = array('Type' => '[GET]', 'parameters' => $_GET);
		echo json_encode($arr);
	}
	
} 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (empty($_POST)){
		header('Content-type: application/json');
		$arr = array('Type' => '[POST]', 'parameters' => null);
		echo json_encode($arr);
	}
	else{
	header('Content-type: application/json');
	$arr = array('Type' => '[POST]', 'parameters' => $_POST);
	echo json_encode($arr);
	}
}
?>
