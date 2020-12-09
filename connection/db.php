<?php 
$db = mysqli_connect("localhost", "root", "", "oxford_college");
if(!$db){
echo "<h1>DATABASE CONNECTION ERROR</h1>";
die();
}
?>