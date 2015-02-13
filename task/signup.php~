<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['pass'])){
header('Location:/task/welcome.php');
} 
?>
<html>
<head>
<style>
body{background-image:url("bg.jpeg");}
div.main{
width:350;
height:250;
margin:150 450;
background-color:grey;
opacity:0.5;
border:5px solid brown;
color:brown;
}

div.login{
width:80;
height:35;
margin:2 75;
position:absolute;
background-color:brown;
border:5px solid grey;
color:white;
text-align:center;

}

div.signup{
width:80;
height:35;
margin:2 165;
position:absolute;
background-color:brown;
border:5px solid grey;
color:white;
text-align:center;
}
table{
margin:100 0;
position:absolute;
}

p{
text-align:center;
color:white;
}
</style>

</head>
<body>

<?php
$nameErr = $passErr = "";
$name = $pass ="";

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    static $flag1 =0;
    static $flag2= 0;     

    if(empty($_POST["name"])){
     $flag1=1; 
    $nameErr = "Name is required"; }
    
    if(empty($_POST["pass"])){
     $flag2=1;
    $passErr = "Password Required";
    }

  if($flag1==0&&$flag2==0){
   include "config.php";
   //$con=mysqli_connect("localhost","root","getlost","user");

  // Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 //else echo "Connect successfully :<br>";
  
  $name = $_POST["name"];
  $pass = $_POST["pass"];

  $sql="INSERT INTO sample VALUES ('$name', '$pass')";

  if (!mysqli_query($con,$sql))
  {
  echo '<p>User already exist</p><br>'; }

  else{
  echo "<h3><p>Congrats Successfully Signup<p></h3>";}

    mysqli_close($con);
   }
   

}    

?>

<div class="main">
<a href="login.php"><div class="login"><b>login</b></div></a>
<a href="signup.php"><div class="signup"><b>signup</b></div></a>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<table>
<tr><td>Name :</td>
<td><input type="text" name="name" placeholder="name"><span class="error"><?php echo "<p>".$nameErr."</p>"; ?></span> </td></tr>

<tr><td>password :</td>
<td><input type="password" name="pass" placeholder="password" value=""><span class="error"><?php echo "<p>".$passErr."</p>"; ?></span> </td></tr>

<tr><td></td><td><input type="submit" name="submit" value="signup"></td></tr>
</form>

</div>


</body>
</html>
