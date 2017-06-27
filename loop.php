<?php
$i=0;
$sum=0;
echo 'While loop';
while($i <= 10)
{
  $sum += $i ;
  $i++;
}
echo $sum;
echo "<br>";
$sum=1;
$product=1;
echo 'Do while loop';
echo "<br>";
do{
  $product = $product * $sum;
$sum++;
}
  while($sum<=5);
  echo $product;
echo "<br/>";
echo "<br/>";

echo 'For loop';
echo "<br/>";
for($j=1, $x=1; $j < 10; $j++, $x++ )
{
  $pro=0;
  echo "<br/>";
  echo "x= ".$x;
  echo "<br/>";
  echo "j= ".$j;
  echo "<br/>";

  $pro= $x * $j;
  echo $x." * ".$j." = ".$pro;
  echo "<br/>";


}

 ?>
