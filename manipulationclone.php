<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
Manipulation method clone
</title>
<script src="https://code.jquery.com/jquery-1.10.2.js">
</script>
<style>
.style1{
font-size:20px;
}
</style>
</head>
<body>
<b>Hello</b><br>
<p>How are you?</p>
<script>
$("b").clone().prependTo("p");
</script>
</body>
</html>
