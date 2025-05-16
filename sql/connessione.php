<?php
try{
$conn = new MySQLi("localhost", "root", "", "dbSito");
}catch(Exception $e){
    die("Connessione fallita: " . $e->getMessage());
}
?>