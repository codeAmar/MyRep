<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>nth-of-type demo</title>
  <style>
  .nth{
    color: red;
	text-decoration:underline;
  	border: 2px solid pink;
	background:yellow;
}
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div>
  <span>John</span><br>,
  <b>Kim</b><br>,
  <span>Adam</span><br>,
  <b>Rafael</b><br>,
  <span>Oleg</span><br>
</div><br><br>
<div>
  <b>Dave</b><br>,
  <span>Ann</span><br>
</div><br><br>
<div>
  <i><span>Maurice</span></i><br>,
  <span>Richard</span><br>,
  <span>Ralph</span><br>,
  <span>Jason</span><br>
</div><br><br>
<input type="text" name="fullname" value="Jquery"><br>
<input type="text" name="country" ><br>
<label for="check1">Vegetarian</label>
<input id="check1" type="checkbox" name="vegetarian"><br>
<label for="check2">Non-Vegetarian</label>
<input id="check2" type="checkbox" name="Non-vegetarian"><br>
<input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="female">Female<br>
<input type="submit" name="button" value="submit"><br>
<input type="button" name="button" value="clear"><br>
<input type="reset" name="reset" value="reset"><br>
<button>Button</button>
<input type="password" name="password" ><br>
<div id="divId"></div>
<div>
  <ul>
    <li>John</li>
    <li>Karl</li>
    <li>Brandon</li>
  </ul>
</div>
<div>
  <ul>
    <li>Sam</li>
  </ul>
</div>
<div>
  <ul>
    <li>Glen</li>
    <li>Tane</li>
    <li>Ralph</li>
    <li>David</li>
  </ul>
</div>
<div>
<select name="garden" multiple="multiple">
<option>Option1</option>
<option selected="selected">Option2</option>
<option>Option3</option>
<option selected="selected">Option4</option>
<option>Option5</option>
</select>
</div>
<script>



//nth-of-type selector
//$("span:nth-of-type(1)").css("color","pink").append(" (first child) ");

//last selector
//$("input:last").addClass("nth").css("border","2px solid pink");

//lt() selector
//$("input:lt(3)").val("less than selector element");


//multiple attribute selector
//$("input[type][name='button'][value='submit']").addClass("nth");

//multiple selector
//$("span,label").addClass("nth");

//next adjacent selector
//$("div + span ").css("border","2px solid red");

//next sibling selector
//$("div ~ input,label").addClass("nth");

//not() selector
//$("input:not(:radio)").addClass("nth");

//nth-child selector
//$("div ul li:nth-child(2)").addClass("nth").append("extra text"); 

//nth-last-child selector
//$("ul li:nth-last-child(1)").addClass("nth").append("extra text"); 

//nth-last-of-type selector
//$("ul li:nth-last-of-type(2)").addClass("nth").append("extra text"); 


//odd selector
//$("ul li:odd").addClass("nth").append("extra text"); 

//only child selector
//$(" ul li:only-child").addClass("nth").append("extra text"); 

//only-of-type selector
//$(" span:only-of-type").addClass("nth").append("extra text"); 

//parent selector
//$("li:parent").css("border","2px solid green");

//password selector
//$("input:password").addClass("nth");

//radio selector
//$("input:radio").wrap("<span></span>").parent().addClass("nth");

//reset selector
//$("input:reset").addClass("nth");

//root selector
//$("<b></b>").html($(":root")[0].nodeName).appendTo("#divId");

//selected selector
/*$("select").change(function(){
	var txt="";
	$("select option:selected").each(function(){
	txt+= $(this).text()+" ";
	});
	$("#divId").text(txt);
	}).trigger("change");
*/

//submit selector
//$("input:submit").addClass("nth");

//text selector
//$("input:text").addClass("nth");

//visible selector
$("span:visible").addClass("nth");





</script>
</body>
</html>
