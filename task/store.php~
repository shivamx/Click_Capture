
<?php
include "config.php";
//$con=mysqli_connect("localhost","root","getlost","user");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else {
$elem=$_POST['id'];
$usr=$_POST['id1'];
$pg=$_POST['id2'];
$tim=$_POST['id3'];

$sql="INSERT INTO pos VALUES ('$usr','$pg','$elem','$tim')";
mysqli_query($con,$sql);
}


?>

