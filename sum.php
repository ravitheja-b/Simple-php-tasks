<?php  

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_USER_DEPRECATED);
$num = 14597;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  
 echo "Sum of digits 14597 is $sum";  
 ?>  