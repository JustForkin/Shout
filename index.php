<html>
<head>
	<title>Shout!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><img src="shitter.png"></center>
<div class="pinched">
<form name="input" action="api.php?do=post" method="post">
<TEXTAREA NAME="text" ROWS="3" COLS="25"></TEXTAREA><br>
<p>Keep it under 300 chars, only 100 shouts will be shown at a time~</p>
<input type="submit" value="Shout!">
</div>

</form> 
<?php
require_once('core.php');
get();
?>
</body>
</html>