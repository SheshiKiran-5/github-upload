<!DOCTYPE html>
<html>
<head>
<style>
form{
border: 10 px;
background-color: black;
color: red;
width: 300px;
height: 100px;
border-bottom: 300px;
margin: 30px;
padding: 30px;
}
</style>
<?php
$filename="sample.txt";
if (file_exists($filename)) {
$message = "The file $filename exists";
} else {
$message = "The file $filename does not exist";
echo $message;
}
$myfile = fopen("sample.txt", "a") or die("Unable to open file!");
$txt="Hello! How are you?\n";
$co=count(file($filename));
$wordCount = str_word_count(file_get_contents('sample.txt'));
fwrite($myfile, $txt);
fclose($myfile);
$paragraphs=0;
if ($fh = fopen("sample.txt",'r')) {
while (! feof($fh)) {
$s = fgets($fh,1048576);
if (("\n" == $s) || ("\r\n" == $s)) {
$paragraphs++;
}
}
}
echo "\n".$paragraphs;
fclose($fh);
$ma=array();
$file=fopen("sample.txt","r");
while (!feof($file) ){
$line_of_text = fgets($file);
$line_of_text = str_replace(",", "", $line_of_text); 
$parts = explode(" ", $line_of_text);
$ma=array_merge($ma,$parts);
}
echo count($ma);
$d=array_unique($ma,SORT_STRING);
echo "\n".count($d);
$c=0;
$final=[];
foreach($d as $uni)
{
foreach($ma as $t)
{
if($uni===$t)
$c++;
} 
$final[$uni]=$c;
$c=0;
}
foreach($final as $x => $x_value) {
echo "Word=" . $x . ", Count=" . $x_value;
echo "\n";
}
echo "\nParagraphs: ".$paragraphs;
echo "\nLineCount :".$co."\nWord count: ".$wordCount;
fclose($file);
if(isset($_FILES["fileToUpload"]["name"])||isset($_FILES["fileToUpload"]["tmp_name"]))
{
$target_dir = "C:/xampp";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
echo "<br>The file". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded 
successfully ";
}
?>
</head>
<body>
<form action="lab10q1.php" method="post" enctype="multipart/form-data">
Select File to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload File" name="submit">
</form>
</body>
</html>
