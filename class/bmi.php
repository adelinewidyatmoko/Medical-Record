<?php 
require_once "class/person.php";
class bodyMassIndex{
    public int $score = 0;
    public string $category ="";

    public function calculate($height,$weight){

            /*if ($height != 0) {
                return floatval($weight) / floatval($height);
            } else {
                
                return "Error: Division by zero.";
            }*/

        $heightInMeter = var_dump(floatval($height)) / 100;
        var_dump($heightInMeter);
        return $this->score = floatval($weight) / ($heightInMeter * $heightInMeter);
    
}

    public function determineCategory( $score): string {
        if($score < 16.0){
            return $this->category = 'underweight (severe thinness)';
        } elseif ($score >= 16 && $score <= 19) {
            return $this->category ='underweight (moderate thinness)';
        } elseif($score >= 17 && $score <= 18.4){
            return $this->category = 'underweight (mild thinness)';
        } elseif($score >= 18.5 && $score <= 24.9){
            return $this->category = 'normal range';
        } elseif($score >= 25.0 && $score <= 29.9){
            return $this->category = 'overweight (obese)';
        } elseif($score >= 30.0 && $score <= 34.9){
            return $this->category = 'obese (class II)';
        } elseif($score >= 35.0 && $score <= 39.9){
            return $this->category = 'obese (class III)';
        } elseif($score >= 40.0){
            return $this->category = 'REALLY OBESE';
        } else {
            return $this->category = 'either u are really underweight or really overweight';
        }
    }
}

class MassIndex extends bodyMassIndex{
    public int $score = 0;
    public string $category ="";

    public function getScore(){
        return $this->score;

    }
    public function setScore($score){
        $this->score = gettype($score) == "string"? $race : "unknown";

    }

    public function getCategory(){
        return $this->category;

    }

    public function setCategory($category){
        $this->category = gettype($category) == "string"? $category : "unknown";
    }
}

?>