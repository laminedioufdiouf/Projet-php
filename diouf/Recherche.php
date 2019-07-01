<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Recherche.php</title>
</head>
<body>
<div>
<form action="<?php echo $http_server_vars['php_self'];?>" method="post">
    Recherche: <input type="text" name="personal [Recherche]">
    <input type="hidden" name="action" value="submitted">
    <input type="submit" name="submit" value="submit me!">
    </form>
        <?php
         "<table border=\"1\" width=\"100%\">";
        // En tete du tableau
         "<thead>
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
            
            $search_value=50;
            array_keys ( array $produit [, mixed $search_value [, bool $strict = FALSE ] ]) : array
            print_r(array_keys($array));
            ?>
            
       </div>
</body>
</html>