<?php 
include("../model/modelUser.php");

try{

    $user = new UsuarioAlter();
    $user->setEmail($_POST['email']);
    $user->setSenha($_POST['senha']);
    $user->setId($_POST['id']);
    $e = $_POST['id'];
    
   
    $control = new UsuarioControle();

    $control->alter($user);



    echo "<script>
                    alert('Alterado com sucesso!');
                    window.location.href='../view/alter.php';
                </script>;";
              
        
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}



 ?>