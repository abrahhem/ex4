<!DOCTYPE html>
<html>
	
<head>
	<title>forms</title>
</head>

<body>
	<h1>Welcome </h1>
	<?php
		$fn = $_GET["reg_fn"];
		$pw = $_GET["reg_pw"];
		$ua = $_GET["reg_ua"];

		if($fn == "meri lee" && $pw == "1234" && $ua == "tel aviv")
				echo "<h2>Greetings and hello " . $fn . "</h2>";
			else
				echo "<h2>Not part of Aldia " . $fn . "? you can't get in!</h2>";	
			echo "Today is " . date("Y/m/d") . "<br>";

	?>

</body>

</html>
