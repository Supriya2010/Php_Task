<?php 

include 'connection.php';

if(isset($_POST['save'])){
    $name =$_POST['name'];
    $description =$_POST['description'];
    $price =$_POST['price'];
    $type =$_POST['type'];
    
    $insert = "insert into `product`(`name`,`description`,`price`,`type`) values('$name','$description','$price','$type')";
//    echo $insert;
    $query=mysqli_query($conn,$insert);

    header('location:list.php');
  }
?>

<!DOCTYPE html>
<html>
   <head>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
   <body>
      
      <h4>Add Product</h4>
      <form  method="POST">
         <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control col-md-6"  placeholder="enter product name">
         </div>
         <div class="form-group">
            <label>Description</label>
            <input name="description" type="text" class="form-control col-md-6"  placeholder="description">
         </div>
         <div class="form-group">
            <label>Price</label>
            <input name="price" type="text" class="form-control col-md-6"placeholder="enter price">
         </div>
         <div class="form-group col-md-6">
            <label for="type">Type</label>
            <select name= "type" class="form-control" id="toss">
               <option>New</option>
               <option>Old</option>
            </select>
         </div>
         <button type="submit" class="btn btn-primary" name="save">Save</button>
      </form>
   </body>
</html>