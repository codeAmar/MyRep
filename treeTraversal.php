<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
Traversing Category - Tree
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
<div style="position: relative;">
<ul class="ulist">
<li>Item1</li>
<li><strong>Item2</strong></li>
<li>Item3
<ul>
<li id="sublistItem">Sublist item 1</li>
<li>Sublist item 2</li>
</ul>
</li>
<li><strong>I</strong>tem<strong>4</strong></li>
</ul>
</div>
<hr>

<div style="position: relative;">
<select class="single">
<option>Option1</option>
<option>Option2</option>
<option>Option3</option>
</select>
<hr>
<input class="widthclass" type="button" name="click" value="click">
<input type="button" name="touchme" value="Touch me">
<hr>
<input type="checkbox" name="literate">Literate
<input type="checkbox" name="illiterate" checked>Illiterate
<hr>
<input type="text" name="fullname">
<div>
<hr>
<input type="radio" name="gender" value="male" checked>Male
<br>
<input type="radio" name="gender" value="female">Female
</div>

</div>
<button>button</button>
<p>A paragraph which will be converted into multiple spans and characters which include word t will be turned italics.Color of text would be changed also.</p>
<script>
//REMOVE COMMENTS FROM EACH SECTION INDIVIDUALLY TO EXECUTE

//CHILDREN

//$("div").children().addClass("someclass");
//$(".ulist").children().addClass("borderclass");
//$("div:last-of-type").children(":gt('2')").addClass("someclass");

//CLOSEST
/*$("#sublistItem").closest("ul").addClass("borderclass");
*/
/*
$("#sublistItem")
.closest("li",document.getElementsByClassName("ulist"))
.addClass("borderclass");
*/

//FIND
//$(".ulist").find("ul").addClass("borderclass");
//$(".ulist").find("li:last").addClass("someclass");
/*
var htmlstr=$("p").text().split(" ")
	.join("<span> </span> ");
htmlstr="<span>"+htmlstr+"</span>";
$("p")
.html(htmlstr)
.find("span")
.hover(function(){
$(this).addClass("someclass");
},
function(){
$(this).removeClass("someclass");
})
.end()
.find(":contains('t')")
.css("color","yellow");
*/

//NEXT
//$("input[value='click']").next().addClass("widthclass");
//$("input:button").next("hr").css("color","yellow");

//NEXTALL
//$("li:nth-child(2)").nextAll().addClass("someclass");
//$("select").nextAll("hr").addClass("someclass");

//NEXTUNTIL
//$("select").nextUntil("div",":button,input:text").addClass("borderclass");

//OFFSETPARENT
//$("input:radio").offsetParent().addClass("borderclass");

//PARENT
/*
$("*",document.body).each(function(){
var parentTags=$(this).parent().get(0).tagName;
$(this).prepend(document.createTextNode(parentTags +" > "));
});
*/

//PARENTS
/*
function showParents(){
$("div").css("border-color","white");
var len=$(".someclass")
	.parents("div")
	.css("border","2px solid green")
	.length;
$(document.body).append("<p>parent div : "+len+"</p>");
}
$("*",document.body).click(function(){
$(this).toggleClass("someclass");
showParents();
});
*/

//PARENTSUNTIL
//$("option").parentsUntil("div").addClass("someclass");

//PREV
//$("input:button").prev().addClass("borderclass");
//$("input:button").prev(":button").addClass("borderclass");

//PREVALL
//$("button").prevAll().addClass("borderclass");
//$("button").prevAll("hr").addClass("borderclass");

//PREVUNTIL
//$("button").prevUntil("div:first").addClass("borderclass");
/*
$("button").prevUntil("div:first","hr")
.addClass("borderclass");
*/

//SIBLINGS
//$("div select").siblings().addClass("borderclass");
$("div select").siblings("input:text").addClass("borderclass");

</script>
</body>
</html>
