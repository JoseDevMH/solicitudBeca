<?php

    class aplicationObjet
    {
        private $id;
        private $name;
        private $firstLastName;
        private $secondLastName;
        private $curp;
        private $age;
        private $street;
        private $number;
        private $suburb;
        private $idLocality;
        private $level;
        private $grade;
        private $turn;
        private $score;
        private $idSchool;
        private $idSchoolLocal;
        //private $dadName;
        //private $dadEmployment;
        //private $dadWorkplace;
        //private $momName;
        //private $momEmployment;
        //private $momWorkplace;
        //private $tutorName;
        //private $tutorEmployment;
        //private $tutorWorkplace;
        //private $whoIncome;
        //private $income;
        //private $email;
        //private $phone;
        //private $phone2;
        //private $sign;
        //private $signName;
        //private $doccurp;
        //private $docScore;
        //private $proofAddress;
        //private $identificationTutor;
        //private $status;*/

      /*Metodos de Acceos las propiedades ###############################*/

        function getId() { 
            return $this->id; 
        } 

        function setId($id) {  
            $this->id = $id; 
        } 

        function getName() { 
            return $this->name; 
        } 

        function setName($name) {  
            $this->name = $name; 
        } 

        function getFirstLastName() { 
            return $this->firstLastName; 
        } 

        function setFirstLastName($firstLastName) {  
            $this->firstLastName = $firstLastName; 
        } 

        function getSecondLastName() { 
            return $this->secondLastName; 
        } 

        function setSecondLastName($secondLastName) {  
            $this->secondLastName = $secondLastName; 
        } 

        function getCurp() { 
            return $this->curp; 
        } 

        function setCurp($curp) {  
            $this->curp = $curp; 
        } 

        function getAge() { 
            return $this->age; 
        } 

        function setAge($age) {  
            $this->age = $age; 
        } 

        function getStreet() { 
            return $this->street; 
        } 

        function setStreet($street) {  
            $this->street = $street; 
        } 

        function getNumber() { 
            return $this->number; 
        } 

        function setNumber($number) {  
            $this->number = $number; 
        } 

        function getSuburb() { 
            return $this->suburb; 
        } 

        function setSuburb($suburb) {  
            $this->suburb = $suburb; 
        } 

        function getIdLocality() { 
            return $this->idLocality; 
        } 

        function setIdLocality($idLocality) {  
            $this->idLocality = $idLocality; 
        } 

        function getLevel() { 
            return $this->level; 
        } 

        function setLevel($level) {  
            $this->level = $level; 
        } 

        function getGrade() { 
            return $this->grade; 
        } 

        function setGrade($grade) {  
            $this->grade = $grade; 
        } 

        function getTurn() { 
            return $this->turn; 
        } 

        function setTurn($turn) {  
            $this->turn = $turn; 
        } 

        function getScore() { 
            return $this->score; 
        } 

        function setScore($score) {  
            $this->score = $score; 
        } 

        function getIdSchool() { 
            return $this->idSchool; 
        } 

        function setIdSchool($idSchool) {  
            $this->idSchool = $idSchool; 
        } 

        function getIdSchoolLocal() { 
            return $this->idSchoolLocal; 
        } 

        function setIdSchoolLocal($idSchoolLocal) {  
            $this->idSchoolLocal = $idSchoolLocal; 
        } 
    }