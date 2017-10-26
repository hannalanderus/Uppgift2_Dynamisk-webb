<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
     <script src="https://use.fontawesome.com/67b80e2b65.js"></script>
     
</head>
<body>
  <h1>ToDoList</h1>
  <!--Länkar till dokument med kod för de olika "funktionerna" i uppgiften-->
   <?php
    require 'databas.php';
    require 'add.php';
    require 'Delete.php';
    require 'Complete.php';
  ?>
  
  <!--meddelande som visas när ny uppgift lagts till, se koppling i add.php-->
    <div class="meddelande">
      <?php
      if (isset($_SESSION['success'])){
        echo $_SESSION['success'];
    }
    ?>
    </div>
        
 
 <!--Skriver ut uppgifter från databasen enbart om de har status 0, att de inte är completed-->

   <?php
    require 'fetch.php'; 
    foreach ($todo as $row):
    if ($row['Completed']==0){ ?>
<div class="wrapper">
    <div class="task"><?php echo $row ['Title']; ?></div>

  

<!--kod för knapp - completed delen-->
<div class="check">
  <form method="POST" action="Complete.php">
        <input type="hidden" name="Completed" value="<?php echo $row['Id'] ?>">
        <button type="Completed" value="Id">
        <i class="fa fa-check"></i>
        </button>
  </form>
</div>

<div class="delete">
<!--kod knapp för delete delen-->
<form method="POST" action="Delete.php">
<input type="hidden" name="Delete" value="<?php echo $row['Id'] ?>">
<input type= "submit" value="Delete">
</form>
</div>  
</div> <!--div till wrapper-->
<?php  } endforeach; ?><!--endforeach hör till : uppe vid delen som skriver ut uppgifterna, här avslutas det-->
    

 <!--Detta avser inputfält för nya uppgifter-->  
<div class="addtask">
<h2>Add ToDo</h2>
<form method="POST">
<p>Task:<div class="a"><input type="text" name="Title"/></div>
<p>CreatedBy:<div class="b"><input type="text" name="CreatedBy"/></div>
<p><input type="submit" value="Add New"/>
<a href="index.php">Cancel</a></p>
</form>
</div>

  <div class= "completed">  
   <?php
   foreach($todo as $row){
       if ($row['Completed']==1){
         echo $row ['Title'] . 'CHECK' . '</br>';
       }
       }  
   ?>
   </div>
    
    
</body>
</html>


