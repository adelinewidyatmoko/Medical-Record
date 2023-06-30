<?php 

class Person{
    public string $name ="";
    public int $age = 0;
    public string $gender = "m";
    public float $height = 0;
    public float $weight = 0;
    public float $waistSize = 0;
    public float $bmiScore = 0;
    /*
    public string $bmiCategory = "";
    public float $rfmScore = 0;
    public string $rfmCategory = "";*/

    public function __construct($name,$age,$gender){
        $this->name;
        $this->age;
        $this->gender;
    
    }

    public function bodyFact($height,$weight,$waistSize){
       $this->height=$height;
       $this->weight=$weight;
       $this->waistSize=$waistSize;  //ini maksudnya "untuk meng-assign nilai properti $height,$weight,$waistSize"
        

    }

    public function setId(){
        $this->id = gettype($id) == "int"? $racide : "unknown";

    }
    public function getId(){
        return $this->id;
    }

    public function setName(){
        $this->name = gettype($name) == "string"? $name : "unknown";

    }
    public function getName(){
        return $this->name;
    }
    public function setAge(){
        $this->age = gettype($age) == "int"? $age : "unknown";

    }
    public function getAge(){
       return $this->age;

    }
    public function setGender(){
        $this->gender = gettype($gender) == "string"? $gender : "unknown";

    }
    public function getGender(){
        return $this->gender;

    }
    public function setHeight(){
        $this->height = gettype($height) == "float"? $height : "unknown";

    }
    public function getHeight(){
        return $this->height;

    }
    public function setWeight(){
        $this->weight = gettype($weight) == "float"? $weight : "unknown";

    }
    public function getWeight(){
       return $this->weight;
    }
    public function setWaistSize(){
        $this->waistSize = gettype($waistSize) == "float"? $waistSize : "unknown";

    }
    public function getWaistSize(){
        return $this->waistSize;

    }
    public function setBmiScore(){
        $this->bmiScore = gettype($bmiScore) == "float"? $bmiScore : "unknown";

    }
    public function getBmiScore(){
        return $this->bmiScore;

    }
    public function setBmiCategory(){
        $this->bmiCategory = gettype($bmiCategory) == "string"? $bmiCategory : "unknown";

    }
    public function setRfmScore(){
        $this->rfmScore = gettype($rfmScore) == "float"? $rfmScore : "unknown";

    }
    public function setRfmCategory(){
        $this->rfmCategory = gettype($rfmCategory) == "string"? $rfmCategory : "unknown";

    }
   

}



?>