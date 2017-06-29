<?php include "head.php";?>
<div class="container">
<table class="table table-hover table-bordered">
<?php


    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }


?>
</table>
</div>
<?php include "foot.php";?>
