<?php

if(isset($_GET['csv'])){

$spl = explode(",", $_GET['csv']);



$value1=$spl[0];

if(isset($spl[1])){ 
$value2=$spl[1];
}else{
$value2="NULL";
}



if(isset($spl[2])){ 
$value3=$spl[2];
}else{
$value3="NULL";
}

$fh0=fopen($_GET['node']."_value0.txt", "w+");
fwrite($fh0,$value1/100);

$fh1=fopen($_GET['node']."_value1.txt", "w+");
fwrite($fh1,$value2);

$fh2=fopen($_GET['node']."_value2.txt", "w+");
fwrite($fh2,$value3);

//VALUES ('".$_GET['node']."', '".$value1."', '".$value2."', ".$value3.")";
}


?>


