<?php
echo"prepared by Sarvaiya Ronak"; echo"<br>";
$conn = mysqli_connect('localhost', 'root', ''); if(! $conn )
{
die('Could not connect: ');
}
echo 'Connected successfully'; mysqli_close($conn);
?>
