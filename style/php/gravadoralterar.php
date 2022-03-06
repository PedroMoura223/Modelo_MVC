<?php 
include_once("indexD.php");

$email = $_POST["Email"];
$senhaantiga = $_POST["Senhaantiga"];
$senhanova = $_POST["Senha"];


echo $email.$senhaantiga.$senhanova;

$inserir = "UPDATE pessoa SET senha='$senhanova' WHERE senha='$senhaantiga'";
$conectando = mysqli_query($conn,$inserir);


if(mysqli_insert_id($conn)){
	header("Location: alterarsenha.html");
}else{
	header("Location: alterarsenha.html");
 
}
 ?>