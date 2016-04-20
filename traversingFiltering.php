<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
Traversing Category - Filtering
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
<p></p>
<script>
//EQ 
//$("li").eq(2).css("color","green");

//FILTER
//$("option").filter(":even").addClass("someclass");
/*
$("li").filter(function(i){
return $("strong",this).length === 1;
}).addClass("borderclass");
*/

//FIRST
//$("div").first().addClass("borderclass");

//HAS
//$("li").has("ul").addClass("borderclass");

//IS
/*
$("li").click(function(event){
var target=$(this);
if(target.is("li")){
target.css("background-color","blue");
}
});
*/
/*
$("li").click(function(){
var li=$(this);
var twoli=li.is(function(){
return $(":contains('2')",this).length === 1 || 
$(this).children(":contains('2')").length === 1;
});
console.log(twoli);
if(twoli){
li.text("strong included");
}
else{
li.text("no strong");
}
});
*/
/*
var sleli=$("li:nth-child(2n)").addClass("someclass");
$("li").click(function(event){
var target=$(this);
if(target.is(sleli)){
target.css("color","purple");
}
else{
target.slideUp();
}
});
*/

//LAST
/*
$("option").css("background-color","maroon").last()
	.addClass("borderclass");
*/

//MAP
/*
$("button").click(function(){
var extractw=$("input").map(function(){
return $(this).prop("checked");
}).get().join("~");
$("p").append(extractw);
});*/
/*
$.fn.myfunc=function(){
var maparray=$(this).map(function(){
return $(this).width()
}).get();
console.log(maparray);
return this.width(Math.max.apply(this,maparray));
};
$("button").click(function(){
$("input:button").myfunc();
});
*/

//NOT
/*
$("li").not(":contains('3')").addClass("borderclass");
*/
/*
$("li").not(function(){
return $(":even",this).length === 1;
}).addClass("someclass");
*/

//SLICE

//$("li").slice(2,4).addClass("borderclass");

</script>
</body>
</html>
