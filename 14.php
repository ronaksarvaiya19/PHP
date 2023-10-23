<html>
<head>
<title>Registration</title>
<style>
.main
{
width:30%; margin:2em auto; border:2px solid black; padding:1em;
}
.main input[type="submit"]
{
width:95%; border:1px solid black; padding:.5em; margin:.5em;
}
.main input[type="password"]
{
width:60%;
border:1px solid black; padding:.5em; margin:.5em;
}
.main input[type="text"],.main input[type="email"]
{
width:50%; border:1px solid black; padding:.5em; margin:.5em;
}
</style>
</head>
<body>
<div class="main">
<form method="post" action="page14.php">
<h2>Student Registration</h2>
<input type="text" name="fname" placeholder="First Name">
<input type="text" name="lname" placeholder="Last Name">
<input type="email" name="email" placeholder="Email">
<input type="text" name="mobile" placeholder="Mobile">
<input type="text" name="city" placeholder="City"><br>
<hr> Gender<br>
<input type="radio" name="gender" value="Male">Male<br>
<input type="radio" name="gender" value="female">Female<br>
<hr> Hobbies<br>
<input type="checkbox" name="hobby[]" value="Cricket">Cricket<br>
<input type="checkbox" name="hobby[]" value="Football">Football<br>
<input type="checkbox" name="hobby[ ]" value="Chess">Chess<br>
<hr>
<input type="Password" name="pass" placeholder="Password"><br>
<input type="submit" name="submit" value="Register">
</form>
</div>
</body>
</html>