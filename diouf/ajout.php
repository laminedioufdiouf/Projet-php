<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>ajout.php</title>
</head>
<body>
    <h1 class=titre>AJOUTER UN PRODUIT DANS LA LISTS DES PRODUITS</h1>
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputNom3" class="col-sm-2 control-label">nom produit</label>
    <div class="col-sm-10">
      <input type="nom" class="form-control Monform" id="inputNom3" placeholder="Nom">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrix3" class="col-sm-2 control-label">Prix</label>
    <div class="col-sm-10">
      <input type="Prix" class="form-control Monform" id="inputPrix3" placeholder="Prix">
    </div>
  </div>
  <div class="form-group">
    <label for="inputQuantité3" class="col-sm-2 control-label">Quantité</label>
    <div class="col-sm-10">
      <input type="Quantité" class="form-control Monform"  id="inputQuantité3" placeholder="Quantité">
    </div>
  </div>
  <div class="form-group">
    <label for="inputMontant3" class="col-sm-2 control-label">Montant</label>
    <div class="col-sm-10">
      <input type="Montant" class="form-control Monform" id="inputMontant3" placeholder="Montant">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">ajout produit</button>
    </div>
  </div>
</form>
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
                    array('Nom'=> 'Parfun','Prix'=>2000,'Qté'=>50,'Montent'=>10000, ),
                    array('Nom'=> 'nivea','Prix'=>3000,'Qté'=>50,'Montent'=>150000),
                    array('Nom'=> 'portable','Prix'=>200000,'Qté'=>10,'Montent'=>2000000),
                    array('Nom'=> 'chemise','Prix'=>2000,'Qté'=>100,'Montent'=>2000000),
                    array('Nom'=> 'jeans','Prix'=>30000,'Qté'=>100,'Montent'=>3000000),
                    array('Nom'=> 'pantalon','Prix'=>15000,'Qté'=>100,'Montent'=>1500000),
                    array('Nom'=> 'pantalon','Prix'=>15000,'Qté'=>100,'Montent'=>1500000),
                    array('Nom'=> 'pantalon','Prix'=>15000,'Qté'=>100,'Montent'=>1500000),
                    array('Nom'=> 'pantalon','Prix'=>15000,'Qté'=>100,'Montent'=>1500000),
                    array('Nom'=> 'pantalon','Prix'=>15000,'Qté'=>100,'Montent'=>1500000),
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
       <style>
           .Monform{
               width=40%;
           }
           .titre{
               text-align:center;
           }
       </style>
</body>
</html>