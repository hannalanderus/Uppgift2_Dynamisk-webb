<?php
require 'databas.php';

if (isset($_POST['Delete'])){
   $statement = $pdo->prepare("DELETE FROM Todo WHERE Id = :Id");
   $statement->execute(array(
   ':Id' => $_POST['Delete'] ));
   header('Location: index.php');
}
?>