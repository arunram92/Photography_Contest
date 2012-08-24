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
<li><a href="#">HOME</a></li>
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
<div class="thumbnails">
<?php
//images folder (files,num)-->store full path images/fname
$files = glob("images/*.*"); 

if ($handle = opendir('upload/')) {
   
    

    $i=0;
	//images folder (entry,arr)-->store oly image names in arr
	//reddir ll give . and .. glob wont
    while (false !== ($entry = readdir($handle))) {
        
	$arr[$i]=$entry;
	
	$i++;
    }

    
    closedir($handle);
}



for ($j=0; $j<count($files); $j++)

{ 
//$k=$j+2;
$num = $files[$j]; 
//echo"$k";

if ($num != "." && $num != "..") 
{
echo " ";
echo '<a href="disp2.php?fname='.$arr[$j+2].'"><img src="'.$num.'" alt="random image" title="'.$arr[$j+2].'"></a>'; 

}
} 


?>
<br>
</div>

<div class="full">


</div>

</div>

</div>
</body>
</html>

