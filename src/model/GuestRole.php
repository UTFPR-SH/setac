<?php
    class User {
        private $id
        private $activity
        private $registrationDate 
        private $checkIn

        function __construct(){
            // perguntar se terá algum construtor
        }
        
        
        function registration($user,$edition){
            // perguntar sobre como esta função faz o registro do usuário na atividade
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