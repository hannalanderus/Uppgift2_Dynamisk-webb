<?php
    
//nedan gör så du kan koppla upp dig mot databasen. root är användarnamn och den andra lösenord. ses på hemsidan localhost 
try{
$pdo = new PDO(
"mysql:host=localhost;dbname=todolist;charset=utf8",
"root", 
"root"
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);}
catch(PDOException $e){
    echo $e->getMessage();
    die();
}
?>