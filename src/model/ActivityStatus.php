<?php
    class User {
        private $id
        private $description 
       
 
        function __construct(){
            // perguntar se terá algum construtor
        }
        
        
        public function getId(){
            return $this->$id
        }

        public function setId($id){
            $this->$id = $id
        }

        public function getDescription(){
            return $this->$description
        }

        public function setDescription($description){
            $this->$description = $description
        }
    }
?> 