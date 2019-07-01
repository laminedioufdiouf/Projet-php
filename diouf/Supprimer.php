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
    <title>Suprimer.php</title>
</head>
<body>
<div class="container">
    <h1 class="titre">Supprimer  un produit dans le tableaux de produits </h1>
    <div class="suprimer">

        <form class="form-horizontal" method="POST">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <label>Nom du produit</label>
                    <input type="text" class="form-control" id="inputNom" placeholder="Taper le nom du produit" name="Nom">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-default">Supprimé prodduit </button>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>  
        </form>
    </div>

    <?php
    echo "<table border=\"1\" width=\"100%\" background-color=\"grey\" >";
    //En-tete du tableau
    echo "<thead> 
            <tr>
                <th> Nom du produit </th>
                <th> Prix </th>
                <th> Quantité </th>
                <th> Montant  </th>
            </tr>

        </thead>";
            
        $produit = array(
            array('Nom du produit'=>'parfum','prix'=>2000, 'Quantité'=>100,'Montant'=>20000),
            array('Nom du produit'=>'Savon','prix'=>1000, 'Quantité'=>60,'Montant'=>60000),
            array('Nom du produit'=>'Ordinateurs','prix'=>400000, 'Quantité'=>20,'Montant'=>8000000),
            array('Nom du produit'=>'Nivea','prix'=>2000, 'Quantité'=>100,'Montant'=>20000),
            array('Nom du produit'=>'Jean','prix'=>30000, 'Quantité'=>150,'Montant'=>450000),
            array('Nom du produit'=>'Chemise','prix'=>15000, 'Quantité'=>20,'Montant'=>300000),
            array('Nom du produit'=>'Pantalon','prix'=>14500, 'Quantité'=>100,'Montant'=>1450000),
            array('Nom du produit'=>'Chaussures','prix'=>25000, 'Quantité'=>1000,'Montant'=>25000000),
            array('Nom du produit'=>'Lunettes','prix'=>5000, 'Quantité'=>2000,'Montant'=>1000000),
            array('Nom du produit'=>'Chemise','prix'=>15000, 'Quantité'=>10,'Montant'=>300000),
            array('Nom du produit'=>'Pantalon','prix'=>14500, 'Quantité'=>9,'Montant'=>1450000),
            array('Nom du produit'=>'Chaussures','prix'=>25000, 'Quantité'=>1000,'Montant'=>25000000),
            array('Nom du produit'=>'Lunettes','prix'=>5000, 'Quantité'=>7,'Montant'=>1000000),
        );
        //suppresion de produit
        $nomp=$_POST['Nom'];
        
        for($i=0; $i<count($produit);$i++){
            
            if($nomp==$produit[$i]["Nom du produit"]){
                unset($produit[$i]);
            }
        }   
        //afficher les valeurs
        foreach ($produit as $cle=>$tab){
            foreach($tab as $key=>$valeur){
                echo "<td><strong> $valeur </strong></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
        </div>
        <style>  
        .titre {
            text-align:center;
        }
        </style>
</div>
</body>
</html>