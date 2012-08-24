<?php
session_start();
if ($_FILES["file"]["type"] != "image/jpeg" && $_FILES["file"]["type"] !="image/gif" && $_FILES["file"]["type"] !="image/png" &&$_FILES["file"]["type"] != "image/jpg")
  {
  echo "<script>
  alert('only .jpg,.png,.gif are allowed');
  location.href='upload.php';
  </script>
  ";
  }
else
  {
  //if the image already exists in the folder 
  
if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }

//if image is new store the original image in upload folder

    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      
	//now crop the image and store in images folder
	$fn=$_FILES["file"]["name"];
	$filename = 'upload/'.$fn;
	$type=$_FILES["file"]["type"];

// Content type
header('Content-Type: image/jpeg');

// Get new dimensions
list($width, $height) = getimagesize($filename);
$new_width = 100;
$new_height = 100;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);



if (($type == "image/jpg") || ($type == "image/jpeg") )
 {
     $image = imagecreatefromjpeg($filename);
       } 
elseif ($type == "image/gif") {
        $image = imagecreatefromgif($filename);

    }
 elseif ($type == "image/bmp") {
       $image = imagecreatefromwbmp($filename);

    } 
elseif ($type == "image/png") {
        $image = imagecreatefrompng($filename);

    } 
else { }




imagecopyresized($image_p, $image, 0, 0, $width/4, $height/4, 100, 100, $width/2, $height/2);

// Output
imagejpeg($image_p,"images/".$_FILES["file"]["name"]); 
header("location:index.php");

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("klik",$con);
$uname=$_SESSION['uname'];
mysql_query("INSERT INTO images VALUES ('$uname', '$fn',NOW())");
mysql_close($con);
      }
  }
?>