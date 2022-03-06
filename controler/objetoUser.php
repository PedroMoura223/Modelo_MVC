<?php  
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

?>