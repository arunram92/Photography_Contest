<?php
session_start();
?>

<html>

<title>KLIK</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			
<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
<script>
function check()
{

var x=document.forms["form1"]["file"].value;
if(x==null || x=="")
{
alert("choose a file");
return false;
}

}


</script>
<script type="text/javascript">

function check2()
{
var c=document.forms["form1"]["uname"].value;
if(c==null ||c=="")
{
alert("enter a username");
return false;
}

y=document.forms["form1"]["pwd"].value;
if(y==null ||y=="")
{
alert("enter a password");
return false;
}


}
</script>
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
<?php
 
 if(isset($_SESSION['logged']))
{
 echo '
<form action="klikupload.php" method="post"
enctype="multipart/form-data" onsubmit="return check()" name="form1">
<label for="file"><h2>Filename:</h2></label>
<br>
<br>
<br><br>
<input type="file" name="file" id="file" /> 
<br />
</br>

<input type="submit" name="submit" value="Submit" />
</form>

';
}

else
{
echo '
<div class="txt">
<form name="form1" action="login.php" method="post" onsubmit="return check2()">
<br>

username:
<br><input type="text" name="uname" size="30" />
<br>


password:
<br><input type="password" name="pwd" size="30" />

<br>
<br>


<input class="sub" type="submit" value="submit" />


</form>
<a href="signupform.php">CLICK HERE TO SIGN UP </a>
</div>
';
}

?>
</div>

</div>
</body>
</html>

