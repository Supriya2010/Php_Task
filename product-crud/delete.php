<?php 

include 'connection.php';

$id = $_GET['id'];
    
    $delete = "delete from `product` where id=$id";
   
    $query=mysqli_query($conn,$delete);
  
?>