<?php include_once ('db.php'); ?>

  <!DOCTYPE html>
<meta charset ="utf8">
<html>
    <head> 
        <title>Category </title>
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
            $name=$_POST['name'];  


            $request='select * from category;';
            $resultat =mysqli_query($bdd,$request);

            $ajouter="INSERT INTO category (name) VALUES('$name')";
             $result_add=mysqli_query($bdd,$ajouter);

        ?>

            <form method="post" action="ajouter_category.php">
                <table border="1">
            <thead>
                    <tr> 
                        <th><label for="identifiant"> Identifiant </label> </th> 
                        <th><label for="name"> Nom </label> </th> 
                       <th>  </th>                                        
                    </tr>

            </thead>
                    
            <tbody>
                <tr>
                    <td> <input type="text" id="identifiant" name="identifiant" value="<?php if(!empty($_POST['id'])) echo $_POST['id'];?>"/> </td>
                
                    <td> <input type="text" id="name" name="name" value="<?php if(!empty($_POST['name'])) echo $_POST['name'];?>"/> </td>
                
            
                    <td> <a href="ajouter_brand.php"> <input type="submit" name="ajouter" value="Ajouter"></a> </td>
                </tr>

                <?php while($result = mysqli_fetch_array($resultat)) { ?>
                <tr>
                    <td> <?php echo $result  ['id'] ; ?> </td> 
                    <td> <?php echo $result  ['name'] ; ?> </td>
                   
                                                                <!-- variable de while et non php echo --> 
                    <td> <a href ="supprimer_brand.php?id=<?php echo $result['id'];?>" title="supprimer"> <input type="submit" name="supprimer" value="supprimer"> </a> </td> 
                    <td> <a href ="modifier_brand.php?id=<?php echo $result['id'];?>" title="modifier"> <input type="submit" name="modifier" value="modifier"> </a></td> 
                    
                 </tr>

             </tbody>
                 
            </form>
       
       <?php  } ?>
        
</table>
    
        
        </body>

</html>
