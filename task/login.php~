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
  $name = $pass ="";
   
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
   include "config.php";
//$con=mysqli_connect("localhost","root","getlost","user");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
  $name=$_POST['name'];
$pass=$_POST['pass'];

$result = mysqli_query($con,"SELECT * FROM sample WHERE Username='$name'");
 
static $flag=0;

while($row = mysqli_fetch_array($result))
  {
  
  $flag++;

  if($row['Password'] == $pass){
   session_start(); 
   $_SESSION['name'] = $name;
   $_SESSION['pass'] = $pass;
  header('Location:/task/welcome.php');
    
   }
  
  else{ 
  echo "<h3><p>Wrong Password</p></h3></br>"; }
 
  }

if($flag==0){
echo "<h3><p>Username not Found</p></h3><br>";   }

mysqli_close($con); 


 }  
?> 

<div class="main">
<a href="login.php"><div class="login"><b>login</b></div></a>
<a href="signup.php"><div class="signup"><b>signup</b></div></a>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<table>
<tr><td>Name :</td>

<td><input type="text" name="name" placeholder="name" > </td> </tr>

<tr><td>password :</td>
<td><input type="password" name="pass" placeholder="password" value="" ></td></tr>

<tr><td></td><td><input type="submit" name="submit" value="login"></td></tr>
</form>



</div>

</body>
</html>
