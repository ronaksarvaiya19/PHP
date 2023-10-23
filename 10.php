<?php
echo "Presented by: Sarvaiya Ronak"; 
echo "</br></br>";
echo "Date Function:</br></br>";
echo "Full name of the day:</br>"; echo date("l");
echo "</br></br>";
echo "Current date:</br>"; echo date("d/m/y");
echo "</br></br>";
echo "Date with month name:</br>"; echo date("F j Y");
echo "</br></br>";
echo "Time in 12hr Scheme:</br>"; echo date("h:i:s");
echo "</br></br>";
echo "Time in 24hr Scheme:</br>"; echo date("H:i:s");
echo "</br></br>";
echo "Getdate Function:"; print_r(getdate());
echo "</br></br>"; echo "Timestamp</br>";
$a=getdate(date("U"));
echo "$a[weekday],$a[month],$a[year]"; echo "</br></br>";
echo "DateTime Function:</br>";
$date = new DateTime();
$date->setdate(2003,07,18); echo $date->format("d-m-y"); echo "</br></br>";
echo "CheckDate Function</br>";
$d=18;
$m=07;
$y=2003;
var_dump(checkdate($m,$d,$y)); echo "</br></br>";
?>

