<?php include_once ('db.php'); ?>

<!DOCTYPE html>
<meta charset ="utf8">
<html>
    <head> 
        <title>Page color </title>
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


     <p class="brand"> product </p> 


        <?php 

            $request='select * from product;';
            $resultat =mysqli_query($bdd,$request);

        ?>


                <table border="1">
            <thead>
                    <tr> 
                        <th> Identifiant </th> 
                        <th> Nom </th> 
                        <th> category_id</th> 
                        <th> brand_id</th> 
                        <th> color_id</th> 
                        <th> image</th>   
                        <th> Prix</th>  
                        <th> Genre</th>                 
                    </tr>

            </thead>
                    <?php while($result = mysqli_fetch_array($resultat)) { ?>
            <tbody>
                <tr>
                    <td> <?php echo $result  ['id'] ; ?> </td> 
                    <td> <?php echo $result  ['name'] ; ?> </td>
                    <td> <?php echo $result  ['category_id'] ; ?> </td>
                    <td> <?php echo $result  ['brand_id'] ; ?> </td>
                    <td> <?php echo $result  ['color_id'] ; ?> </td>
                    <td> <?php echo $result  ['image'] ; ?> </td>
                    <td> <?php echo $result  ['price'] ; ?> </td>
                    <td> <?php echo $result  ['gender'] ; ?> </td>
                    <td> <input type="text" id="name" minlength="4" maxlength="8" size="10"> </td>
                                                                <!-- variable de while et non php echo --> 
                    <td> <a href ="supprimer_brand.php?id=<?php echo $result['id'];?>" title="supprimer"> <input type="submit" name="supprimer" value="supprimer"> </a> </td> 
                    <td> <a href="modifier_brand.php?id=<?php echo $result['id'];?>"title="modifier"> <input type="submit" name="modifier" value="Modifier"></td> 
                    <td> <input type="submit" name="ajouter" value="Ajouter"></td
                 </tr>

             </tbody>
                 
       
       <?php  } ?>
        
</table>
    
        
        </body>

</html>