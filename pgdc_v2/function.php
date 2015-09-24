<?php
function divisionE($nombre1, $nombre2)
	{
		$reste = -3;
		if ($nombre1 < $nombre2)
			{
				$dividend = $nombre2;
				$diviseur = $nombre1;
			}
		else
			{
				$dividend = $nombre1;
				$diviseur = $nombre2;
			}
		while ($reste != 0)
			{
				$quotient = floor($dividend / $diviseur);
				$enlever = $quotient * $diviseur;
				$reste = $dividend % $enlever;
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