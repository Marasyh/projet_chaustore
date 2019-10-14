<?php


    session_start();

$user = 'marasy';
$password_definit ='marasy';
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
    ;?>
