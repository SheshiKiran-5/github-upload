<!DOCTYPE html>
<html>
<head>
<script lang="javascript">
function load() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (xhttp.readyState == 4 && xhttp.status == 200) {
document.getElementById("20BAI1061-LAB12").innerHTML = xhttp.responseText;
}
}
xhttp.open("GET", "lab12_4xml.xml", true);
xhttp.send();
}
</script>
</head>
<body>
<div id="20BAI1061-LAB12">
<h2>20BAI1061-AJAX File Call</h2>
<button type="button" onclick="load()">Visit file content</button>
</div>
</body>
</html>