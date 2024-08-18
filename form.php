<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "Adarsh_Ar";

$con = mysqli_connect($server, $username, $password, $dbname);
 
if(!$con){
    echo "not connected";
}

$Name =$_POST['name'];
$gametag =$_POST['gametag'];
$country =$_POST['country'];
$email =$_POST['email'];
$year =$_POST['year'];
$best =$_POST['best'];
$sql = INSERT INTO `user_data`(`NAME`, `GameTag`, `COUNTRY`, `Email`, `How Many Year have you Been Playing Minecraft`, `Menorable Day`) VALUES ('$name','$gametag','$country','$email','$year','$best')

$result = mysqli_query($con , $sql);

if($result)
{
    echo "data submited";

}
else 
{
    echo "error";
}


?>
