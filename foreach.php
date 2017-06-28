<?php
$student= array(
			array(
			"name" => "ansuman",
			"email" => "xyz@xyz.com",
			"phone" => "xyz@xyz.com",
			"address" => "xyz@xyz.com"),
			array(
			"name" => "ansuman",
			"email" => "xyz@xyz.com",
			"phone" => "xyz@xyz.com",
			"address" => "xyz@xyz.com"),
			array(
			"name" => "ansuman",
			"email" => "xyz@xyz.com",
			"phone" => "xyz@xyz.com",
			"address" => "xyz@xyz.com"),
			array(
			"name" => "ansuman",
			"email" => "xyz@xyz.com",
			"phone" => "xyz@xyz.com",
			"address" => "xyz@xyz.com"),
			array(
			"name" => "ansuman",
			"email" => "xyz@xyz.com",
			"phone" => "xyz@xyz.com",
			"address" => "xyz@xyz.com"),
			array(
			"name" => "ansuman",
			"email" => "xyz@xyz.com",
			"phone" => "xyz@xyz.com",
			"address" => "xyz@xyz.com"),
			array(
			"name" => "ansuman",
			"email" => "ansuman_p@gmail.com",
			"phone" => "9842897564",
			"address" => "jadibuti")
	);
?>
<table>
	<thead>
		<th>Sn.</th>
		<th>name</th>
		<th>email</th>
		<th>phone</th>
		<th>address</th>
	</thead>
	<tbody>

<?php
$i=1;
	foreach ($student as $key => $value) {


?>
<tr>
	<?php
	    echo "<td>".$i."</td>";
		foreach ($value as $key=> $info){

			echo "<td>".$info."</td>";
		}
	?>

</tr>
<?php
$i++;
	}
?>

</tbody>
	</table>

	<br>
	<input type="text" name="text"/>text<br>
		<input type="radio" name="text"/>radio<br>
	<input type="checkbox" name="text"/>checkbox<br>
	<input type="file" name="text"/>file<br>
<input type="email" name="text"/>email<br>

	<input type="password" name="text"/>password<br>
	<input type="tel" name="text"/>tel<br>
	<input type="number" name="text"/>number<br>
<input type="reset" name="text"/>reset<br>
		<input type="hidden" name="text"/>hidden<br>
	<input type="url" name="text"/>url<br>
	<input type="text" name="text"/>text<br>
	<input type="submit" name="text"/>submit
