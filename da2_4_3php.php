<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"xyzuniversity");
$sel="SELECT * FROM rank_holder ORDER BY rank_obtained LIMIT 3";
$i=1;
$sq=mysqli_query($con,$sel);
while ($row=mysqli_fetch_array($sq))
{
echo $i.") ID: ".$row['student_id']." Name: ".
$row['name']." Rank: ".
$row['rank_obtained'].'<br>';
$i++;
}
?>
