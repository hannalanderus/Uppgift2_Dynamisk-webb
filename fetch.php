<?php
$statement = $pdo->prepare("SELECT * FROM Todo ORDER BY Id DESC");
$statement -> execute();
$todo = $statement -> fetchAll(PDO::FETCH_ASSOC);
?>


<!--$returned_data = $statement -> fetchAll(PDO::FETCH_ASSOC);-->