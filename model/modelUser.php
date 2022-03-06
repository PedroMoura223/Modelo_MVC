<?php 
include("../connection/connection.php");
include("../controler/objetoUser.php");
include("../connection/connection.php");
include("../controler/objetoAlter.php");


class UsuarioControle{

        function inserir($user){
            try{
                
                $email = $user->getEmail();
                $senha = $user->getSenha();                

            include("../connection/connection.php");
			$insert = "INSERT INTO user(email,senha) VALUES('$email','$senha') ";
			$stmt = $conn->prepare($insert);
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			$stmt->execute();


            }catch(PDOException $e){
                echo "Erro do banco: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }

        function alter($user){
            try{
                
                $email = $user->getEmail();
                $senha = $user->getSenha();  
                $id = $user->getId();              

            include("../connection/connection.php");
			$insert = "UPDATE user SET email='$email', senha='$senha' WHERE id='$id'";
			$stmt = $conn->prepare($insert);
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			$stmt->execute();


            }catch(PDOException $e){
                echo "Erro do banco: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
}



 ?>