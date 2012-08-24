<?php
session_start();
?>

<html>

<title>KLIK</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			
<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />

</head>


<body>
<br>
<br>



<div class="whole">

<div id="header">

<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="upload.php">UPLOAD</a></li>
</ul>
</div>

<div class="lout">
<form action="logout.php">
<input type="submit" value="logout"/>
</form>
</div>

<div id="content">
<br>
<br>
<div class="details">
<?php
$imname=$_GET["fname"];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("klik",$con);

$check=mysql_query("select * from images where iname='$imname' ");
$cnt = mysql_fetch_array($check);
echo "<h2>Uploaded by :".$cnt['uname']."</h2>";
echo "<h2>Uploaded Time :".$cnt['time']."</h2>";

?>
</div>
<div class="full">
<?php

$imname=$_GET["fname"];

echo'<img src="upload/'.$imname.'" height="400" width="500">';

?>


<html>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<br><br>
<?php

echo '<iframe src="http://www.facebook.com/plugins/like.php?href=localhost/klik/disp2.php?fname='.$imname.'"
        scrolling="no" frameborder="0"
        style="border:none; width:450px; height:80px"></iframe>
<br>

<div class="fb-comments" data-href="localhost/klik/disp2.php?fname='.$imname.'" data-num-posts="2" data-width="470">
</div>
 ';
 


?>



</div>

</div>

</div>
</body>
</html>

