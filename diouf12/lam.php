<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
<?Php
    $recherche=$_POST["promo"];
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
          if($recherche== $fichier[6]){      
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

} 
fclose($prod);
echo "</table>";
$recherche=$_POST["promo"];
    $prod=fopen("listeappr.txt", 'r' );
echo "<table class='tete' border=1 width='100%' >";

while(!feof($prod)){
    $lines=fgets($prod);
    $fichier=explode(',', $lines);
    //echo fread($prod, filesize('listeproduits.txt'));
          if($recherche== $fichier[1]){      
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
}
fclose($prod);
echo "</table>";  
?>
</body>
</html>