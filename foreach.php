
<?php
$student = array(
                  array(
                    "name" => "dev",
                    "add" => "lok"
                  ),
                  array(
                    "name" => "rita",
                    "add" => "lok"
                  )
              );
?>

<table="table table-bordered table-hover">
<thead>
  <th>Name</th>
  <th>Address</th>
</thead>
<tbody>

<?php
foreach ($student as $key => $value) {
  echo "<tr>";
  echo "<td>".$student[$key]['name']."<\td>";
  echo "<td>".$student[$key]['add']."<\td>";
  echo "<\tr>";
}

?>
</tbody>
