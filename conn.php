<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "realestate";

if(!mysql_connect($host,$user,$password)){ //kalau connection not true
	die('oops connection problem !'.mysql_error()); //keluar error
}else{
	echo("database berjaya connect woi!");
}


if(!mysql_select_db($datbase)){ //kalau db salah
	die('oops database selection problem !  '.mysql_error()); //keluar error
}else{
	echo("ada error la nak pilih db.");
}

?>