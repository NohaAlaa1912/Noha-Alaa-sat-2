<?php
// Answer question 1
function getNumMatches($x){
     $words = ['table', 'chair', 'ball', 'bed', 'table', 'car', 'ball', 'table'];
     $count=0;
     
     for($i = 0; $i<= count($words); $i++){
        
         if($words[$i] == $x){
             $count++;
         }
     }
     return $x ." ". $count;
}

$x= getNumMatches('table');

echo " number of $x ";
    

// 
// ------------------------------------------------------

echo "<br>";
echo "<br>";

// --------------------------------------


// answer question2

function getPriceWithDiscount ($price){
    if($price < 1000){
        $discount = $price + ($price * 10/100);
        return $discount;
    }
    else if ($price >= 1000){
        $discount = $price + ($price * 5/100);
        return $discount;
    }

}

// to test function in (add-product)
 $totalPrice = getPriceWithDiscount($price);


//-- to test this function
// $totalPrice = getPriceWithDiscount(1000);
 echo $totalPrice;

?>