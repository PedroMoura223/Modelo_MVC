<?php 
include("../model/modelUser.php");
session_start();

try{

    $user = new UsuarioAlter();
    $user->setEmail($_POST['email']);
    $user->setSenha($_POST['senha']);
    
    
   
    $control = new UsuarioControle();

    $control->inserir($user);

    $_SESSION['email'] = $_POST['email'];
			$_SESSION['senha'] = $_POST['senha'];


    echo "<script>
					alert('Cadastrado com sucesso!');
					window.location.href='../view/index.php';
				</script>;";
              
        
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}



 ?>