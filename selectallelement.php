<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>all demo</title>
  <style>
  h3 {
    margin: 0;
  }
  div, span, p {
    width: 80px;
    height: 40px;
    float: left;
    padding: 10px;
    margin: 10px;
    background-color: blue;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div>DIV</div>
<span>SPAN</span>
<p>P <button>Button</button></p>
 
<script>
var elementCount = $( "*" ).css("border","5px solid purple").length;
$( "body" ).prepend( "<h3>" + elementCount + " elements found</h3>" );
</script>
 
</body>
</html>