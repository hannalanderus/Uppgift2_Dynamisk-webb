<?php
//de men : är de som finns i databasen
   
if ( isset($_POST['Title'])) {

    $sql = "INSERT INTO Todo (Title, CreatedBy) VALUES (:Title, :CreatedBy)";
    $statement = $pdo->prepare($sql);
    $statement->execute(array(
        ':Title' => $_POST['Title'],
        ':CreatedBy' => $_POST['CreatedBy']
        
        ));
    $_SESSION ['success']='<h2>Task Added!</h2>';
 
}
  ?>              