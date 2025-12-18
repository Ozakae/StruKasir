<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "kasir";

$kon = mysqli_connect($host, $user, $pass, $db);
if(!$kon){
    die("Ga konek ke database deh... : " . mysqli_connect_errno());
}
?>