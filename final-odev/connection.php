<?php
$server="localhost";
$username="root";
$password="";
$dbName="website";


$conn = mysqli_connect($server,$username,$password,$dbName);
if(!$conn){
    die("mysqli_connect_error".mysqli_connect_error());
}
?>