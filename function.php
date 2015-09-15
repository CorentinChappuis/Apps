<?php
function divisionE($dividend, $diviseur)
	{
		$reste = 4;
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
		return $dividend;
	}