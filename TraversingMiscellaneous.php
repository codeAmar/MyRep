<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
Traversing Category - Miscellaneous
</title>
<style>
li{
background-color:pink;
}
.someclass{
color:red;
font-weight:bold;
}
.borderclass{
border:3px solid blue;
}
.widthclass{
width:200px;
}
</style>
<script src="https://code.jquery.com/jquery-1.10.2.js">
</script>
</head>
<body>
<div>
<ul>
<li>Item1</li>
<li><strong>Item2</strong></li>
<li>Item3
<ul>
<li>Sublist item 1</li>
<li>Sublist item 2</li>
</ul>
</li>
<li><strong>I</strong>tem<strong>4</strong></li>
</ul>
</div>
<hr>

<div>
<select class="single">
<option>Option1</option>
<option>Option2</option>
<option>Option3</option>
</select>
<hr>
<input class="widthclass" type="button" name="click" value="click">
<input type="button" name="touchme" value="Touch me"><br>
<hr>
<input type="checkbox" name="literate">Literate
<input type="checkbox" name="illiterate" checked>Illiterate
<hr>

<div>
<input type="radio" name="gender" value="male" checked>Male
<br>
<input type="radio" name="gender" value="female">Female
</div>

</div>
<button>button</button>
<p>Text<p>
<script>
//ADD
/*
$("ul").add("<li>item5</li>")
	.appendTo(document.body).css("borderclass")
*/
/*
$("select").add("input:button").addClass("borderclass");
*/

//ADDBACK
/*
$("select,:button").find(":contains('3')")
.addBack($(":button")).css("background-color","pink");
*/

//CONTENTS
/*
$("*")
.contents()
.filter(function(){
return this.nodeType === 1})
.css("color","blue")
.end()
.filter("hr")
.remove();
*/

//END
/*
$(".single")
.filter(function(){
return $(":last",this).length === 1})
.addClass("borderclass")
.end()
.css("color","maroon");
*/







</script>
</body>
</html>
