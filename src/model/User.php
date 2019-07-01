<?php
    class User {
        private $id
        public $nickName
        public $password
        public $email
        public $access
        public $editions
        public $activities

        function __construct(){}
        }

        public function getId(){
            return $this->$id
        }

        public function set($id){
            $this->$id = $id
        }

        public function getNickName(){
            return $this->$nickName
        }

        public function setNickName($nickName){
            $this->$nickName = $nickName
        }

        public function getPassword(){
            return $this->$password
        }

        public function setNickName($password){
            $this->$password = $password
        }

        public function getAccess(){
            return $this->$access
        }

        public function setAccess($access){
            $this->$access = $access
        }

        public function getEdition(){
            return $this->$editions
        }

        public function setAccess($editions){
            $this->$editions = $editions
        }

        public function getActivities(){
            return $this->$activities
        }

        public function setAccess($activities){
            $this->$activities = $activities
        }
        
    }
?>
