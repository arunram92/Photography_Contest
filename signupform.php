<?php
session_start();

if(isset($_SESSION['logged']))
{

header("location:index.php");

}
?>


<html>
<head>

<link rel="stylesheet" href="stylesheets/style.css"/>

<script type="text/javascript">



function check()
{

var c=document.forms["form1"]["uname"].value;
if(c==null ||c=="")
{
alert("enter a username");
return false;
}

var y=document.forms["form1"]["pwd"].value;
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

<li><a href="upload.php">upload</a></li>		
</ul>

</div>
<br>

<div class="content">


<div class="txt">


<form action="signup.php" method="post" onsubmit="return check()" name="form1">
<br>
username<br><input type="text" name="uname" size="30" />
<br>
password<br><input type="password" name="pwd" size="30"/>
<br>

<br><br>
<input type="submit" value="sign up" size="30"/>
</form>
</div>

</div>
</div>

</body>
</html>
