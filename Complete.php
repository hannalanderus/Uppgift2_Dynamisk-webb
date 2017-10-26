<?php
require 'databas.php';

if (isset($_POST['Completed'])){
    $statement = $pdo->prepare("UPDATE Todo SET Completed = 1 WHERE Id = :Id");
    $statement->execute(array(
    ':Id' => $_POST['Completed'] ));
    header('Location: index.php');
 }

