
1
<?php 
2
require('formulaire_div.html')
3
require('function.php');
4
if (isset($_POST['dividend']) && isset($_POST['diviseur']))
5
    {
6
        if (is_int($_POST['dividend']) && is_int($_POST['diviseur']) && $_POST['diviseur'] != 0)
7
            {
8
                $pgdc = divisionE($_POST['dividend'], $_POST['diviseur']);
9
                echo '<p>Le pgdc de ' . $dividend . 'et de ' . $diviseur. ' est de ' . $pgdc . '</p>';
10
            }
11
    }
12
else
13
    {
14
        echo '<p>Erreur, contacter admin@kropta.ovh pour un renseignement</p>';
15
    }