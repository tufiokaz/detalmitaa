<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
		<title>Detalmita</title>
		<meta charset="UTF-8">		
		<script src="manager.js"></script>
	</head>
	<body>


<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db	  = "detalmita";
	$link = mysqli_connect($host, $user, $pass, $db);
	
// Jei	neveikia //
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}
/////////////////

	header('Content-Type: HTML; charset=UTF-8');

	$csv = array_map('str_getcsv', file('database.csv'));
	
	array_walk($csv, function(&$a) use ($csv) {
		$a = array_combine($csv[0], $a);
	});

	array_shift($csv);
		
	foreach($csv as $t){
		echo "Marke: " . $t['marke']. " Modelis: " . $t['modelis']. " Metai: ". $t['metai']. " Dalis: ". $t['dalis']. " Kiekis sandelyje: " . $t['likutis']. "<br>"; 
		//echo "<option>" . $t['marke'] . "</option>";
		//echo "Marke: " . $t['MARKE']. " Modelis: " . $t['MODELIS']. " Metai: ". $t['METAI']. " Kiekis sandelyje: " .$t['LIKUTIS']. "\n"; 	
		//echo "Marke: " . $t['MARKE']; 
		// output data of each row	SS
		//echo "Metai: " . $t['METAI']; 		
		//$query = "INSERT INTO manufacturers (manufacturer) VALUES ('".$t['modelis']."') ON DUPLICATE KEY UPDATE manufacturer = manufacturer;";
		
	}

	

mysqli_close($link);

if (!$link)

?>

		
			
	</body>
	</html>


