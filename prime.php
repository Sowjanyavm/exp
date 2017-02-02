<?php
function generatePrime($n){
 
   /* Declare prime as an array. */
 
   $prime = array();
 
   /* Mark the value of all element as Zero . */
 
   for($i = 1; $i <= $n; $i++){ 
 $prime[$i] = 0;
   } 
 
                 
   $k=2;
   $mul = 0;
 
  while($k < $n){
     
   for($j = 2 ; $n >= $k*$j; $j++){
   $mul = $j * $k;
         /* Cross-out multiple of a number. */
   $prime[$mul]=1;
   }
 
   $k++;
}
 
  for($i = 2; $i <= $n; $i++){
     /* Those who marked zero are prime numbers. */ 
     if($prime[$i] == 0) 
      echo "$i\n";
    } 
 }
 
 generatePrime(20);
 ?>