<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>ajouter apprenant</title>
</head>
<body>
    <center>
    <h2>Appel à la Candidature</h2>
   
<div class="container">
            <form action="ajout.php" method="POST">
	        <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="text" class="form-control" id="inputcoce" placeholder="code" name="code">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="text" class="form-control" id="inputNom" placeholder="nom" name="nom">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="text" class="form-control" id="inputprenom" placeholder="prenom" name="prenom">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="text" class="form-control" id="inputnaissance" placeholder="naissance" name="naissance">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="numéro" class="form-control" id="inputtéléphone" placeholder="téléphone" name="téléphone">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="email" class="form-control" id="inputemail" placeholder="email" name="email">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                <input type="text" class="form-control" id="inputstatut" placeholder="statut" name="statut">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
				<div class="row">        
				  <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                    
                        <select name="promo" id="lamine">
                            <option value=""></option>
                            <?php
                            $prod=fopen("promo.txt", 'r' );
                                while(!feof($prod)){
                                    $lines=fgets($prod);
                                    $col=explode(',', $lines);
                                        //echo fread($prod, filesize('listeproduits.txt'));
                                                            
                                    echo "<option value=".$col[1]." >".$col[1]."</option>";                           
                                        }
                                        fclose($prod);
                                    ?>
                        </select>
                    </div>
                    <div class="col-lg-3"></div>
				</div>
            <br>
				<div class="row">        
				  <div class="col-lg-5"></div>
                    <div class="col-lg-2">
					    <button type="submit" name="ajout" class="btn btn-danger">ajout</button>
                    </div>
                    <div class="col-lg-5"></div>
				</div>
		
		    </div>
        </form>
        <br>
        <?php
if(isset($_POST['ajout'])){ 
    $code=$_POST['code'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $naissance=$_POST['naissance'];
    $téléphone=$_POST['téléphone'];
    $email=$_POST['email'];
    $statut=$_POST['statut'];
    $promo=$_POST['promo'];
    $prod=fopen("listeappr.txt", 'a+' );
    while(!feof($prod)){
        $lines=fgets($prod);
    $fichier=explode(',', $lines);
    if($fichier[0]== $Code){
        echo $fichier[0];
       
    }else{
   
    $ajout="\n".$code.",".$nom.",".$prenom.",".$naissance.",".$téléphone.",".$email.",".$statut.",".$promo.",";
    fwrite($prod,$ajout);
  
    }
    fclose($prod);
    }
    
      }
  
      
      $prod=fopen("listeappr.txt", 'r' );
      echo "<table class='tete' border='1px' width='95%' >";
      echo "<tr class='titre'>
      
          <th>code</th>
          <th>nom</th>
          <th>prenom</th>
          <th>naissance</th>
          <th>téléphone</th>
          <th>email</th>
          <th>Statut</th>
          <th>promo</th>
      
      
      </tr>";
      
      while(!feof($prod)){
          $lines=fgets($prod);
          $fichier=explode(',', $lines);
          
             echo "<tr class='liste' >";				
     
                   echo "<td>" . $fichier[0] . "</td>";
                   echo "<td>" . $fichier[1] . "</td>";
                   echo "<td>" . $fichier[2] . "</td>";
                   echo "<td>" . $fichier[3] . "</td>";
                   echo "<td>" . $fichier[4] . "</td>";
                   echo "<td>" . $fichier[5] . "</td>";
                   echo "<td>" . $fichier[6] . "</td>";
                   echo "<td>" . $fichier[7] . "</td>";
                       
                   echo "</td>";
                   
            echo "</tr>";
         }
     
      fclose($prod);
   
  
  echo "</table>";
  ?>
  
</div>
</center>
<style>
.tete{
    background-color:#7777;
    border: 1px solid blue;
    height:50px;
    line-height:50px;
}
body{
    background-color:#2222;
}


.liste{
text-align:center;
font-size: 20px;
background-color: white;

}
</style>
            </div>
    </center>
</body>
</html>