<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_tcytc = "localhost";
$database_tcytc = "dbTuCarroyTuCasa";
$username_tcytc = "root";
$password_tcytc = "root";

//$tcytc_conexion = mysql_pconnect($hostname_tcytc, $username_tcytc, $password_tcytc) or trigger_error(mysql_error(),E_USER_ERROR);

$mysqli = new mysqli($hostname_tcytc, $username_tcytc, $password_tcytc, $database_tcytc);
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//echo $mysqli->host_info . "\n";

?>