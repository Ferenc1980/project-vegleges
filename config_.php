<?php
$host = 'localhost';
$db_name = 'matfer';
$db_username = 'matfer'; 
$db_password = 'Szilvike42'; 
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,PDO::ATTR_EMULATE_PREPARES=>0,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];     
try{
    $db = new PDO("mysql:host=$host;dbname=$db_name; charset=utf8",$db_username,$db_password,$options);
}catch(PDOException $e)	{
    echo "!!! az adatbazis kapcsolodas sikertelen !!!";
    exit;
}		

?>