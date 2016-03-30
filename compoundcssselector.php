<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
Working with Selectors
</title>
<style>
.effects{
color:violet;
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
<h3 class="h3class">Third Heading</h3>
<h3>Fourth Heading</h3>
</div>
<h3 class="myclass">Outside Heading</h3>
<script>
//$("#divId h3.h3class").text("changed Heading").addClass("effects");

//comma seperated list of selectors
$("#divId h3.h3class,h3.myclass").text("changed heading").addClass("effects");
</script>
</body>
</html>
