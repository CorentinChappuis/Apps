<?php
global $Erreur;
$Erreur = 0;
global $nb1;
require('formulaire.html');
require('function.php');
if (isset($_POST['nb1']) && isset($_POST['nb2']))
	{
		$nb1 = $_POST['nb1'];
		$nb2 = $_POST['nb2'];
		if ($nb1 == 0)
			{
				$Erreur++;
				$nb1 = true;
			}
		elseif ($nb1 < 0)
			{
				$nb1 = -$nb1;
			}
		if ($nb2 == 0)
			{
				$Erreur++;
				$nb2 = true;
			}
		elseif ($nb2 < 0)
			{
				$nb2 = -$nb2;
			}
		if (!empty($_POST['nb3']))
			{
				$nb3 = $_POST['nb3'];
				if ($nb3 == 0)
					{
						$Erreur++;
						$nb3 = true;
					}
				elseif ($nb3 < 0)
					{
						$nb3 = -$nb3;
					}
			}
		else
			{
				$nb3 = $nb1;
			}
		if (!empty($_POST['nb4']))
			{
				$nb4 = $_POST['nb4'];
				if ($nb4 == 0)
					{
						$Erreur++;
						$nb4 = true;
					}
				elseif ($nb4 < 0)
					{
						$nb4 = -$nb4;
					}
			}
		else
			{
				$nb4 = $nb1;
			}
		if ($Erreur == 0)
			{
				$pgdc = divisionE(divisionE(divisionE($nb1, $nb2), $nb3), $nb4);
				echo '<p>Le pgdc est de : <strong>' . $pgdc . '</strong>';
			}
		else
			{
				echo '<p class="erreur">Veuillez n\'utilisez que des entiers !</p>';
			}
	}