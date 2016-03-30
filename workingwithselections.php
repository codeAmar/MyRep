<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
Working with Selectors
</title>
<style>
.effects{
color:voilet;
text-decoration:underline;
border: 2px solid pink;
font-style:oblique;
};
</style>
<script src="https://code.jquery.com/jquery-1.10.2.js">
</script>
<body>
<div id="divId">
<h3>First Heading</h3>
<h3>Second Heading</h3>
<h3>Third Heading</h3>
<h3>Fourth Heading</h3>
</div>
<script>
//$("#divId").find("h3").eq(2).html("Changed Heading");
//$(" h3:nth-child(3)").html("changed Heading");
$("#divId").find("h3").eq(2).html("changed heading")
.end().eq(0).html("Changed heading").addClass("effects");
</script>
</body>
</html>
