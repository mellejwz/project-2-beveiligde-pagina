<?php error_reporting(null) ?>
<!DOCTYPE html>
<html>
<head>
	<title>Top secret</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
		<form action="topsecret.php" method="post">
			<input type="password" name="wachtwoord">
			<input type="submit" value="log in">
		</form>

		<?php 
			$wachtwoord = "sesamOpenU";
			if (isset($_POST['wachtwoord'])){
				$ingevuldeWachtwoord = $_POST['wachtwoord'];
			} else{
				$ingevuldeWachtwoord = NULL;
			}

			if ($wachtwoord === $ingevuldeWachtwoord){
				echo "Welkom!!";
			} else{
				echo "Ga weg hacker!";
			}
		?>
	</div>
</body>
</html>