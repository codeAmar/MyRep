<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>button demo</title>
  <style>
  textarea {
    height: 35px;
  }
  div {
    color: red;
  }
  fieldset {
    margin: 0;
    padding: 0;
    border-width: 0;
  }
  .marked {
    background-color: yellow;
    border: 3px red solid;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<form>
  <fieldset>
    <input type="button" value="Input Button">
	<input type="button" value="click" name="mybutton">
    <input type="checkbox">
	<input type="checkbox"> 
    <input type="file">
    <input type="hidden">
    <input type="image">
 
    <input type="password">
    <input type="radio">
    <input type="reset">
 
    <input type="submit">
    <input type="text">
    <select>
      <option>Option</option>
    </select>
 
    <textarea></textarea>
    <button>Button</button>
  </fieldset>
</form>
 
<div></div>
 
<script>
//button selector
/*
var input = $( "button,input[name='mybutton']").filter("input[name='mybutton']").addClass( "marked" );
*/
//checkbox selector
var input=$("[type='checkbox']").wrap("<span></span>")
	.parent()
	.css({
	background:"purple",
	border:"3px solid red"
	});	
$( "div" ).text( "For this type jQuery found " + input.length + "." );
// Prevent the form from submitting
$( "form" ).submit(function( event ) {
  event.preventDefault();
});
</script>
 
</body>
</html>


