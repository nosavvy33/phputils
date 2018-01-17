<?php
date_default_timezone_set("America/Lima");
$a = date("Y-m-d H:i:s");
echo $a; 
echo "<hr>";
date_default_timezone_set("Australia/Hobart");
$b = date("Y-m-d H:i:s");
echo $b;
echo "<hr>";
echo "resta: ".$b-$a;
?>
