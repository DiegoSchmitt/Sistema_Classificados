<?php
session_start();
global $pdo;
try{
    $pdo = new PDO("mysql:dbname=projeto_classificados;host=localhost", "root", "");
}catch(PDOeXCEPTION $e){
    echo "FALHOU: ".$e->getMessage();
    exit;
}
?>