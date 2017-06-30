<form method="POST" enctype="multipart/form-data">
Enter your full name: <input type="text" name="username"/>
Enter your last name: <input type="text" name="lastname"/>
Enter your Phone: <input type="text" name="phoneNum"/>
Image: <input type="file" name="picUpload"/>
<button type="submit">Submit</button>
</form>

<?php
echo print_r($_POST);
echo print_r($_FILES);
// move_uploaded_file($_FILES['picUpload']['tmp_name'], "images/".$_FILES['image']['name']);
move_uploaded_file($_FILES['picUpload']['tmp_name'], $_FILES['picUpload']['name']);

$date = date('Y-M-D h:i:s'); //2017-06-29 07:08:05
//$strtotime = strtotime(date('Y-M-D h:i:s'));
$strtotime = strtotime($date);
echo $strtotime;
//$random_num = rand(0, 9999);
echo "<br>";
$ext = pathinfo($_FILES['picUpload']['name'], PATHINFO_EXTENSION);
//$name= "image-".$strtotime."-".$random_num.".".$ext;
$name= "image-".$strtotime."-".rand(0, 9999).".".$ext;

echo $name;

// move_uploaded_file($_FILES['image']['tmp_name'], $_FILES['image']['name']);
?>
</table>
