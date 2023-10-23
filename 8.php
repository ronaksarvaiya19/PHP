<?php
echo "Presented by: Sarvaiya Ronak"; 
echo "<br>";
echo "<br>"; function fact ($n)
{
if($n <= 1)
{
return 1;
}
else
{
return $n * fact($n - 1);
}
}
echo "Factorial of 5 is : " .fact(5);
?>
