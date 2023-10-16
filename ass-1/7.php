<?php 
function FloydsTriangle($n) 
{ 
    $val = 1; 
    for($i = 1; $i <= $n; $i++) 
    { 
        for($j = 1; $j <= $i; $j++) 
        { 
            print($val." "); 
            $val++; 
        } 
        print("\n"); 
    } 
} 
$n = 4; 
FloydsTriangle($n); 
?>  