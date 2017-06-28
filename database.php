<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=admin",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO login (username, password)
VALUES ('".$_POST["email"]."','".$_POST["password"]."')";
if ($dbh->query($sql)) {
echo "New Record Inserted Successfully";
}
else{
echo "Data not successfully Inserted.";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
