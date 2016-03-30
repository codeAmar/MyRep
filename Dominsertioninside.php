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
//Append
//$(".inner").append("<b> Appended</b>");
//$(".outer").append($(":button"));
//$(".outer").append(()=>($(":button"))).addClass("wrapclass");

//Appendto
//$("<b> Appended Text</b>").appendTo(".inner");
//$($(":button")).appendTo(".outer");

//Prepend
//$(".inner").prepend("<b> Prepended text </b>");
//$(".outer").prepend(document.createElement("span"));
//$(".outer").prepend(document.createTextNode("Outer div"));

//prependto
/*$("<b>Prependto Text </b>").prependTo([".inner",".outer"]);
$(".inner").prependTo(".outer");
*/

//text
/*var divtext=$(".inner").eq(2).text();
$(".outer").append(divtext);
*/
//$(".inner").text((index)=>("count# "+index));
//$(".outer").text("kell").css("font-weight","bold").addClass("wrapclass");


//HTML
/*var outerhtml=$(".outer").html();
$(".outer").append(document.createElement("span")).text(outerhtml);
*/

$(".outer").prepend("<div class='inner'>Inner div 0</div>");

</script>
</body>
</html>
