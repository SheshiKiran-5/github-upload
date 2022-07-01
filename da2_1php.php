<?php
   $con = mysqli_connect("localhost","root","");
   mysqli_select_db($con,"resume");
   $sel="insert into 20BAI1061_da2_resume(Name,Phone_Number,Email_Address,DOB,Address,Education,Experience,Skills,Hobbies)
   values('$_POST[name]','$_POST[tele]','$_POST[email]','$_POST[dob]','$_POST[add]','$_POST[edu]','$_POST[exp]','$_POST[skill]','$_POST[hobby]')" ;
   $sq=mysqli_query($con,$sel) or die( mysqli_error($con));
   $sel1="SELECT * FROM 20BAI1061_da2_resume";
   $sq1=mysqli_query($con,$sel1) or die( mysqli_error($con));
   while ($row=mysqli_fetch_array($sq1))
   {
	   echo "Name: ".$row['Name'].'<br>'.
	   "Phone Number: ".$row['Phone_Number'].'<br>'.
	   "Email: ".$row['Email_Address'].'<br>'.
	   "Date_Of_Birth: ".$row['DOB'].'<br>'.
	   "Address: ".$row['Address'].'<br>'.
	   "Education: ".$row['Education'].'<br>'.
	   "Experience: ".$row['Experience'].'<br>'.
	   "Skills: ".$row['Skills'].'<br>'.
	   "Hobbies: ".$row['Hobbies'].'<br>';
}
?>