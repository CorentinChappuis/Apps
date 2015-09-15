<?php
global $Erreur;
$Erreur = 0;
global $dividend;
global $diviseur;
global $pgdc;
require('formulaire_div.html');
require('function.php');
if (isset($_POST['dividend']) && isset($_POST['diviseur']))
	{
		if (is_numeric($_POST['dividend']) && is_numeric($_POST['diviseur']) && $_POST['diviseur'] != 0)
			{
				if ((int)$_POST['dividend'] == (float)$_POST['dividend'] && (int)$_POST['diviseur'] == (float)$_POST['diviseur'])
					{
						if ($_POST['dividend'] < $_POST['diviseur'])
							{
								$dividend = $_POST['diviseur'];
								$diviseur = $_POST['dividend'];
							}
						else
							{
								$dividend = $_POST['dividend'];
								$diviseur = $_POST['diviseur'];
							}
						$pgdc = divisionE($dividend, $diviseur);
						echo '<p>Le pgdc de ' . $dividend . ' et de ' . $diviseur . ' est de <strong>' . $pgdc . '</strong></p>';	
					}
				else
					{
						echo '<p class="erreur">Veuillez utiliser des nombres entiers!</p>';
					}	 
			}
		elseif ($_POST['diviseur'] == 0)
			{
				echo '<p class="erreur">Veuillez ne pas utiliser 0 comme deuxième nombre!</p>';
			}
		else
			{
				echo '<p class="erreur">Veuillez utiliser des nombres entiers!</p>';
			}
	}
if (isset($pgdc) && $Erreur != 0)
	{
		echo '<p>Une erreur ? -> contactez admin@kropta.ovh</p>';
	}