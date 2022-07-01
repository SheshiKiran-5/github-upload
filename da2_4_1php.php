<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"xyzuniversity");
$sel="insert into rank_holder
(student_id,name,rank_obtained)
values('$_POST[stu_id]','$_POST[name]','$_POST[rank]')";
$sq=mysqli_query($con,$sel);
echo "Record Added"
?>
