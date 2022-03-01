<?php

$conexion = pg_connect("host=172.17.0.11 port=5432 dbname=sampledb user=sample password=sample");

if($conexion) {
	
	print_r("Conexión a la base de datos");
	echo "<br />\n";
	echo "<br />\n";
	
	$result = pg_query($conexion, "SELECT * FROM accounts WHERE user_id > 0");
	//var_dump(pg_fetch_all($result));
		
	while ($row = pg_fetch_row($result)) {
		echo "<b>User_ID:</b> $row[0] \t";
		echo "<b>Name:</b> $row[1] \t";
		echo "<b>Mail:</b> $row[3] \t";
		echo "<br />\n";
	}
	
	
} else {
	print_r("Sin conexión a la base de datos");
}

