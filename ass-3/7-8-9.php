<html>

<body bgcolor="skyred">
<form action="a2c2.php" method="post">
<h2>Enter choice :</h2>
<input type="radio" name="ch" value=1> Sort array by values in ascending,descending order<br>
<input type="radio" name="ch" value=2> Sort array by values without changing key values <br>
<input type="radio" name="ch" value=3> Filter odd elements from array <br>
<input type="radio" name="ch" value=4> Sort different array at glance using single function<br>
<input type="radio" name="ch" value=5> Merge given two arrays <br>
<input type="radio" name="ch" value=6> Find intersection of two array <br>
<input type="radio" name="ch" value=7> Find union of two array <br>
<input type="radio" name="ch" value=8> Find set difference of two array <br>
<br>

<input type="submit" value="SUBMIT">  <input type="reset" value="CLEAR">

</body>

</html>

PHP Function:
NOTE: PHP function is saved as "ass2a1.php"

<html>
<body bgcolor="gold">

<?php
function is_odd($var)
{
if($var%2==1)
return $var;
}
                                                                                                                             
$choice=$_POST['ch'];

        $arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>6,'g'=>7,'h'=>8);
        $arr1=array('l'=>11,'m'=>22,'n'=>33,'o'=>44,'p'=>55,'q'=>66,'r'=>77,'s'=>88);
        $arr2=array('a'=>10,'b'=>20,'c'=>30,'d'=>40,'e'=>50,'f'=>60,'g'=>70,'h'=>80);
        switch($choice)
        {
                case 1:
                        sort($arr);
                        echo "Array in ascending order:<br>";
                        print_r($arr);
                        rsort($arr);
                        echo "<br>Array in descending order:<br>";
                        print_r($arr);
                        break;
                case 2:
                        asort($arr);
                        echo "Array in ascending order:<br>";
                        print_r($arr);
                        arsort($arr);
                        echo "<br>Array in descending order:<br>";
                        print_r($arr);
                        break;
               case 3:
                        print_r(array_filter($arr,'is_odd'));
                        break;
                case 4:
                        array_multisort($arr,0,$arr1,1,$arr2,0);
                        print_r($arr);
                        echo "<br>";
                        print_r($arr1);
                        echo "<br>";
                        print_r($arr2);
                        echo "<br>";
                        break;
                case 5:
                        print_r(array_merge($arr,$arr1));
                        break;
                case 6:
                        print_r(array_intersect($arr,$arr1));
                        break;
                case 7:
                        $union=array_merge($arr,$arr1);
                        print_r(array_unique($union));
                        break;
                case 8:
                        print_r(array_diff($arr,$arr1));
                        break;
        }

        echo "<br><a href ='a2c2.html'> RETURN</a>";
?>
</font>
</body>
</html>
