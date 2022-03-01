<?php

$conexion = pg_connect("host=172.17.0.11 port=5432 dbname=sampledb user=sample password=sample");

if($conexion) {
	
	print_r("Conexión a la base de datos");
	
	$result = pg_query($conexion, "SELECT * FROM accounts WHERE user_id = 1");
	//var_dump(pg_fetch_all($result));
		
	while ($row = pg_fetch_row($result)) {
		echo "User_ID: $row[0] \t";
		echo "Name: $row[1] \t";
		echo "Mail: $row[3] \t";
		echo "<br />\n";
	}
	
	
} else {
	print_r("Sin conexión a la base de datos");
}

