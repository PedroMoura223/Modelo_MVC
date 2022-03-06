<?php  
  class UsuarioAlter{
        private $email;
        private $senha;
        private $id;
       
        
        public function getEmail(){
            return $this->email;
        }
        public function getSenha(){
            return $this->senha;
        }
         public function getId(){
            return $this->id;
        }
        public function setEmail($e){
            $this->email = $e; 
        }
        public function setSenha($s){
            $this->senha = $s;     
       }
        public function setId($i){
            $this->id = $i;     
       }
    }

?>