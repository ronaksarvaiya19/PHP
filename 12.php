<?php
echo "Presented by: Sarvaiya Ronak"; 
echo "</br>";
echo "Array Function:</br></br>";
$arr=array(1,2,3,4,5);
echo "Count Function:</br>"; echo count($arr);
echo "</br>";
echo "In_Array Function:</br>"; if(in_array(5,$arr))
echo "5 is available in List"; else
echo "5 is not available in List"; echo "</br></br>";
echo "Current Function:</br>"; echo current($arr);
echo "</br>";
echo "Next Function:</br>"; echo next($arr);
echo "</br>";
echo "Previous Function:</br>"; 
echo prev($arr);
echo "</br>";
echo "End Function:</br>"; echo end($arr);
echo "</br>";
echo "Reset Function:</br>"; echo reset($arr);
echo "</br>";
echo "Sort Function:</br>"; print_r(sort($arr));
echo "</br>";
$var=array(10,20,30,40);
echo "Merge Function:</br>"; 
print_r(array_merge($var,$arr)); echo "</br>";
echo "Reverse Function:</br>"; 
print_r(array_reverse($arr)); echo "</br>";
?>