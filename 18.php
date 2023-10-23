<html>
<head>
<title>Cookie Demo</title>
</head>
<body>
<form method="post"> Enter Your Name :
<input type="text" name="fname" value="
<?php echo $_COOKIE['myname']; ?>">
</br>
<input type="submit" value="Create Cookie" name="submit">
</form>
</body>
</html>
<?php if(isset($_POST['submit']))
{
$name=$_POST['fname']; setcookie('myname',$name,time()+100,"/","",0);
echo "Your name is : ".$_COOKIE['myname'];
if(!isset($_COOKIE['myname']))
{
echo "failed to create cookie";
}
}
?>
