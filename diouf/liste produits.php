<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aceuil.php</title>
</head>
<body>
    <div>
        <?php
        echo "<table border=\"1\" width=\"100%\">";
        // En tete du tableau
        echo "<thead>
                <tr>
                    <th> Nom du produit  </th>
                    <th> Prix </th>
                    <th>  Quantite </th>
                    <th>  Montant </th>
                </tr>
            </thead>";
            //creation du tableau
            $produit = array(
                    array('Nom'=> 'Parfun','Prix'=>2000,'Qté'=>50,'Montent'=>100000),
                    array('Nom'=> 'nivea','Prix'=>3000,'Qté'=>50,'Montent'=>150000),
                    array('Nom'=> 'portable','Prix'=>200000,'Qté'=>10,'Montent'=>2000000),
                    array('Nom'=> 'chemise','Prix'=>2000,'Qté'=>100,'Montent'=>2000000),
                    array('Nom'=> 'jean','Prix'=>30000,'Qté'=>100,'Montent'=>3000000),
                    array('Nom'=> 'pantalon','Prix'=>15000,'Qté'=>100,'Montent'=>1500000),
            );
                    //lecture des indices et des valeurs
                foreach($produit as $cle=>$tab)
                {
                    foreach($tab as $sky=>$valeur)
                    {
                        echo "<td><strong> $valeur </strong></td>";
                    }
                    echo "</tr>";
                }
                echo "</tab>";
            ?>
       </div>
    
</body>
</html>