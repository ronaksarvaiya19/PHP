<?php session_start();
if(isset($_POST['submit']))
{
$name=$_POST['uname'];
$_SESSION['name']=$name;
echo "Welcome ".$_SESSION['name'];
}
?>