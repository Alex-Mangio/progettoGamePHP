<?php
require_once("../sql/connessione.php");

if($_POST["password"] == $_POST["conferma-password"]){
    $raw_query = "INSERT INTO Users('nome','cognome','email','user_password') VALUES(?,?,?,?)";
    $stmt = $conn->prepare($raw_query);
    $stmt->bind_param("ssss",$_POST["nome"],$_POST["cognome"], $_POST["email"], $_POST["password"]);
    $stmt->execute();
    header("Location: ../giocoSito/paginaGame.php");
    exit();
}else{
    header("Location: signin.php");
    exit();
}
?>