<?php
echo "Presented by: Sarvaiya Ronak"; 
echo "<br>";
echo "<h3> Result </h3>";
$sub1=70;
$sub2=55;
$sub3=60;
$sum=$sub1+$sub2+$sub3;
$avg=$sum/3.0;
echo "Marks of Subject1 is : ". $sub1 ."</br>"; 
echo "Marks of Subject2 is : ". $sub2 ."</br>"; 
echo "Marks of Subject3 is : ". $sub3 ."</br>"; 
echo "<br>";
echo "Percentage: ". $avg ."</br>"; 
echo "<br>";
if($avg>=90)
{
echo "Grade : AA";
}
else if($avg>=80 && $avg<90)
{
echo "Grade : AB";
}
else if($avg>=70 && $avg<80)
{
echo "Grade : BB";
}
else if($avg>=60 && $avg<70)
{
echo "Grade : BC";
}
else if($avg>=50 && $avg<60)
{
echo "Grade : CC";
}
else if($avg>=35 && $avg<50)
{
echo "Grade : DD";
}
else
{
echo "Fail!";
}
?>
