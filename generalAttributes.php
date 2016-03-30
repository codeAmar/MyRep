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
//EXECUTE EACH COMMENTED CODE INDIVIDUALLY
//ATTR get
/*var name=$(":button").attr("name");
$(".outer").append(name);
*/

//ATTR set method
/*$(":button").attr({
name:"pic",
value:"pic",
});
$("input:text").attr("title",(index,val)=>(val +" please !!"));
*/
/*
$(".inner").attr("title",(index,val)=>(val + " please " +index))
	.each(function(){
	$("span").append(this.title + "<br>");
		});
*/

//PROP
//$("input:checkbox").prop("checked","true");
/*$(":button").click(function(){
$("input:checkbox").prop("checked",(i,val)=>(!val));
});*/

//VAL get
/*$("input[type=text]").keyup(function() {
var value1 = $(this).val();
$("p").text(value1);
}).keyup();
*/
/*
function displayVals(){
var singlevals=$("#single").val();
var multiplevals=$("#multiple").val();
$("p").html("<b>Single vals :</b>"+singlevals+"<br>"+"<b>Double vals :</b>"+multiplevals);
}
$("select").change(displayVals);
displayVals();
*/
//VAL set
/*$(".inner").click(function(){
var divtext=$(this).text();
$("input:text").val(divtext);
});*/
/*
$("input:text").on("blur",function(){
$(this).val((i,val)=>(val.toUpperCase()));
});*/

//REMOVE ATTRIBUTE
/*$("button").click(function(){
$("input:text").removeAttr("value");
});*/

//REMOVE PROPERTIES
/*var span1 = $( "span" );
span1
  .prop( "luggageCode", 1234 )
  .append( "The secret luggage code is: ",
   String( span1.prop( "luggageCode" ) ), ". " )
  .removeProp( "luggageCode" )
  .append( "Now the secret luggage code is: ",
   String( span1.prop( "luggageCode" ) ), ". " );
*/
</script>
</body>
</html>
