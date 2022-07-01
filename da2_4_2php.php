<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"xyzuniversity");
$sel="insert into placement
(student_id,company_placed)
values('$_POST[stu_id]','$_POST[cname]')";
$sq=mysqli_query($con,$sel);
echo "Record Added";
?>