<?php

    class aplicationObjet
    {
        private $id;
        private $name;
        private $firstLastName;
        private $secondLastName;
        private $curp;
        private $age;
        private $address;
        private $suburb;
        private $idLocality;
        private $phone;
        private $phone2;
        private $email;
        private $level;
        private $grade;
        private $score;
        private $idSchool;
        private $dadName;
        private $dadWorkplace;
        private $dadWorkplaceAddress;
        private $momName;
        private $momWorkplace;
        private $momWorkplaceAddress;
        private $tutorName;
        private $tutorWorkplace;
        private $tutorWorkplaceAddress;
        private $sign;
        private $signName;
        private $doccurp;
        private $proofAddress;
        private $docScore;
        private $status;


    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /** 
     * Set the value of Id
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
    }

      /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
    }

      /**
     * Get the value of First Last Name
     *
     * @return mixed
     */
    public function getFirstLastName()
    {
        return $this->firstLastName;
    }

    /**
     * Set the value of First Last Name
     *
     * @param mixed $firstLastName
     *
     * @return self
     */
    public function setFirstLastName($firstLastName)
    {
        $this->firstLastName = $firstLastName;
    }

      /**
     * Get the value of Second Last Name
     *
     * @return mixed
     */
    public function getSecondLastName()
    {
        return $this->secondLastName;
    }

    /**
     * Set the value of Second Last Name
     *
     * @param mixed $secondLastName
     *
     * @return self
     */
    public function setSecondLastName($secondLastName)
    {
        $this->secondLastName = $secondLastName;
    }

      /**
     * Get the value of Curp
     *
     * @return mixed
     */
    public function getCurp()
    {
        return $this->curp;
    }

    /**
     * Set the value of Curp
     *
     * @param mixed $curp
     *
     * @return self
     */
    public function setCurp($curp)
    {
        $this->curp = $curp;
    }

      /**
     * Get the value of Age
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of Age
     *
     * @param mixed $age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

      /**
     * Get the value of Address
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of Address
     *
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

      /**
     * Get the value of Suburb
     *
     * @return mixed
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * Set the value of Suburb
     *
     * @param mixed $suburb
     *
     * @return self
     */
    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;
    }

      /**
     * Get the value of Id Locality
     *
     * @return mixed
     */
    public function getIdLocality()
    {
        return $this->idLocality;
    }

    /**
     * Set the value of Id Locality
     *
     * @param mixed $idLocality
     *
     * @return self
     */
    public function setIdLocality($idLocality)
    {
        $this->idLocality = $idLocality;
    }

      /**
     * Get the value of Phone
     *
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of Phone
     *
     * @param mixed $phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

      /**
     * Get the value of Phone
     *
     * @return mixed
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set the value of Phone
     *
     * @param mixed $phone2
     *
     * @return self
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
    }

      /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

      /**
     * Get the value of Level
     *
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set the value of Level
     *
     * @param mixed $level
     *
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

      /**
     * Get the value of Grade
     *
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of Grade
     *
     * @param mixed $grade
     *
     * @return self
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

      /**
     * Get the value of Score
     *
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set the value of Score
     *
     * @param mixed $score
     *
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

      /**
     * Get the value of Id School
     *
     * @return mixed
     */
    public function getIdSchool()
    {
        return $this->idSchool;
    }

    /**
     * Set the value of Id School
     *
     * @param mixed $idSchool
     *
     * @return self
     */
    public function setIdSchool($idSchool)
    {
        $this->idSchool = $idSchool;
    }

      /**
     * Get the value of Dad Name
     *
     * @return mixed
     */
    public function getDadName()
    {
        return $this->dadName;
    }

    /**
     * Set the value of Dad Name
     *
     * @param mixed $dadName
     *
     * @return self
     */
    public function setDadName($dadName)
    {
        $this->dadName = $dadName;
    }

      /**
     * Get the value of Dad Workplace
     *
     * @return mixed
     */
    public function getDadWorkplace()
    {
        return $this->dadWorkplace;
    }

    /**
     * Set the value of Dad Workplace
     *
     * @param mixed $dadWorkplace
     *
     * @return self
     */
    public function setDadWorkplace($dadWorkplace)
    {
        $this->dadWorkplace = $dadWorkplace;
    }

      /**
     * Get the value of Dad Workplace Address
     *
     * @return mixed
     */
    public function getDadWorkplaceAddress()
    {
        return $this->dadWorkplaceAddress;
    }

    /**
     * Set the value of Dad Workplace Address
     *
     * @param mixed $dadWorkplaceAddress
     *
     * @return self
     */
    public function setDadWorkplaceAddress($dadWorkplaceAddress)
    {
        $this->dadWorkplaceAddress = $dadWorkplaceAddress;
    }

      /**
     * Get the value of Mom Name
     *
     * @return mixed
     */
    public function getMomName()
    {
        return $this->momName;
    }

    /**
     * Set the value of Mom Name
     *
     * @param mixed $momName
     *
     * @return self
     */
    public function setMomName($momName)
    {
        $this->momName = $momName;
    }

      /**
     * Get the value of Mom Workplace
     *
     * @return mixed
     */
    public function getMomWorkplace()
    {
        return $this->momWorkplace;
    }

    /**
     * Set the value of Mom Workplace
     *
     * @param mixed $momWorkplace
     *
     * @return self
     */
    public function setMomWorkplace($momWorkplace)
    {
        $this->momWorkplace = $momWorkplace;
    }

      /**
     * Get the value of Mom Workplace Address
     *
     * @return mixed
     */
    public function getMomWorkplaceAddress()
    {
        return $this->momWorkplaceAddress;
    }

    /**
     * Set the value of Mom Workplace Address
     *
     * @param mixed $momWorkplaceAddress
     *
     * @return self
     */
    public function setMomWorkplaceAddress($momWorkplaceAddress)
    {
        $this->momWorkplaceAddress = $momWorkplaceAddress;
    }

      /**
     * Get the value of Tutor Name
     *
     * @return mixed
     */
    public function getTutorName()
    {
        return $this->tutorName;
    }

    /**
     * Set the value of Tutor Name
     *
     * @param mixed $tutorName
     *
     * @return self
     */
    public function setTutorName($tutorName)
    {
        $this->tutorName = $tutorName;
    }

      /**
     * Get the value of Tutor Workplace
     *
     * @return mixed
     */
    public function getTutorWorkplace()
    {
        return $this->tutorWorkplace;
    }

    /**
     * Set the value of Tutor Workplace
     *
     * @param mixed $tutorWorkplace
     *
     * @return self
     */
    public function setTutorWorkplace($tutorWorkplace)
    {
        $this->tutorWorkplace = $tutorWorkplace;
    }

      /**
     * Get the value of Tutor Workplace Address
     *
     * @return mixed
     */
    public function getTutorWorkplaceAddress()
    {
        return $this->tutorWorkplaceAddress;
    }

    /**
     * Set the value of Tutor Workplace Address
     *
     * @param mixed $tutorWorkplaceAddress
     *
     * @return self
     */
    public function setTutorWorkplaceAddress($tutorWorkplaceAddress)
    {
        $this->tutorWorkplaceAddress = $tutorWorkplaceAddress;
    }

      /**
     * Get the value of Sign
     *
     * @return mixed
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set the value of Sign
     *
     * @param mixed $sign
     *
     * @return self
     */
    public function setSign($sign)
    {
        $this->sign = $sign;
    }

      /**
     * Get the value of Sign Name
     *
     * @return mixed
     */
    public function getSignName()
    {
        return $this->signName;
    }

    /**
     * Set the value of Sign Name
     *
     * @param mixed $signName
     *
     * @return self
     */
    public function setSignName($signName)
    {
        $this->signName = $signName;
    }

      /**
     * Get the value of Doccurp
     *
     * @return mixed
     */
    public function getDoccurp()
    {
        return $this->doccurp;
    }

    /**
     * Set the value of Doccurp
     *
     * @param mixed $doccurp
     *
     * @return self
     */
    public function setDoccurp($doccurp)
    {
        $this->doccurp = $doccurp;
    }

      /**
     * Get the value of Proof Address
     *
     * @return mixed
     */
    public function getProofAddress()
    {
        return $this->proofAddress;
    }

    /**
     * Set the value of Proof Address
     *
     * @param mixed $proofAddress
     *
     * @return self
     */
    public function setProofAddress($proofAddress)
    {
        $this->proofAddress = $proofAddress;
    }

      /**
     * Get the value of Doc Score
     *
     * @return mixed
     */
    public function getDocScore()
    {
        return $this->docScore;
    }

    /**
     * Set the value of Doc Score
     *
     * @param mixed $docScore
     *
     * @return self
     */
    public function setDocScore($docScore)
    {
        $this->docScore = $docScore;
    }

      /**
     * Get the value of Status
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of Status
     *
     * @param mixed $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

  }

?>
