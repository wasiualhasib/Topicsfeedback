<?php
$servername="localhost";
$username="root";
$password="";
$dbName="new_topicsfeedback";

$dbConnect=new mysqli($servername,$username,$password,$dbName);

if ($dbConnect->connect_error) {
	die("Connect error").$error->connect_error;	
}
echo "Connect Success <br>";



?>