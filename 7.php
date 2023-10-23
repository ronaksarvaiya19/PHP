<?php
echo "Presented by: Sarvaiya Ronak"; echo "<br>";
echo "<br>";
function fun1(){
echo "No Argumemt<br/>";
}
function fun2($a)
{ echo $a*$a."<br/>";
}
function fun3($a,$b)
{ echo $a*$b."<br/>";
}
$var ="fun1";
$var();
$var ='fun2';
$var(2);
$var ='fun3';
$var(6,5);
?>
