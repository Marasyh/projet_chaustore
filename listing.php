<?php require_once ('db.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
     </head>

<body>

<?php 



        $reponse = $bdd->query('SELECT * FROM simplon_chaustore');  
        while ($donnees= $reponse->fetch()){


        echo $donnees['brand'];
        echo $donnees['color'];
        echo $donnees['size'];
        echo $donnees['stocks'];
        echo $donnees['category'];
        echo $donnees['product'];
        }

        $reponse->closeCursor();
?>


</body>
</html>