<?php
setcookie("IWP","96",time()+259200);
if(isset($_COOKIE["IWP"])){
echo "IWP cookie detected";
}
else{
echo "Error Occured: IWP cookie not detected".'<br>';
}
?>