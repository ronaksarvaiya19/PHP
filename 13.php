<html>
<body>
<?php
echo "<br>Prepered by: Sarvaiya Ronak</br>";
echo "<br/> <br/>";
$var=fopen("new.txt","w");
echo fwrite($var,"Hello, Ronak is here"); fclose($var);
echo "<br/> <br/>";
$var=fopen("new.txt","r"); echo fread($var, "30"); fclose($var);
?>
</body>
</html>
