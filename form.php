<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "Adarsh_Ar";

$con = mysqli_connect($server, $username, $password, $dbname);
 
if(!$con){
    echo "not connected";
}
else{
    echo "connect";
}

?>
