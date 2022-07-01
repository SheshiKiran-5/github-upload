<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<title>20BAI1061 - LAB12</title>
<?php
$_SESSION["favourite_color"] = "Saffron";
$_SESSION["favourite_animal"] = "Horse";
?>
</body>
</html>
<?php
if(isset($_SESSION['favourite_color'])){
	echo "Sessions variables are set".'<br>';
}
else{
	echo "Error Occured: Session variables are not set".'<br>';
}
unset($_SESSION['favourite_color']);
if(isset($_SESSION['favourite_color'])){
	echo "Sessions variables are set-after unsetting".'<br>';
}
else{
	echo "Error Occured: Session Variables not set-after unsetting".'<br>';
}
session_destroy();
if(isset($_SESSION['favourite_color'])){
echo "Sessions variables are set-after destroying)".'<br>';
}
else{
echo "Error Occured: Session Variables not set- after destroying)".'<br>';
}
?>