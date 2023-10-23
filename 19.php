<?php
echo"prepared by Sarvaiya Ronak"; echo"<br>";
session_start(); 
if(isset($_SESSION['visitor']))
$_SESSION['visitor'] = $_SESSION['visitor']+1; 
else
$_SESSION['visitor']=1;

echo "<br>";
echo"Number of Visitor: ".$_SESSION['visitor']; 
?>
