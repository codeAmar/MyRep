<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
Style Properties
</title>
<script src="https://code.jquery.com/jquery-1.10.2.js">
</script>
<style>
div{
color: pink;
background-color:black;
font-size:20px;
margin:20px;
padding:10px;
}
span{
border: 3px solid grey;
width:50px;

}
.inner{
font-style:oblique;
}
.wrapclass{
border:3px solid green;
}
input{
color:purple;
background-color:violet;
}
select{
color:maroon;
width:100px;
height:50px;
background-color:black;
}
</style>
</head>
<body>
<div class="outer">
<div class="inner" title="enter">Inner div 1</div>
<div class="inner" title="enter" style="border:2px solid green">Inner div 2</div>
<div class="inner" title="enter" >Inner div 3</div>
</div>
<span></span>
<input type="button" name="click" value="click">
<button>Clear</button><br>
<input type="text" name="fullname" value="fullname" title="enter Fullname" ><br>
<input type="checkbox" name="married">Married
<p></p>
<select id="single">
<option>Option1</option>
<option selected="selected">Option2</option>
<option>Option3</option>
<option>Option4</option>
</select>
<select id="multiple" multiple="multiple">
<option>Option1</option>
<option>Option2</option>
<option>Option3</option>
<option>Option4</option>
</select>
<script>
//UNCOMMENT EACH CODE SECTION TO EXECUTE IT INDIVIDUALLY..
//CSS get
/*$("div,input,select").click(function(){
var style1 = $(this).css(["color","background-color"]);
console.log(JSON.stringify(style1,null,3));
$.each(style1, function(prop,value) {
$("span").append(prop+" : "+value);
});
});*/

//CSS set
/*$(".inner,input,select,button").on("mouseenter",function(){
$(this).css({
"border":"3px solid red",
"font-size":"28px"
});
}).on("mouseleave",function(){
$(this).css({
"border":"",
"font-size":""
});
});*/
/*
$("div").click(function(){
$(this).css({
width:(i,val)=>(parseFloat(val) + 100)	,
height:(i,bal)=>(parseFloat(bal) + 50)	
});
});*/


//HEIGHT get
/*
$("p").append($(document).height()+" ");
$("p").append($(window).height()+" ");
$("p").append($("select").height());
*/

//HEIGHT set
/*
$("input:text").click(function(){
$(this).height((i,val)=>(parseFloat(val)+20))
	.val([$(this).height(),$(this).width()]);
});*/

//WIDTH get
/*var thid=$("p");
thid.append($(document).width()+" ");
thid.append($(window).width()+" ");
thid.append($("select").width()+" ");
*/

//WIDTH set
/*$("input:text").click(function(){
$(this).width((i,val)=>(parseFloat(val)-10))
        .val([$(this).height(),$(this).width()]);
});*/

//INNERHEIGHT get
/*
$("div").click(function(){
$("p").html("Innerheight :"+$(this).innerHeight()+" Height: "+$(this).height());
});
*/

//INNERHEIGHT set
/*
$(".inner").click(function(){
$(this).innerHeight((i,val)=>(parseFloat(val)-10));
$("p").html($(this).innerHeight());
});
*/

//INNERWIDTH get
/*
$("div").click(function(){
$("p").html(
"InnerWidth :"+$(this).innerWidth()+
" width "+$(this).width()+
" DOcumentInnerWidth"+$(document).innerWidth()+
" DocumentWidth"+$(document).width()+
" WindowInnerwidth"+$(window).innerWidth()+
" WindowWidth"+$(window).width()
);
});
*/

//INNERWIDTH set
/*
$(".inner").click(function(){
$(this).innerWidth((i,cal)=>(parseFloat(cal)-10));
$("p").html($(this).innerWidth());
}).toggleClass("wrapclass");
*/

//OFFSET get
/*
$("*",document.body).click(function(){
var offset=$(this).offset();
$("p").text(this.tagName+"(Coords :"+
offset.left+
" , "+
offset.top+")"
);
});
*/

//OFFSET set
//$(":checkbox").offset({top:50,left:50});

//OUTERHEIGHT get
/*
$("p").html($(".inner").eq(2).outerHeight()+
" : "+
$(".inner").eq(2).outerHeight(true));
*/

//OUTERHEIGHT set
/*
$(".inner").click(function(){
$(this).outerHeight((i,val)=>(parseFloat(val)-20));
});*/

//OUTERWIDTH get
/*
$("p").html($(".inner").eq(2).outerWidth()+
" : "+
$(".inner").eq(2).outerWidth(true));
*/

//OUTERWIDTH set
/*
$(".inner").click(function(){
$(this).outerWidth((i,val)=>(parseFloat(val)-20));
});
*/

//POSITION 
/*
var seldiv=$(".inner").eq(1).position();
$("p").html(seldiv.left+" : "+seldiv.top);
*/

//SCROLLLEFT get
//$("p").html($("#multiple").scrollLeft());

//SCROLLLEFT set
//$(":button").scrollLeft(300);

//SCROLLTOP get
//$("p").html($("#multiple").scrollTop());

//SCROLLTOP set
//$(":button").scrollTop(300);




</script>
</body>
</html>
