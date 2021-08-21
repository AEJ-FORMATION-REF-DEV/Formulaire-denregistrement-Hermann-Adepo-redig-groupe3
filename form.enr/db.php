<?php //mysqli

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "projet_formigs";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

if(!$connection)
{
    die("Probleme d'acces à la base de données" . mysqli_connect_error());   
}
?>