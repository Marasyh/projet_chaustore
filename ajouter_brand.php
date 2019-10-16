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
             
             $ajouter="insert into brand(name) values('')";
                $result_add=mysqli_query($bdd,$ajouter);
   ?>
       <?php
                   $select='select * from brand;';
                   $id_tableau=mysqli_fetch_row($select);
 ?>
<table border="1">
        <thead>
        <tr>
           <th> Id </th>
            <th> nom </th>
            <th>photos </th>
            <th> </th>
          </tr>
</thead>


<tbody>
        <tr>
        <td> <?php echo $id_tableau['id'];?></td>
          <td><input type="text"/><?php $ajouter?> </td>
          <td> <input type="text"/></td>
          <td><a href ="ajouter_brand.php?id_student=<?php echo $result_column['id_student'];?>" title="ajouter"> <input type="submit" value="Ajouter"></a>  </td>
        
          </tr>
</tbody>
</table>
  

  <?php                
  if(!empty($ajouter[''])){
         echo "le produit a bien été ajouté";
                }
        else { echo "le produit n'a pas été ajouté"; }

; ?>
        </body>

</html>



          