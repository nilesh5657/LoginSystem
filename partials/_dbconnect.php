<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "usser";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    echo ("Not connected....because of error " . mysqli_connect_error());
}
else
?>