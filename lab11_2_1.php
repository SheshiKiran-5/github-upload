<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("form").click(function(){
$(this).hide();
});
});
</script>
<script>
$(document). ready (function () {
$ ('p'). append ( '  I can do it.' );
});
</script>
<script>
function blink_text() {
$('.blink').fadeOut(500);
$('.blink').fadeIn(500);
}
setInterval(blink_text, 1000);
</script>
<script>
$(document).ready(function () {
$("button").click(function () {
$("#GFG").animate({
opacity: 0.5,
fontSize: "3em",
}, 1000);
});
});
</script>
</head>
<body style="background-color:rgb(61, 192, 209);">
<form>
<input type="button" value="Submit">
</form>
<p></p>
<p>I am<span class="blink"> VIT </span>Student</p>
<p id="GFG">
Hello, My name is Mandla Sheshi Kiran Reddy...
</p>
<button>Click Here!</button>
</body>
</html>