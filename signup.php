<?php
session_start();

$uname=$_POST["uname"];
$pwd=$_POST["pwd"];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("klik",$con);

//get uname and check

$check=mysql_query("select uname from login where uname='$uname' ");


//if exists redirect to sign up and a msg
$count=0;
while($cnt = mysql_fetch_array($check))
{
$count++;
}
if($count!=0)
{

echo("<script>
alert('username already exists!');
location.href='upload.php'</script>"); 

}


else
{
mysql_query("INSERT INTO login VALUES ('$uname', '$pwd')");
$_SESSION['uname']=$uname;
$_SESSION['logged']=1;

mysql_close($con);
echo("<script>
alert('success!');
location.href='upload.php'</script>"); 

}

?>