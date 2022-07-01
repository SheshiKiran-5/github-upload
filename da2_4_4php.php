<?php
$con = mysqli_connect("localhost","root","");
!mysqli_select_db($con,"xyzuniversity");
$sel="SELECT * FROM placement ORDER BY company_placed where company_name="Google";
$i=1;
$sq=mysqli_query($con,$sel);
while ($row=mysqli_fetch_array($sq))
{
echo $i.") ID: ".$row['student_id']." Company Name: ".
$row['company_placed'].'<br>';
$i++;
}
?>