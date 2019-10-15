<?php include_once ('db.php'); ?>

  <!DOCTYPE html>
<meta charset ="utf8">
<html>
    <head> 
        <title>Brand </title>
    </head>
<link rel="stylesheet" href="css/interface.css" type="text/css" media="screen"/>

<body>
        

<div id="bienvenu"> 
        <p> Bienvenue sur votre tableau de bord </p>
</div>


<div id="gauche">
        <p> Brand  <a href="brand.php"> <button>  Go to brand</button> </a> </p> 
        <p> Categories <a href="category.php"> <button>  Go to categories</button> </a> </p>
        <p> Color  <a href="color.php"> <button>  Go to color</button> </a></p>
        <p> Size  <a href="size.php"> <button>  Go to size</button> </a></p>
        <p> Stock <a href="stock.php"> <button>  Go to stock</button> </a> </p>
        <p> Products <a href="product.php"> <button>  Go to products</button> </a></p>
</div>

        <p class="brand"> Brand </p> 


<?php
if(!empty($_GET['id'])){
    $id= $_GET['id'];

    $count="SELECT COUNT(id) id FROM brand WHERE id=$id";
    $result_count = mysqli_query($bdd,$count);
    
    $result_column = mysqli_fetch_array($result_count);

                //on demande résultat de fetch 
    if($result_column['id'] ==2){
            
    $supprimer="delete from brand where id=1";
    $result_sup=mysqli_query($bdd,$supprimer);
        
     if($result_sup){
         echo "le produit a bien été éffacé";
                }
        else { echo "erreur de suppression"; }
        }
        else {
            echo "numéro n'existe pas";
        }
     
}

; ?>
    
        
        </body>

</html>



          