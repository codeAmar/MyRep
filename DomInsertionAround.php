<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
DOM around insertion
</title>
<script src="https://code.jquery.com/jquery-1.10.2.js">
</script>
<style>
div{
color: pink;
background:black;
font-size:20px;
margin:20px;
padding:10px;
}
.inner{
font-style:oblique;
}
.wrapclass{
border:3px solid green;
}
</style>
<body>
<div class="outer">
<div class="inner">Inner div 1</div>
<div class="inner">Inner div 2</div>
<div class="inner">Inner div 3</div>
</div>
<input type="button" name="click" value="click"></input>
<script>
//WRAP
//simple wrap
/*$(".inner").wrap("<div>Wrapped Div</div>").css({
"border":"2px solid yellow",
"background-color":"green"
});*/

//wrap using a function
/*$("div").wrap(function(){ return("<div>Function wrap div</div>");}).
css("border","3px solid blue");
*/

//WRAP INNER
//$(".inner").wrapInner("<b></b>").css("background-color","green");
//$(".inner").wrapInner( () => ("<b></b>"));


//WRAP ALL
//$(".inner").wrapAll("<div class='wrapclass'></div>");
//$(".inner").wrapAll( () => ("<div class='wrapclass'></div>"));

//UNWRAP
/*$("input:button").on("click",function(){
var inn= $(".inner");
if(inn.parent().is("div")){
inn.unwrap();
}else{
inn.wrapAll("<div></div>");
}});
*/








</script>
</body>
</html>
