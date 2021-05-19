	<?php
//Aqui va el localhost, el root por defecto, la contraseña en mi caso no tengo, y el nombre de la base de datos
$conexion = mysql_connect("localhost", "root","","food_db");
mysql_database("food_db",$conexion);//cambiar nombre de base de datos segun se tenga
?>