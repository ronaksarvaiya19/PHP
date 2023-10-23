<?php
echo"prepared by Sarvaiya Ronak"; echo"<br>";
function checkNum($num)
{
if($num>5)
{
throw new Exception("Value must be 1 or below");
}
return true;
}
checkNum(8);
?>
