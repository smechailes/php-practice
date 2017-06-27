<?php
echo 'for loop Array';
echo "<br/>";

$a = array(
        'Dev'=>array(
          "987764", "bkt", "samriddhi"
        ),
        'anui'=>array(
          "1234", "ktm", "advance"
        ),
        'ram'=>array(
          "54887", "ayaodhya", "gurukul"
          )
        );

for($i=0;$i< count($a);$i++)
{
  echo $a['ram'][$i];
  echo "<br/>";
  echo $a['anui'][$i];
  echo "<br/>";

}
 ?>
