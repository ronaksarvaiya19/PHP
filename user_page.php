<?php
@include 'config.php'; session_start(); if(!isset($_SESSION['user_name'])){
header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
</head>
<body>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>user page</title>
<!-- custom css file link  -->
<link rel="stylesheet" href="css/style1.css"> 
<header class="header">
<br><br><br>
<nav class="navigation">
<a href="home.php" class="btn">Home</a>
<a href="about.php" class="btn">About</a>
<a href="contact.php" class="btn">Contact</a>
<a href="login_form.php" class="btn">login</a>
<a href="logout.php" class="btn">logout</a>
</nav>
<div class="container">
<div class="content">
<h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
</div>
</div>
</header>
<div>
<br><br><br>
<form name="form1" action="" method="post" class="box">
<table class="ttext">
<tr>
<td>Enter Enrollment</td>
<td><input type="text" name="enrollment" class="text"></td>
</tr>
<tr>
<td>Enter Name</td>
<td><input type="text" name="name" class="text"></td>
</tr>
<tr>
<td>Enter Department</td>
<td><input type="text" name="department" class="text"></td>
</tr>
<tr>
<td>Enter SEM</td>
<td><input type="text" name="sem" class="text"></td>
</tr>
<tr>
<td>Enter City</td>
<td><input type="text" name="city" class="text"></td>
</tr>
<tr>
<td>Enter Email</td>
<td><input type="email" name="email" class="text"></td>
</tr>
<tr>
<td>Enter Mobile</td>
<td><input type="text" name="mobile" class="text"></td>
</tr>
<tr>
<td colspan = "2" align="center">
<input type="submit" name="submit1" value="insert">
<input type="submit" name="submit2" value="delete">
<input type="submit" name="submit4" value="display">
<input type="submit" name="submit5" value="search">
</td>
</tr>
</table>
</form>
<?php
if (isset($_POST["submit1"])) { mysqli_query($link, "insert into home values('$_POST[enrollment]','$_POST[name]','$_POST[department]','$_POST[sem]','$_POST[c ity]','$_POST[email]','$_POST[mobile]')");
    echo "Record inserted Successfully";
}
if (isset($_POST["submit2"])) {
mysqli_query($link, "delete from home where enrollment='$_POST[enrollment]'");
echo "Record deleted Successfully";
}
if (isset($_POST["submit4"])) {
$res = mysqli_query($link,"select * from home");
echo "<table border=1 class=ttext>";
echo "<tr>";
echo "<th>";    echo "Enrollment";    echo "</th>";
echo "<th>";    echo "Name";    echo "</th>"; echo "<th>";    echo "Depar.";    echo "</th>"; echo "<th>";    echo "SEM";    echo "</th>"; echo "<th>";    echo "City";    echo "</th>"; echo "<th>";    echo "Email";    echo "</th>"; echo "<th>";    echo "Mobile";    echo "</th>"; echo "</tr>";
while ($row = mysqli_fetch_array($res)) {
echo "<tr>";
echo "<td>";    echo $row["enrollment"];    echo "</td>";
echo "<td>";    echo $row["name"];    echo "</td>";
echo "<td>";    echo $row["department"];    echo "</td>";
echo "<td>";    echo $row["sem"];    echo "</td>"; echo "<td>";    echo $row["city"];    echo "</td>"; echo "<td>";    echo $row["email"];    echo "</td>"; echo "<td>";    echo $row["mobile"];    echo "</td>"; echo "</tr>";
} echo "</table>"; }
if (isset($_POST["submit5"])) {
$res = mysqli_query($link,"select * from home where username='$_POST[username]'");
echo "<table border=1>";
echo "<tr>";
echo "<th>";    echo "Enrollment";    echo "</th>";
echo "<th>";    echo "Name";    echo "</th>"; echo "<th>";    echo "Depar.";    echo "</th>"; echo "<th>";    echo "SEM";    echo "</th>"; echo "<th>";    echo "City";    echo "</th>"; echo "<th>";    echo "Email";    echo "</th>"; echo "<th>";    echo "Mobile";    echo "</th>"; echo "</tr>";
while ($row = mysqli_fetch_array($res)) {
echo "<tr>";
echo "<td>";    echo $row["enrollment"];    echo "</td>";
echo "<td>";    echo $row["name"];    echo "</td>";
echo "<td>";    echo $row["department"];    echo "</td>";
echo "<td>";    echo $row["sem"];    echo "</td>"; echo "<td>";    echo $row["city"];    echo "</td>"; echo "<td>";    echo $row["email"];    echo "</td>"; echo "<td>";    echo $row["mobile"];    echo "</td>"; echo "</tr>";             } echo "</table>";
} ?>
</div>
</body>
</html>

Code (Home.php):
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<!--First Part Online Worker Service part-->
<section class="text-gray-600 body-font">
<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
<div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text- left mb-16 md:mb-0 items-center text-center">
<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Sir
Bhavsinhji Polytechnic Institute
<br class="hidden lg:inline-block">
</h1>
<p class="mb-8 leading-relaxed"><b>Purpose</b> <br>
<p>
Sir Bhavsinhji Polytechnic Institute is one of the Pioneer Institute in Diploma Technical Education side since 1949. Our Institute is AICTE (All india COuncil for Technical Education) approved running various diploma courses under CTE and affiliated with GTU (Gujarat Technological University).Institute is located in the heart of the city and first choice among student for their admission.
</p>
<div class="flex justify-center">
<button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline- none hover:bg-indigo-600 rounded text-lg"> <a href="register_form.php">Register</a></button>
<button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg"> <a href="login_form.php">Login</a></button>
</div>
</div>
<div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
<img class="object-cover object-center rounded" alt="Just a Little while! chek Your
Network Connection" src="bpti.jpg">
</div>
</div>
</section>
</body>
</html>
