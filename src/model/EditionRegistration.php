<?php
    class User {
        private $id
        private $edition
        private $registrationDate 
        private $checkIn

        function __construct(){
            // perguntar se terá algum construtor
        }
        
        
        function EditionRegistration($user,$edition){
            // perguntar sobre como esta função faz o registro da edição
        }

        function checkIn(){
            // perguntar como funciona a marcação de presença do usuário 
        }

        public function getId(){
            return $this->$id
        }

        public function setId($id){
            $this->$id = $id
        }

        public function getEdition(){
            return $this->$edition
        }

        public function setEdition($edition){
            $this->$edition = $edition
        }

        public function getActivity(){
            return $this->$activity;
        }

        public function set($activity){
            $this->$activity = $activity
        }

        public function getRegitrationDate(){
            return $this->$registrationDate
        }

        public function set($registrationDate){
            $this->$registrationDate = $registrationDate
        }

        public function getCheckIn(){
            return $this->$checkIn
        }

        public function setCheckIn($checkIn){
            $this->$checkIn = $checkIn
        }
    }
?>