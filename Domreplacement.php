<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
DOM removal
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
<div class="inner" style="border:2px solid green">Inner div 2</div>
<div class="inner">Inner div 3</div>
</div>
<input type="button" name="click" value="click">
<button>Clear</button>
<input type="text" name="fullname" >
<script>
//REPLACEALL

//$(".inner").eq(1).replaceWith("<h2>A new Heading<h2>");
/*$(".inner").click(function(){
$(this).replaceWith("<button>"+$(this).text()+"</button>");
});*/
/*$(".inner").click(function(){
$(this).replaceWith($("input:text"));
});*/

//REPLACEALL
$(".inner").click(function(){
$("input:button").replaceAll($(this));

});
</script>
</body>
</html>
