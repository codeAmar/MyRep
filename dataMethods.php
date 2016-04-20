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

<ul class="ulist">
<li class="listItem">Item1<div id="mydiv">div</div></li>
<li><strong>Item2</strong></li>
<li>Item3</li>
<li><strong>I</strong>tem<strong>4</strong></li>
</ul>

<script>
/*
$("#mydiv").data("myData",{foo:"bar"});
$("#mydiv").data("myData1","train");
var divdata=$("#mydiv").data("myData1");
console.log(divdata);
$(document.body).append("<p>"+divdata+"</p>");
*/
$(".listItem").each(function(){
var li=$(this);
var div=li.find("#mydiv");
li.data("contentDiv",div);
});

var firstli=$(".listItem:first");
firstli.data("contentDiv").append("<p>new div data</p>");
</script>
</body>
</html>
