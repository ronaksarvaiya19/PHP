<html>
<body>
<?php
echo"prepared by Sarvaiya Ronak"; echo"<br>";
$cnn = mysqli_connect('localhost', 'root', ''); if(! $cnn ){
die('Could not connect: ');
}
mysqli_select_db( $cnn,'Employee');
$sql ="INSERT INTO emp";
echo "<table border='6' cellspacing='5'>";
echo "<tr>
<td>Employee No</td>
<td>Employee Name</td>
<td>Designation</td>
<td>Salary</td>

</tr>";
$result = mysqli_query($cnn,$sql); if($result->num_rows>0)
{
while($row = mysqli_fetch_array($result,
MYSQLI_ASSOC))
{
$emp_no=$row["emp_no"];
$emp_name=$row["emp_name"];
$designation=$row["designation"];
$salary=$row["salary"];   
echo "<tr>
<td>$emp_no</td>
<td>$emp_name</td>
<td>$designation</td>
<td>$salary</td>
</tr>";
}
// $result->free();
 mysqli_close($cnn);
}
?>
</body>
</html>
