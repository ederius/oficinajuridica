<?php
error_reporting('E_ALL');
$mysql_host = "localhost";
$mysql_database = "db_juridica";
$mysql_user = "root";
$mysql_password = "";



$conec_db=mysql_connect($mysql_host, $mysql_user, $mysql_password) ;
if(!$conec_db)
{
	echo" no se conecto con el servidor ";
	
}
$selec_db=mysql_select_db($mysql_database);
 
if(!$selec_db)
{
	echo" no se encontro la base de datos ";
	
}

mysql_query("SET character_set_results = 'utf8′, character_set_client = 'utf8′, character_set_connection = 'utf8′, character_set_database = 'utf8′, character_set_server = 'utf8′",$conec_db);

?>