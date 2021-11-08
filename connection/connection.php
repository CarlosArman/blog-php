<?php

$Host= "xlf3ljx3beaucz9x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"	;
$Username=	"gqcumaqrpb04wskb";	
$Password=	"u0hlcfc5007qyozp";	
$Port=	3306;	
$Database=	"m16uumwdgxqus2sg";

//Open a new connection to the MySQL server
$mysqli = new mysqli($Host, $Username, $Password, $Database);


//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}


?>