<?php
echo "Presented by: Sarvaiya Ronak"; echo"<br>";
echo "<br>";
$a = array( array(6,5),
array(4,3)
);
$b = array( array(7,5),
array(6,4)
);
$rows = count($a);
$cols = count($a[0]);
echo "First Matrix: </br>"; for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
print($a[$i][$j] . " ");
}
print ("<br>");
}
echo "<br>";
echo "Second Matrix: </br>"; for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
print($b[$i][$j] . " ");
}
print ("<br>");
}
echo "<br>";
$sum = array_fill(0, $cols, array_fill(0, $rows, 0)); for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{
$sum[$i][$j] = $a[$i][$j] + $b[$i][$j];
}
}
print("Addition of two matrices: <br>"); for($i = 0; $i < $rows; $i++)
{
for($j = 0; $j < $cols; $j++)
{

print($sum[$i][$j] . " ");
}
print("<br>");
}
?>
