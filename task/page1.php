<?php
session_start();
if(!isset($_SESSION['name'])||!isset($_SESSION['pass']))
header("Location:/task/login.php");
?>

<html>
<head>
<title id="pgname">page1.php</title>
<style>

body{background-image:url("bg.jpeg");}

p {
margin-left: 500px;
color: white;
width: 200px;
cursor: pointer;
text-align:center;}

span {
color: green;
cursor: pointer;}

div.box {
width: 400px;
height: 100px;
position: absolute;
margin:300 450;
background-color: blue;
cursor: pointer;
color:white;
opacity:0.5;
}

div.logout{
width:70;
height:20;
margin:2 1000;
position:absolute;
background-color:brown;
border:5px solid grey;
color:white;
text-align:center;
}

</style>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
<a href="logout.php"><div class="logout">logout</div></a>

<div id="result">Click an element.</div>

<p>
Click at this paragraph,element will<span>store</span> in database. </p>

<div class="box">click at this div<br/ ><br />your click will store in database</div>

<?php $name = $_SESSION['name'];   ?>

<input type="hidden" id="phpVar" value="<?php echo $name; ?>">   

<script>
$( "*", document.body ).click(function( event ) {
event.stopPropagation();
$( "#result" ).text( this.tagName );
var a = this.tagName;
var b = $('#phpVar').val();
var c =$("#pgname").text();
var d = new Date();


$.ajax(
    {
    url: "store.php",
    type: "POST",

    data: { id: a,id1: b,id2: c,id3: d},
    success: function (result) {
            //alert('success');

    }
});   


});  
</script>



</body>
</html>
