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
//DETACH
/*var p;
$(":button").click(function(){
if(p){
p.appendTo("body");
p=null;
} else {
p = $("input:text").detach();
}});
*/

//EMPTY- removes text node
//$(".inner:nth-child(2)").empty();

//REMOVE -  removes all including element
/*
$(":button").click(function(){
$(".inner").remove(":contains('2')");
});
$("button").click(function(){
$(".inner:nth-child(1)").after(z);
});*/

//UNWRAP
$(".inner").unwrap();






</script>
</body>
</html>
