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
span{
border: 3px solid grey;
width:50px;
background:blue;
}
.inner{
font-style:oblique;
}
.wrapclass{
border:3px solid green;
}
</style>
</head>
<body>
<div class="outer">
<div class="inner">Inner div 1</div>
<div class="inner">Inner div 2</div>
<div class="inner">Inner div 3</div>
</div>
<input type="button" name="click" value="click"></input>
<script>
//AFTER
//$(".inner").eq(1).after("<div class='wrapclass'>After inserted div</div>");
/*$(".inner").eq(0).after((index,str)=>("<span>After inserted span "+str+index+"</span>")).css("margin-left","10px");
*/


//INSERTAFTER
/*$(document.createElement("span"))
.text("text inside span")
.insertAfter(".outer");*/


//BEFORE
//$(".inner").eq(1).before($(":button"),"<span>hellp</span>");


//INSERTBEFORE
$("<span>A Span text</span>").insertBefore(".inner:last");
</script>
</body>
</html>
