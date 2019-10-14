<?php require_once ('db.php'); ?>

<!Doctype html>
<html lang="fr">
    <head> 
        <title> Interface admin </title>

        <link rel="stylesheet" href="css/interface.css" type="text/css" media="screen"/>
    </head>
    <body>


        <div id="bienvenu"> 
            <p> Bienvenue sur votre tableau de bord </p>

        </div>
<?php
        $request='select * from simplon_chaustore;';
        $result= mysqli_query($bdd, $request);

?>


<div id="gauche">
        <p> Brand  <a href="brand.php"> <button>  Go to brand</button> </a> </p> 
        <p> Categories <a href="category.php"> <button>  Go to categories</button> </a> </p>
        <p> Color  <a href="color.php"> <button>  Go to color</button> </a></p>
        <p> Size  <a href="size.php"> <button>  Go to size</button> </a></p>
        <p> Stock <a href="stock.php"> <button>  Go to stock</button> </a> </p>
        <p> Products <a href="product.php"> <button>  Go to products</button> </a></p>
</div>
        


</body>

</html>