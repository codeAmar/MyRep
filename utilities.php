<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
Utilities
</title>
<style>
div{
margin:3px;
width:40px;
height:40px;
position:absolute;
left:200px;
top:360px;
background:green;
display:none;
}
div.newcolor{
background:blue;
}
div.newcolor1{
background:cyan;
}
div.newcolor2{
background:maroon;
}
p{
color:red;
}
</style>
<script src="https://code.jquery.com/jquery-1.10.2.js">
</script>
</head>
<body>
<button>Start</button>
<button>Stop</button>
<p>The queue length is: <span></span></p>
<div></div>

<script>
//QUEUE get
/*
var div=$("div");
function runIt(){
div
	.show("slow")
	.animate({left:"+=200"},2000)
	.slideToggle(1000)
	.slideToggle("fast")
	.toggleClass("newcolor")
	.animate({top:"+=200"},2000)
	.slideToggle(2000)
	.slideToggle("fast")
	.animate({left:"-=200"},2000)
	.slideToggle(1000)
	.slideToggle("fast")
	.animate({top:"-=200"},2000)
	.hide("slow")
        .show(1200)
	.slideUp("normal",runIt);
}

function showIt(){
var n=div.queue("fx");
$("span").text(n.length);
setTimeout(showIt,100);
}

runIt();
showIt();
*/

//QUEUE set
/*
var div=$("div");
$("button:first").click(function(){
div
	.show("slow")
	.animate({left:"+=200"},2000)
	.slideToggle(1000)
	.slideToggle("fast")
	.queue(function(){
		$(this).addClass("newcolor")
			.dequeue();
		})
	.animate({top:"+=200"},2000)
	.slideToggle(1000)
	.slideToggle("fast")
	.queue(function(){
		$(this).removeClass("newcolor")
			.addClass("newcolor1")
			.dequeue();
		})
	.animate({left:"-=200"},2000)
	.slideToggle(1000)
        .slideToggle("fast")
        .queue(function(){
                $(this).removeClass("newcolor1")
                        .addClass("newcolor2")
			.dequeue();
                })
        .animate({top:"-=200"},2000)
        .slideToggle(1000)
        .slideToggle("fast")
        .queue(function(){
                $(this).removeClass("newcolor2")
                        .dequeue();
                })
	.slideUp("slow");
});
$("button:last").click(function(){
div
	.queue("fx",[])
	.stop();
});
*/

//CLEARQUEUE
/*
var div=$("div");
$("button:first").click(function(){
div
	.show("slow")
	.animate({left:"+=200"},2000)
	.slideToggle(1000)
	.slideToggle("slow")
	.queue(function(){
		$(this).addClass("newcolor1")
			.dequeue();
		})
	.animate({left:"-=100",top:"+=50"},2000)
	.slideUp();
});
$("button:last").click(function(){
div.clearQueue().stop();
});
*/

//DEQUEUE
var div=$("div");
$("button:first").click(function(){
div
	.show("slow")
	.animate({left:"+=300"},4000)
	.queue(function(){
		$(this).addClass("newcolor2")
			.dequeue();
		})
	.animate({left:"-=250"},5000)
	.slideToggle("fast");
});
$("button:last").click(function(){
div.clearQueue().stop();
});





</script>
</body>
</html>
