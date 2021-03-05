<?php
if(isset($_POST['add'])){

    $name=$_POST['name'];
    $desc=$_POST['description'];
    $price=$_POST['price'];
  
    $errors=[]; 

// name
if(empty($name))
{
    $errors[] =' name is required';
}
else if( ! is_string($name))
{
    $errors[] = 'name must be string';
}
else if((strlen($name) < 5) or (strlen($name) > 255))
{
    $errors[] = ' name must be min char >= 5 and max char <= 255';
}

// description
if( ! is_string($desc))
{
    $errors[] = 'description must be string';
}

// Price
if(empty($price))
{
    $errors[] =' price is required';
}
else if( ! is_numeric($price)){
    $errors[] ='price must be number';
}
elseif ( $price < 0)
{
    $errors[] ='price must be > 0';
}
else 
{
    echo " Name of Product is : $name <br> Description is : $desc <br> Product Price is : $price <br>";
}

echo "price with discount: ";

include_once('functions.php');


getPriceWithDiscount($price);

echo "<br>";
echo "<br>";
print_r($errors);



}



?>