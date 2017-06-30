<?php include "head.php";?>
<?php
echo print_r($_POST);
echo print_r($_FILES);
// move_uploaded_file($_FILES['picUpload2']['tmp_name'], "images/".$_FILES['picUpload2']['name']);
move_uploaded_file($_FILES['picUpload2']['tmp_name'], $_FILES['picUpload2']['name']);

$date = date('Y-M-D h:i:s'); //2017-06-29 07:08:05
//$strtotime = strtotime(date('Y-M-D h:i:s'));
$strtotime = strtotime($date);
echo $strtotime;
//$random_num = rand(0, 9999);
echo "<br>";
$ext = pathinfo($_FILES['picUpload2']['name'], PATHINFO_EXTENSION);
//$name= "image-".$strtotime."-".$random_num.".".$ext;
$name= "image-".$strtotime."-".rand(0, 9999).".".$ext;

echo $name;

// move_uploaded_file($_FILES['image']['tmp_name'], $_FILES['image']['name']);
?>
<br>
<img src="<?php echo $_FILES['picUpload2']['name']; ?>" id="imageUploaded" class="img-circle" alt="pic" width="304" height="236">
<br>
<div class="form-group">
  <label for="PicUpload" class="col-sm-2 control-Label">Pic upload</label>
    <div class="col-sm-4">
      <?php echo $name; ?>
    </div>
</div>
<?php include "foot.php";?>
