<?php

$server="localhost";
$user= "root";
$password="";
$db="dummy";

$conn=mysqli_connect($server, $user, $password, $db);

if(!$conn){
    echo "Our database server is down, Sorry for the inconvinience! ". mysqli_error($conn);
}

?>