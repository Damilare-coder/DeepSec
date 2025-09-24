<?php

$hostname='localhost';
$username='root';
$password='';
$db='julycohort_db';


$connection= new mysqli($hostname,$username, $password,$db);

if (!$connection){
    echo 'not connected' .$connected->connect_error;
} else {
    echo 'connected successfully';
}



?>