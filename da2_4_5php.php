<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"xyzuniversity");
$sel="SELECT COUNT(company_placed) as tot FROM placement WHERE company_placed NOT
LIKE 'not%'";
$sq=mysqli_query($con,$sel);
$data=mysqli_fetch_assoc($sq);
echo "Total no of Students placed is ".$data['tot'];
?>