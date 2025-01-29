<?php
$host = "localhost";       
$dbName = "moka";          
$dbType = "mysql";          
$userName = "root";        
$password = "";            

try {
    $dsn = "$dbType:host=$host;dbname=$dbName;charset=utf8mb4";
    $pdo = new PDO($dsn, $userName, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "succesful";

    
   
} catch (PDOException $e) {
    DIE( "فشل الاتصال : " . $e->getMessage());

}
