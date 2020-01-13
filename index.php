<?php 


$user = 'marasy';
$password='marasy';
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username&&$password){
		if($username==$user&&$password==$password_definit){
			$_SESSION['username']=$username;
			header('Location: admin.php');
		        }else{
			echo 'Mauvais identifiant.';
		}
    }
}
    ?>

<!DOCTYPE html>
<meta charset ="utf8">
<html lang="fr">
    <head> 
        <title>Page d'acceuil </title>
    </head>
 <link href="css/acceuil.css"  media="screen" rel="stylsheet" type="text/css"/>

<body>
   <img src="images/chaussures.jpg" title="chaussures"/>
    
            <form methode="POST" action="interface.php">
                <table>
                    <tr>
                     <td>    <label for="username"> Identifiant </label>  </td>
                     <td>    <input type="text" name="username" required="required" 
                    value=""/> </td>
                     </tr>

                     <tr>
                     <td>    <label for="password"> Mot de passe</label> </label>  </td>
                     <td>   <input type="password" name="password" required="required"/> </td>
                     </tr>


                      <tr row="2">
                        <td> </td>
                        <td> <input type="submit" name="Valider" valeur="Valider"> </td>

                     </tr>
              </table>

        </form>
        
 </body>

</html>


