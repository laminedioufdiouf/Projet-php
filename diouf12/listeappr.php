<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>liste apprenant</title>
</head>
<body>
    <center>
<h2 class="tete">Liste des apprenants de la SONATEL ACCADEMY</h2>
<br>
<br>
<?php

$prod=fopen("listeappr.txt", 'r' );
echo "<table class='tete' border=1 width='100%' >";
echo "<tr class='titre'>

    <th><strong>Code</strong></th>
    <th><strong>Nom</strong></th>
    <th><strong>Prenom</strong></th>
    <th><strong>Date naissance</strong></th>
    <th><strong>Num tel</strong></th>
    <th><strong>email</strong></th>
    <th><strong>promo</strong></th>
    <th><strong>statut</strong></th>
   

</tr>";
while(!feof($prod)){
    $lines=fgets($prod);
    $fichier=explode(',', $lines);
    //echo fread($prod, filesize('listeproduits.txt'));
                 
     echo "<tr class='dim'>";				

     echo "<td>" . $fichier[0] . "</td>";
     echo "<td>" . $fichier[1] . "</td>";
     echo "<td>" . $fichier[2] . "</td>";
     echo "<td>" . $fichier[3] . "</td>";
     echo "<td>" . $fichier[4] . "</td>";
     echo "<td>" . $fichier[5] . "</td>";
     echo "<td>" . $fichier[6] . "</td>";
       
     echo"<td>";
     echo "<a id=".$fichier[7]." href='modif.php?' class='btn btn-success'> modifier</a>";
    echo"</td>";
    
     
     
     
    echo "</tr>";
                        
}
fclose($prod);
echo "</table>";

?>

</center>
<style>
.tete{
    background-color:#CD853F;
    border: 1px solid blue;
    height:50px;
    line-height:50px;
}
body{
    background-color: 	#7FFF00;
}


.liste{
text-align:center;
font-size: 18px;
}
</style>
</body>
</html>