<?php
// Answer Question 3
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <form method="POST" action="Q3.php">
    <label>Name</label> <br>

    <input type="text" placeholder="name" name="name"> 
    <br>
    
    <label>Description </label><br>
    <textarea placeholder="description" name="description" rows="4" cols="50"></textarea>
    <br>
    
    <label>Price</label><br>
    <input type="number" placeholder="price" name="price"> 
    <br>
    <br>
    <input type="submit" name="add" value="Add Product">




    </form>
</body>
</html>