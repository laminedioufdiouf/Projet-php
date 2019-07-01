<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>modifier</title>
</head>
<body>
<center>
    <h2>Modification</h2>
   
<div class="container">
            <form action="" method="POST">
	        <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="text" class="form-control" id="inputCoce" placeholder="Code" name="code">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="text" class="form-control" id="inputNom" placeholder="Nom" name="com">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="text" class="form-control" id="inputprenom" placeholder="Prenom" name="prenom">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="text" class="form-control" id="inputNaissance" placeholder="naissance" name="naissance">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="numéro" class="form-control" id="inputTéléphone" placeholder="Téléphone" name="téléphone">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="Email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="text" class="form-control" id="inputStatut" placeholder="Statut" name="statut">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
				<div class="row">        
				  <div class="col-lg-5"></div>
                    <div class="col-lg-2">
					    <button type="submit" name="modifier" class="btn btn-warning">modifier</button>
                    </div>
                    <div class="col-lg-5"></div>
				</div>
		
		    </div>
        </form>
        <br>
        <?php
            echo "<table class='tete' border=1 width='90%' >";
            echo "<tr class='titre'>
            
                <th>code</th>
                <th>nom</th>
                <th>prenom</th>
                <th>naissance</th>
                <th>télépphone</th>
                <th>email</th>
                <th>statut</th>
                <th>promo</th>
                
            </tr>";
            if(isset($_POST['modifier'])){
            $code=$_POST['code'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $naissance=$_POST['naissance'];
            $téléphone=$_POST['téléphone'];
            $email=$_POST['email'];
            $statut=$_POST['statut'];
            $promo=$_POST['promo'];
            
            $prod=fopen("listeappr.txt", 'r' );
                while(!feof($prod)){
                $lines=fgets($prod);
                $fichier=explode(',', $lines);

                    if($code==$fichier[0]){
                        $fichier[1]=$nom;
                        $fichier[2]=$prenom;
                        $fichier[3]=$naissance;
                        $fichier[4]=$téléphone;
                        $fichier[5]=$email;
                        $fichier[6]=$statut;
                        $fichier[7]=$promo;
                        
                        
                        $effacer=$fichier[0].",".$fichier[1].",".$fichier[2].",".$fichier[3].",".$fichier[4].",".$fichier[5].",".$fichier[6].",".$fichier[7];
                    
                    }else {
                        $effacer=$lines;
                    }
                $newlines=$newlines.$effacer;
                }

                fclose($prod);
                $prod=fopen("listeappr.txt", 'w+' );
                    
                        fwrite($prod,$newlines);
                
                fclose($prod);
                }
    
    $prod=fopen("listeappr.txt", 'r' );
    
    while(!feof($prod)){
        $lines=fgets($prod);
        $fichier=explode(',', $lines);
                     
          echo "<tr class='rouge'>";				
            echo "<td>" . $fichier[0] . "</td>";
            echo "<td>" . $fichier[1] . "</td>";
            echo "<td>" . $fichier[2] . "</td>";
            echo "<td>" . $fichier[3] . "</td>";
            echo "<td>" . $fichier[4] . "</td>";
            echo "<td>" . $fichier[5] . "</td>";
            echo "<td>" . $fichier[6] . "</td>";
            echo "<td>" . $fichier[7] . "</td>";
          echo "</tr>";
    }



    fclose($prod);
 

echo "</table>";
?>
    <style>
.tete{
    background-color:#7777;
    border: 1px solid blue;
    height:40px;
    line-height:40px;
    width:80%;
}
body{
    background-color:#2222
}

.liste{
text-align:center;
font-size: 18px;
}

.titre{
    text-align: center;
    background-color: grey;
    font-size: 20px;
}
</style>


</center>
</body>
</html>