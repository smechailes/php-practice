<?php
$a=17;
$pro=0;


if($a<=100)
{
  echo 'Multiplication table of '.$a;

  echo "<br/>";
  echo "<br/>";
for($i=1;$i<10;$i++)
{
  for($j=0; $j<10; $j++)
{
  echo $a.'x'.$i[$j].'=';
  $pro = $a*$i[$j];
  echo $pro;

  echo "<br/>";

}



}}
else{
echo "Not valid number";
}

 ?>
