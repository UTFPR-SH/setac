<?php
    class User {
        private $id
        private $title
        private $description 
        private $title
        private $keywords
        private $registrationType
        private $registrationLimit
        private $registrationStar
        private $registrationEnd
        private $startDate
        private $endDate
        private $workload
        private $place
        private $status
        private $type
        private $guests

        
        function __construct(){
            // perguntar se terá algum construtor
        }
        
        
        function operacao1(){
            
        }

        function operacao2(){
        
        }

        public function getId(){
            return $this->$id
        }

        public function setId($id){
            $this->$id = $id
        }

        public function getTitle(){
            return $this->$title
        }

        public function setTitle($title){
            $this->$title = $title
        }

        public function getDescription(){
            return $this->$description
        }

        public function setDescription($description){
            $this->$description = $description
        }

        public function getKeywords(){
            return $this->$keywords
        }

        public function setKeywords($keywords){
            $this->$keywords = $keywords
        }

        public function getRegistrationType(){
            return $this->$registrationType
        }

        public function setRegistrationType($registrationType){
            $this->$registrationType = $registrationType
        }

        public function getRegistrationLimit(){
            return $this->$registrationLimit
        }

        public function setRegistrationLimit($registrationLimit){
            $this->$registrationLimit = $registrationLimit
        }

        public function getRegistrationStar(){
            return $this->$registrationLimit
        }

        public function setRegistrationStar($registrationStar){
            $this->$registrationStar = $registrationStar
        }

        public function getRegistrationEnd(){
            return $this->$registrationEnd
        }

        public function setRegistrationEnd($registrationEnd){
            $this->$registrationEnd = $registrationEnd
        }

        public function getStartDate(){
            return $this->$startDate
        }

        public function setStartDate($startDate){
            $this->$startDate = $startDate
        }

        public function getEndDate(){
            return $this->$startDate
        }

        public function setEndDate($endDate){
            $this->$endDate = $endDate
        }

        public function getWorkload(){
            return $this->$workload
        }

        public function setWorkload($workload){
            $this->$workload = $workload
        }

        public function getPlace(){
            return $this->$place
        }

        public function setPlace($place){
            $this->$place = $place
        }

        public function getStatus(){
            return $this->$status
        }

        public function setStatus($status){
            $this->$status = $status
        }

        public function getType(){
            return $this->$type
        }

        public function setType($type){
            $this->$type = $type
        }

        public function getGuests(){
            return $this->$guests
        }

        public function setGuests($guests){
            $this->$guests = $guests
        }

    }
?>