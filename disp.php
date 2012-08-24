<?php
session_start();
?>

<html>
<head>
<script>
function set()
{


alert("it works");
}
</script>
</head>
<body>



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

echo '<a href="disp2.php?fname='.$arr[$j+2].'"><img src="'.$num.'" alt="random image" title="'.$arr[$j+2].'"></a>'; 
}
} 


?>

</body>
</html>