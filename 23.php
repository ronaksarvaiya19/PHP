<?php
echo"prepared by Sarvaiya Ronak"; echo"<br>";
$cnn = mysqli_connect('localhost', 'root', ''); 
if(! $cnn ){
die('Could not connect: ' . mysqli_error());
}
//mysqli_select_db( $cnn,'customer' );
//$sql="DELETE from customer where cust_no=3";
//mysqli_query( $cnn,$sql); 
echo "Update data successfully<br>"; 
echo " Delete data successfully<br>"; 
mysqli_close($cnn);
?>
