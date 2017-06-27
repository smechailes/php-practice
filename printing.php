<?php
/*$a=123;
$b="456";
echo $a+$b;
echo "<br>";
echo $b;

echo "<br>";
echo $a.$b.$a;
echo "<br>";

$a+=2;
echo $a;
echo "<br>";

$b-=10;
echo $b;


*/
 ?>
 <?php

 $y=array(0,1,2,3, "Dev");
 echo $y[4],$y[1].$y[3];
 echo "<br>";
 echo "<br>";

 echo "<br>";

 echo "<br>";


$student = array(
                array(
                      'Name' => "Anusuman",
                      'Address' => "jadibuti",
                      'Phone' => 98765332
                    ),
            "dev" =>  array(

                    'Address' => "ktm",
                    'Phone' => 324765332
                  ),
        "hari" => array(

                  'Address' => "Bkt",
                  'Phone' => 1234545
                )


                );
  echo $student[0]['Address'];
  echo "<br>";
  echo $student['dev']['Phone'];
 ?>
