<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db	  = "tevuko_duombaze";
	$link = mysqli_connect($host, $user, $pass, $db);
	$query = "SELECT * FROM `manufacturers` ORDER BY `manufacturers`.`manufacturer` ASC";

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

	header('Content-Type: HTML; charset=UTF-8');
	$csv = array_map('str_getcsv', file('database.csv'));
	array_walk($csv, function(&$a) use ($csv) {
	$a = array_combine($csv[0], $a);
	});

	array_shift($csv);
		
	foreach($csv as $t){
		
		//echo "Marke: " . $t['MARKE']. " Modelis: " . $t['MODELIS']. " Metai: ". $t['METAI']. " Kiekis sandelyje: " .$t['LIKUTIS']. "<br>"; 
		echo "<option>" . $t['MARKE'] . "</option>";
		//echo "Marke: " . $t['MARKE']. " Modelis: " . $t['MODELIS']. " Metai: ". $t['METAI']. " Kiekis sandelyje: " .$t['LIKUTIS']. "\n"; 	
		//echo "Marke: " . $t['MARKE']; 
		// output data of each row	
		//echo "Metai: " . $t['METAI']; 		
		$query = "INSERT INTO manufacturers (manufacturer) VALUES ('".$t['MARKE']."') ON DUPLICATE KEY UPDATE manufacturer = manufacturer;";
	}

	

mysqli_close($link);




?>