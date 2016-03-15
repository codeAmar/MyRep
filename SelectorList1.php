<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
Child Selector
</title>
<style>
body{
font-size=14px;
color:purple;
}
</style>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<form>
<fieldset>
<legend>Input Form</legend>
<ul class="topnav">
	<li>Item1</li>
	<li>Item2
		<ul>
		<li>SubItem1</li>
		<li>SubItem2</li>
		</ul>
	</li>
	<li>Item3</li>
	<li>Item4</li>
	<li>Item5</li>
	<li></li>
	<li></li>
</ul>
<select>
<option>Option1</option>
<option disabled>Option3</option>
<option>Option</option>
</select>
<div></div>
<input type="text" value="male"><br><br>
<input type="file" value="upload"><br>
<input type="button" name="button" value="Halle-luah">
<input type="button" name="submit" value="submit" disabled>
<input type="button" value="clear">
<input type="button" value="click">

</fieldset></form>
<script>

//remove "//" from each selector to execute that one..

//class selector
//$(".topnav").css("border","5px solid green");

//contain selector
//$("li:contains('Item')").append(" belongs to div");

//descendant selector
//$("form input,li").css("border","1px solid red");

//disabled selector
//$("input:disabled").css("border","2px solid pink").hide("slow");

//element select
//$("li").css("font-style","italic");


//empty selector
//$("li:empty").css("border","2px solid grey").text("Text Added");

//enabled selector
//$("option:enabled").css("border","2px solid pink");


//eq() selector
//$("input[type=button]:eq(1)").css("border","2px solid pink");

//even selector
//$("input[type=button]:even").val("even");

//file selector
$("input:file").css("font-style","oblique");


</script>
</body>
</html>
