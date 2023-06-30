<?php 
require_once "helper/mysqlconnection.php";
require_once "index.php";




if(isset($_GET['id'])){
    $preparedQuery = $connection->prepare("DELETE FROM person WHERE id = ?");
    $preparedQuery->execute([$_GET['id']]);
    header('Location: index.php');
    exit();
   
}

    


   


?>