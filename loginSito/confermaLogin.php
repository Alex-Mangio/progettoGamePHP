<?php
require_once("../sql/connessione.php");

$raw_query = "SELECT * FROM Users WHERE username = ? AND user_password = ?";
$stmt = $conn->prepare($raw_query);
$stmt->bind_param("ss",$_POST["username"],$_POST["password"]);
$stmt->execute();
$result = $stmt->get_result();
if($result == null){
    header("Location: login.php&error=invalid_credentials");
    exit();
}else{
    header("Location: ../giocoSito/paginaGame.php");
    exit();
}
?>