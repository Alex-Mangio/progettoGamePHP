<?php
try{
$conn = new MySQLi("user", "root", "CiaoAlex2006", "dbSito");
}catch(Exception $e){
    die("Connessione fallita: " . $e->getMessage());
}
?>