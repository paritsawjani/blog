<?php

//Database Connection.
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'blog';

$conn=new mySQLi($host,$user,$pass,$dbname);

//Error will be shown if connection to the database fails.
if($conn->connect_error) {
    die('Failed to connect to database:' . $conn->connect_error);
}

?>