<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tableau en php</title>
</head>
<body>
    <?php
    $produit = array(
        array('Nom du produit', 'Quantité', 'Prix unitaire', 'Prix total'),
        array("produits pour la peau",20,2000 ,40000),
        array('produits hygiène',50,1500 ,75000),
        array('produits capillaires',100,1000 ,100000),
        array('autres',200,700 ,140000),
    );
    <table>
        
        <tr><th> echo $produit[0][0]. ' ' .$produit[0][1]. ' ' .$produit[0][2]. ' ' .$produit[0][3]. ' ' .$produit[0][4].</th> </tr> '.</br>.';
        <tr><td> echo $produit[1][0]. ' ' .$produit[1][1]. ' ' .$produit[1][2]. ' ' .$produit[1][3]. ' ' .$produit[0][4].</td> </tr> '.</br>.';
        <tr><td>echo $produit[2][0]. ' ' .$produit[2][1]. ' ' .$produit[2][2]. ' ' .$produit[2][3]. ' ' .$produit[0][4].</td> </tr> '.</br>.';
        <tr><td>echo $produit[3][0]. ' ' .$produit[3][1]. ' ' .$produit[3][2]. ' ' .$produit[3][3]. ' ' .$produit[0][4].</td> </tr> '.</br>.';
        <tr><td>echo $produit[4][0]. ' ' .$produit[4][1]. ' ' .$produit[4][2]. ' ' .$produit[4][3]. ' ' .$produit[0][4].</td> </tr> '.</br>.';
       
    </table>
     
    ?>
</body>
</html>