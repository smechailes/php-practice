//multiplication of number which is just among the array
<?php
$number = array(1,2,3,4,5,6,7,8,9,10);
$pro=0;
$a=10;
$o=$a-10;
if ($o < 1){
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
}
else{
  echo "number doesn't exist";
}
?>
