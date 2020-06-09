<?php
$serverName = "testdbtp043731.database.windows.net";

$connectionOptions = array(
"Database" => "testdbtp043731",
"Uid" => "apuadmin",
"PWD" => "Amanina@1998");

//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn)
{
die("Error connection: ".sqlsrv_errors());
}
echo "DB Server: Connected!";
}

?>
