<!DOCTYPE html>
<html>
<head>
	<title>Hotels.ng</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<p>HOTELS.NG</p>
	<h5>Book luxurious hotels more conveniently</h5>
	<br>
	<br>
	<br>
	<div  id="time">
		<p>TIME IS <?php
					 date_default_timezone_set("Africa/Lagos");
					echo date("g:i a", time());
					?>
		</p>
</div>
</body>
</html>
