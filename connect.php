<?php

$conexion = pg_connect("host=172.30.225.222 port=5432 dbname=phpsampledb user=sample password=sample");

if($conexion) {
	$result = pg_query($conexion, "SELECT * FROM accounts WHERE user_id = 1");
	//var_dump(pg_fetch_all($result));
	
	
	while ($row = pg_fetch_row($result)) {
	echo "User_ID: $row[0] \t";
	echo "Name: $row[1] \t";
	echo "Mail: $row[3] \t";
	echo "<br />\n";
	
	print_r("Conexión a la base de datos");
	
} else {
	print_r("Sin conexión a la base de datos");
}

