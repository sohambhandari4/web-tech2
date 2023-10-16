<?php

  function numTowords($num)
  {
    $rem=0;
    $sum = 0;
     $words = " ";
     while($num > 0)
      {
          $rem= $num % 10;
          
          switch ($rem)
          {
            case 0: $words = "Zero" .$words ;
                    break;
            case 1: $words = "One" .$words ;
                    break;
            case 2: $words = "Two" .$words ;
                    break;
            case 3: $words = "Three" .$words ;
                    break;
            case 4: $words = "Four" .$words ;
                    break;
            case 5: $words = "Five" .$words ;
                    break;
            case 6: $words = "Six" .$words ;
                    break;
            case 7: $words = "Seven" .$words ;
                    break;
            case 8: $words = "Eight" .$words ;
                    break;
            case 9: $words = "Nine" .$words ;
                    break;
          }
          $num = (int)($num / 10);
      }
      return $words;
  }


  //input
    echo"Enter the number";
    $num = intval(readline());
    
    $word = numTowords($num);
    echo"Number to words:\n $num - $word";
    
?>