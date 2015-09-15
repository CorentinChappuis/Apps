<html>
	<head>
		<title>Division Euclidienne</title>
		<meta charset="utf8" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Division Euclidienne</h1>
		<h2>Vous pouvez calculer le pgdc de 2 nombre sur cette page web.</h2>
		<form method="post" action="test2.php" >
			<label for="dividend">Mettez le plus grand nombre : </label>
			<input type="number" name="dividend" required autofocus/>
			<br />
			<label for="diviseur">Le deuxième nombre (pas 0) : </label>
			<input type="number" name="diviseur" required />
			<br />
			<input type="submit" value="Calculer" />
		</form>
	</body>
</html>
<?php
$pgdc = divisionE($_POST['dividend'], $_POST['diviseur']);
echo '<br />' . $pgdc;
function divisionE($dividend, $diviseur)
	{
		$reste = 3;
		while ($reste != 0)
			{
				echo '<br />dividend ' . $dividend;
				echo '<br />diviseur ' . $diviseur;
				$quotient = floor($dividend / $diviseur);
				echo '<br />quotient ' . $quotient;
				$enlever = $diviseur * $quotient;
				echo '<br />enlever ' . $enlever;
				$reste = $dividend % $enlever;
				echo '<br />reste ' . $reste;
				if ($reste == 0)
					{
						return $diviseur;
					}
				else
					{
						$dividend = $diviseur;
						$diviseur = $reste;
					}
			}
	}