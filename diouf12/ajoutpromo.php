<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
        <center>
        <h2> La liste des promos</h2>
        <br>
    
         <form action="ajoutpromo.php" method="POST">
         <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="inputcode" placeholder="code" name="code">
                </div>
                <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="inputnom" placeholder="nom" name="nom">
                    </div>
                    <div class="col-lg-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <input type="mois" class="form-control" id="inputmois" placeholder="mois" name="mois">
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="inputannée" placeholder="année" name="année">
                </div>
                <div class="col-lg-3"></div>  
            </div>
            <br>
                    <div class="col-lg-5"></div>
				</div>
            </div>
            <br>
            <div class="row">        
				  <div class="col-lg-5"></div>
                    <div class="col-lg-2">
					    <button type="submit" name="ajouter" class="btn btn-danger">ajouter</button>
                    </div>
                    <div class="col-lg-5"></div>
				</div>
            </div>
        <br>
        </form>
        <?php
            if(isset($_POST['ajouter'])){
            //declarer les valeur
                $code=$_POST['code'];
                $nom=$_POST['nom'];
                $mois=$_POST['mois'];
                $année=$_POST['année'];
                $prod=fopen("promo.txt", 'a+');
            //parcourir le tableau
                while(!feof($prod)){
                    $lines=fgets($prod);
                    $fichier=explode(',', $lines);
                    if($fichier[0]==$code){
                        echo $fichier[0];
                    }
                 else{
                     $ajout="\n".$code.",".$nom.",".$mois.",".$année.",";
                     fwrite($prod,$ajout);
                    }
                   fclose($prod); 
                }
            }
            $prod=fopen("promo.txt", 'r' );
      echo "<table class='tete' border='1px' width='95%' >";
      echo "<tr class='titre'>
      
          <th>code</th>
          <th>nom</th>
          <th>mois</th>
          <th>année</th>
      </tr>";
      while(!feof($prod)){
          $lines=fgets($prod);
          $fichier=explode(',', $lines);
             echo "<tr class='liste' >";				
                   echo "<td>" . $fichier[0] . "</td>";
                   echo "<td>" . $fichier[1] . "</td>";
                   echo "<td>" . $fichier[2] . "</td>";
                   echo "<td>" . $fichier[3] . "</td>";    
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
</body>
</html>