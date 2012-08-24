<?php 
session_start();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("klik",$con);

$uname=$_POST["uname"];
$pwd=$_POST["pwd"];


$check=mysql_query("select pwd from login where uname='$uname' ");

$cnt = mysql_fetch_array($check);

if($pwd==$cnt[0])
{
$_SESSION['uname']=$uname;
$_SESSION['logged']=1;
mysql_close($con);
header("location:upload.php");
}

else
{
mysql_close($con);
header("location:upload.php");
}


?>