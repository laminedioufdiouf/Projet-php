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
<h2 class="tete">Liste des promos de la SONATEL ACCADEMY</h2>
<br>
<br>
<?php

$prod=fopen("promo.txt", 'r' );
echo "<table class='tete' border=1 width='100%' >";
echo "<tr class='titre'>

    <th><strong>Code</strong></th>
    <th><strong>Promo</strong></th>
    <th><strong>Mois</strong></th>
    <th><strong>Année</strong></th>
    <th><strong>option</strong></th>

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
     echo"<td>" ;
           echo "<a id=".$fichier[4]." href='modifpromo.php?' class='btn btn-danger'> modifier</a>";
     echo"</td>" ;
     
    echo "</tr>";      
                        
}
fclose($prod);
echo "</table>";

?>

</center>
    <style>
.tete{
    background-color:#7777;
    border: 1px solid blue;
    height:50px;
    line-height:50px;
    width:100%;
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

</body>
</html>