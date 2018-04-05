<?php
	// connect to db
	mysql_connect("localhost","root","");
	mysql_select_db("book_worm_library");
	require_once("grid.php");
	$grid = new Grid("users", array(
	"save"=>true,
	"delete"=>true
			  ));

?>