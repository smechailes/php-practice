<?php
$number = array(1,2,3,4,5,6,7,8,9,10);
$pro=0;
$a=2;

for($i=0; $i<count($number); $i++)
  {
    if($a == $number[$i])
    {
      echo "multiplication table of ".$a;
      echo "<br/>";
          for($j=1; $j<11; $j++)
          {

            echo $a.' x '.$j.' = ';
            $pro = $a*$j;
            echo $pro;
            echo "<br/>";
          }

    }

  }


 ?>
