<?php
// Your database credentials
$Host="";
$Username="";	
$Password="";	
$Port=	3306;	
$Database="";

//Open a new connection to the MySQL server
$mysqli = new mysqli($Host, $Username, $Password, $Database);


//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}


?>
