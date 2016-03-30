<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
Manipulating Class attribute
</title>
<style>
.style1{
border: 3px solid green;
text-decoration:underline;

}
.style2{
border: 3px solid pink;
text-decoration:underline;
font-style:oblique;
}
.style3{
border: 3px solid red;
text-decoration:underline;
font-style:oblique;
}
.style4{
background-color:purple;
}
.style5{
font-size:20px;
}
</style>
<script src="https://code.jquery.com/jquery-1.10.2.js">
</script>
</head>
<body>
<div id="divId1">div1</div>
<div>div2</div>
<div id="divId2">div3</div>
<div id="divId3" class="style2">div4</div>
<div id="divId4" class="style2">div5</div>
<p class="style2">there is no style2 div</p>

<ul>
<li>listelement1</li>
<li class="style3">listelement2</li>
<li class="style3">listelement3</li>
<li class="style3">listelement4</li>
</ul>


<script>
//ADD CLASS FUNCTION
//adding multiple classes at once
//$("#divId1,#divId3").addClass("style1 style4 style5");

/*Removing class from the attribute
$("div:nth-child(4)").removeClass("style2").addClass("style1").
append(" style and text changed");
*/

//function as parameter of addclass
//$("div").addClass(index=>"style"+index);

/*div as function part2
$("div").addClass(function(index,currentClass){
var addedClass;
if(currentClass==="style2"){
addedClass="style5";
$("p").text("there is one style 2 div");
}
return addedClass;
});*/

/*HAS CLASS FUNCTION

$("#divId3").prepend("Has class style2: "+$("div").hasClass("style2").
toString()+ "  ");*/

//REMOVE CLASS
/*$("li:last").removeClass(function(){return $(this).prev().attr("class");}).
append("Class similar to previous element removed");
*/

//Toggle class
//$(" div ").click(function() { $(this).toggleClass("style5");});

//toggle class part2
$(function(){
var count=0;
$("div").each(function() {
var $thisp = $( this );
var count = 0;
$thisp.click(function() {
count++;
$( $thisp ).toggleClass("style5", count % 3 === 0);
});
});
});

</script>
</body>
</html>
