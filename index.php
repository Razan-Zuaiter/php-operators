<?php


//Question 1


function Year( $year){
  if( $year % 4 ==0){
      echo " {$year} is a leap year"  ;
  }else{
      echo " {$year} is not leap year"  ;
  }}
  Year(2000);
  echo "<br>"."*********************"."<br>";
  
  //Question 2
  
  function Session($temperature){
  if( $temperature <=20){
      echo "The temperature is {$temperature}  so, the session is winter"  ;
  }else{
      echo " The temperature is {$temperature} so, the session is summer"  ;
  }}
  Session(30);
  echo "<br>"."*********************"."<br>";
  
  
  //Question 3
  
  function sum_equals( $number1 , $number2){
  if( $number2 !== $number1){
     echo $number1 + $number2 ;
  }else{
      echo  (($number1 + $number2 )*3) ;
  }}
  sum_equals(10,3);
  echo "<br>"."*********************"."<br>";
  
  //Question 4
  
  function differences($number_n){
   
     $difference=100-$number_n;
  
  if($difference >= 0){
     echo $difference;
  }else{
      echo ((-1* $difference)*3) ;
  }}
  differences(100);
  echo "<br>"."*********************"."<br>";
  
  //Question 5
  
  function check_30($number1 ,$number2){
     
     if($number1 ===30 || $number2 ===30 )
       return true;
     elseif(($number1+$number2) ===30)
        return true;
    else
        return false;
      }
  
  echo check_30(30,0);
  echo "<br>"."*********************"."<br>";
  
  
  //Question 6
  
  function check_number($number){
     $result1=$number-100;
     $result2=$number-200;
     if( ($result1 && $result2 ) > 0  )
      {
          if( ($result1<= 10 )|| ($result2 <= 10) )
              echo "True"; 
      }
      else {
          if( (-1*$result1<= 10 )|| (-1*$result2 <= 10))
          echo "true"; 
        }
  }
   
  check_number(118);
   echo "<br>"."*********************"."<br>";
   
  //Question 7
  
  function check_3or_7($var1){
  
     if($var1%3 ==0){
        
      echo "The number {$var1} is a multiple of 3"; 
  
      }
      elseif($var1%7 ==0){
        
          echo "The number {$var1} is a multiple of 7"; 
      
      }
      else
      echo "The number {$var1} is not a multiple of 3 neither 7"; 
    
  
  }
  echo check_3or_7(40);
  echo "<br>"."*********************"."<br>";
  
  
  //Question 8
  $str1 = "Razan Zuaiter Class A";
  function Change($str1){
  
      $arr1 = explode(" ",$str1);
      if("if" === $arr1[0]){
          echo "Original string ==> {$str1}.<br>";
      } else{
          array_unshift($arr1, "if");
          echo "Updated string ==> ".implode(" ",$arr1) ."<br>";
      }
  
  }
  Change($str1);
  echo "<br>"."*********************"."<br>";
  
  //Question 9
  
  function str9($x, $y)
      {
         return substr($x,0,$y).substr($x,$y+1,strlen($x)-$y);
      }
      echo "Razan Zuaiter"."<br>";
      echo str9("Razan", 1)."<br>";
      echo str9("Razan", 0)."<br>";
      echo str9("Razan", 3)."<br>";
     
  
  echo "<br>"."*********************"."<br>";
  
  //Question 10
  
  function check_100($number1 ,$number2){
     
      if($number1 >= 100 && $number1 <=200 )
       {
          if($number2 >= 100 && $number2 <=200 ){
          echo "Both numbers in range 100 - 200";
          }else{
           echo "One of the numbers is not on range";
          }
       }
  }
   
   echo check_100(150,110);
   echo "<br>"."*********************"."<br>";
   
  //Question 11 
  
  function Check_20($x, $y) 
  {
     return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
    
  }
  echo Check_20(40,60) ;
  echo "<br>"."*********************"."<br>";
  
  //Question 12
  
  function max_number($number1, $number2 ,$number3){
      if($number1>$number2 && $number1>$number3){
       echo "The largest number is {$number1}";}
      elseif($number2>$number3 && $number2>$number1 ){
       echo "The largest number is {$number2}";}
      else
      {echo "The largest number is {$number3}";}
  }
  max_number(1,5,3);
  echo "<br>"."*********************"."<br>";
  
  //Question 13
  
  function nearest_number($number1, $number2 ){
      $diff1=100-$number1;
      $diff2=100-$number2;
  
      if( $diff2> $diff1)
       echo "The 1st number ({$number1}) is more near to 100 than ({$number2})";
     elseif( $diff2 == $diff1)
     echo "The answer is 0";
      else
      echo "The 2nd number ({$number2}) is more near to 100 than ({$number1})";
     
  }
  nearest_number(50,50);
  echo "<br>"."*********************"."<br>";
  
  //Question 14
  
  function five($number1, $number2 ){
      $diff=$number2-$number1;
      $summ=$number1+$number2;
  
      if($number1 == 5 || $number2 ==5)
      echo "One of the numbers is 5";
      elseif ( $diff ==5 ||  $summ==5){
          echo "The summation or difference is 5";
      }else 
          echo "There is no 5 here";
  
  }
  five(50,9);
  echo "<br>"."*********************"."<br>";




?>