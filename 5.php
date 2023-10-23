<?php
echo "Presented by: Sarvaiya Ronak"; 
echo "<br>";
echo "<br>";
$n1=100;
$n2=99;
$n3=89;
echo "Number1 is : " . $n1 . "</br>"; echo "Number2 is : " . $n2 . "</br>"; echo "Number3 is : " . $n3 . "</br>"; echo "<br>";
if($n1>$n2)
{
if($n1>$n3)
{
echo "Maximum number is : " . $n1 . "</br>";
}
else
{
echo "Maximum number is : " . $n3 . "</br>";
}
}
else if($n2>$n1)
{
if($n2>$n3)
{
echo "Maximum number is : " . $n2 . "</br>";
}
Else
{
echo "Maximum number is : " . $n3 . "</br>";
}
}
?>
