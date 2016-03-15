<!doctype html>
<html lang="en-US">
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
.sogreen{
color:green;
font-weight:bolder;
background:yellow;
}
</style>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<h2>this is header one</h2>
<h3>this is header two</h3>
<h3>this is header three</h3>
<form id="myform">
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
<div style="display:none" lang="en-us">hidden div</div>
<input type="text" value="male"><br><br>
<input type="file" value="upload"><br>
<input type="button" name="button" value="Halle-luah">
<input type="button" name="submit" value="submit" disabled>
<input type="button" value="clear">
<input type="button" value="click"><br><br>
</fieldset></form>
<span lang="es-es"></span>
<input type="image" src="w3slogo.gif" width="100" height="100">
<script>

//remove "//" from following selectors to run that particular code(selector)


//first child selector
/*$("ul li:first-child").css("border","2px solid red")
	.hover(function(){
		$(this).addClass("sogreen");
		},function(){
		$(this).removeClass("sogreen");
		});
*/
//first-of-type selector
//$("li:first-of-type").addClass("sogreen");

//first selector
//$("li:first").text("changed");

//focus-selector
/*
$("#myform").delegate("*","focus blur",function(){
var elem=$(this);
setTimeout(function(){
elem.toggleClass("sogreen",elem.is(":focus"));
},0);
});
*/

//gt() selector
//$("li:gt(2)").css("font-style","oblique");

//attribute selector
//$("input[name]").addClass("sogreen");

//has() selector
//$("select:has(option)").addClass("sogreen");

//header selector
//$(":header").addClass("sogreen");

//hidden selector
//$("body").find(":hidden").not("script").addClass("sogreen").show(5000);


//image selector
//$("input:image").css("border","2px solid pink");

//input selector
/*$(":input").addClass("sogreen");
var sekec=$("form > *");
console.log(JSON.stringify(sekec)); 
*/

//lang() selector
//$("div:lang(en-us)").addClass("sogreen").show(5000);

//last-child selector
//$("ul li:last-child").addClass("sogreen");

//last-of-type selector
$("li:last-of-type").addClass("sogreen");



</script>
</body>
</html>
