<?php 

try{
    $conn = new PDO('mysql: host=localhost ; dbname=mvc' , 'root' , '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo $e->getMessage();
}

class Usuario{
        private $email;
        private $senha;
       
        
        public function getEmail(){
            return $this->email;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setEmail($e){
            $this->email = $e; 
        }
        public function setSenha($s){
            $this->senha = $s;     
       }
    }

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
}

try{

    $user = new Usuario();
    $user->setEmail($_POST['email']);
    $user->setSenha($_POST['senha']);
   
    $control = new UsuarioControle();

    $control->inserir($user);

    

    echo "<script>
					alert('Cadastrado com sucesso!');
					window.location.href='../view/index.php';
				</script>;";
              
        
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}


 ?>