<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
Attribute getter and setter method
</title>
<style>
.special{
font-color:red;
font-family:sans-serif;
float:center;
font-weight: bold;
background:green;
height:60px;
padding:10px;
};
div.colored{
background:purple;
};
div.jango{
background:yellow;
border: 1px solid black;
width:80px;
height:80px;
margin:5px;
float:left;
};
</style>
</head>
<body>
<nav class="special" >
<a href="http://www.w3schools.com/" hreflang="en" title="w3schools link">
W3schools</a>
<a href="http://www.google.com/" hreflang="en-UK" title="Google link">
Google.com </a>
<a href="http://www.yahoo.com/" hreflang="english" title="Yahoo link">
Yahoo.com</a>
</nav>
<div>
<label>FullName:
<input type="text" name="fullname" width="50px"><br>
<span>do someone needs my </span>
</label>
</div>
<br><br>
<div>
<label>E-mail:
<input type="email" name="email_id" width="50px"><br>
<span>enter your email id</span>
</label>
</div>
<img src="/w3slogo.gif" title="image of school" width="400" height="300"></img>
<button id="run">Run</button>
<div class="jango">h</div>
<div class="jango" id="mover">e</div>
<div class="jango">l</div>
<script src="jquery.js"></script>
<script>
$(function(){
$("a").attr({
title :"All links are same",
href :"http://www.google.com/"
});
$("img").attr("width","200");
});
console.log($("a").attr("href"));
$("img").click(function(event){
$(this).hide("slow");
});
$("img[title~='of']").val("hellp");
$("a[title*='oo']").css("border","5px solid red");
</script>
<script>
$("#run").click(function(){
$("div:animated").toggleClass("colored");
});
function animateIt(){
$("#mover").slideToggle("slow",animateIt);
}
</script>
</body>
</html>
