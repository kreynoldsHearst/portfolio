<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Site Title Here</title>
<link rel="stylesheet" href="assets/css/style.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.jInvertScroll.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$.jInvertScroll(['.foreground', '.rearground']);
	
	var numClouds = 30;
	
	for(var i=0; i<numClouds; i++)
	{
		var top = Math.random()*100;
		var left = Math.random()*100;
		//$('body').append('<div class="cloud" id="cloud'+i+'">&nbsp;</div>');
		//$('div#cloud'+i).css('top', top+'%').css('left', left+'%');
	}
});
</script>
</head>
<body>

<div class="foreground"><img src="assets/images/foreground.png" /></div>
<div class="rearground"><img src="assets/images/rearground.png" /></div>

</body>
</html>