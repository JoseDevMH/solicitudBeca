<?php

    class aplicationObjet
    {
        private $id;
        private $dateAplication;
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
        private $dadName;
        private $dadEmployment;
        private $dadWorkplace;
        private $momName;
        private $momEmployment;
        private $momWorkplace;
        private $tutorName;
        private $tutorEmployment;
        private $tutorWorkplace;
        private $whoIncome;
        private $income;
        private $email;
        private $phone;
        private $phone2;
        private $sign;
        private $signName;
        private $docCurp;
        private $docScore;
        private $docProofAddress;
        private $docIdentificationTutor;
        private $status;


      /*Metodos de Acceos las propiedades ###############################*/

        function getId() { 
            return $this->id; 
        } 

        function setId($id) {  
            $this->id = $id; 
        } 

        function getDateAplication() { 
                return $this->dateAplication; 
        } 
    
        function setDateAplication($dateAplication) {  
            $this->dateAplication = $dateAplication; 
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

        /*###########################################*/

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

        function getDadName() { 
            return $this->dadName; 
        } 

        function setDadName($dadName) {  
            $this->dadName = $dadName; 
        } 

        function getDadEmployment() { 
            return $this->dadEmployment; 
        } 

        function setDadEmployment($dadEmployment) {  
            $this->dadEmployment = $dadEmployment; 
        } 

        function getDadWorkplace() { 
            return $this->dadWorkplace; 
        } 

        function setDadWorkplace($dadWorkplace) {  
            $this->dadWorkplace = $dadWorkplace; 
        } 

        function getMomName() { 
            return $this->momName; 
        } 

        function setMomName($momName) {  
            $this->momName = $momName; 
        } 

        function getMomEmployment() { 
            return $this->momEmployment; 
        } 

        function setMomEmployment($momEmployment) {  
            $this->momEmployment = $momEmployment; 
        } 

        function getMomWorkplace() { 
            return $this->momWorkplace; 
        } 

        function setMomWorkplace($momWorkplace) {  
            $this->momWorkplace = $momWorkplace; 
	    } 

        function getTutorName() { 
            return $this->tutorName; 
        } 

        function setTutorName($tutorName) {  
            $this->tutorName = $tutorName;
	} 

        function getTutorEmployment() { 
            return $this->tutorEmployment; 
        } 

        function setTutorEmployment($tutorEmployment) {  
            $this->tutorEmployment = $tutorEmployment; 
        } 

        function getTutorWorkplace() { 
            return $this->tutorWorkplace; 
        } 

        function setTutorWorkplace($tutorWorkplace) {  
            $this->tutorWorkplace = $tutorWorkplace; 
        } 

        function getWhoIncome() { 
            return $this->whoIncome; 
        } 

        function setWhoIncome($whoIncome) {  
            $this->whoIncome = $whoIncome; 
        } 

        function getIncome() { 
            return $this->income; 
        } 

        function setIncome($income) {  
            $this->income = $income; 
        } 

        function getEmail() { 
            return $this->email; 
        } 

        function setEmail($email) {  
            $this->email = $email; 
        }        

        function getPhone() { 
            return $this->phone; 
        } 

        function setPhone($phone) {  
            $this->phone = $phone; 
        } 

        function getPhone2() { 
            return $this->phone2; 
        } 

        function setPhone2($phone2) {  
            $this->phone2 = $phone2; 
	    } 

        function getSign() { 
            return $this->sign; 
        } 

        function setSign($sign) {  
            $this->sign = $sign; 
        } 

        function getSignName() { 
            return $this->signName; 
        } 

        function setSignName($signName) {  
            $this->signName = $signName; 
        } 

        function getDocCurp() { 
            return $this->docCurp; 
        } 

        function setDocCurp($docCurp) {  
            $this->docCurp = $docCurp; 
        } 

        function getDocScore() { 
            return $this->docScore; 
        } 

        function setDocScore($docScore) {  
            $this->docScore = $docScore; 
        } 

        function getDocProofAddress() { 
            return $this->docProofAddress; 
        } 

        function setDocProofAddress($docProofAddress) {  
            $this->docProofAddress = $docProofAddress; 
        } 

        function getDocIdentificationTutor() { 
            return $this->docIdentificationTutor; 
        } 

        function setDocIdentificationTutor($docIdentificationTutor) {  
            $this->docIdentificationTutor = $docIdentificationTutor; 
        } 

        function getStatus() { 
            return $this->status; 
        } 

        function setStatus($status) {  
            $this->status = $status; 
        } 

	
    }