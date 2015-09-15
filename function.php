
1
<?php
2
function divisionE($dividend, $diviseur)
3
    {
4
        global $Erreur;
5
        while (reste != 0)
6
            {
7
                $quotient = dividend / diviseur;
8
                $enlever = quotient = diviseur;
9
                $reste = dividend - enlever;
10
                if ($reste == 0)
11
                    {
12
                        return $reste;
13
                    }
14
                else
15
                    {
16
                        $dividend = $diviseur;
17
                        $diviseur = $reste;
18
                    }
19
            }