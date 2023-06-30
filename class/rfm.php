<?php 
class relativeFatMass{
    public int $score = 0;
    public string $category ="";

    public function calculate($height,$waistSize,$gender){
        if($gender=='male'){
            return $this->score = 64-20*($height / $waistSize);
        }elseif($gender=='female'){
            return $this->score = 76-20*($height / $waistSize);
        }else{
            return 'invalid gender';
        }
    }

    public function determineCategory($gender){
        
        if($gender=='male'){
            if($this->score >= 2 && $this->score <= 5){
                return $this->category = 'Essential fat';
            }elseif($this->score >= 6 && $this->score <= 13){
                return $this->category = ' Athletes';
            }elseif($this->score >= 14 && $this->score <= 17){
                return $this->category = 'Fitness';
            }elseif ($this->score >= 18 && $this->score <= 24) {
                return $this->category = 'Average';
            }elseif($this->score >= 25){
                return $this->category = 'obese';
            }else{
                return $this->category = 'unknown'; 
            }
        }

        else{
            if($this->score >= 10 && $this->score < 13){
                return $this->category = 'Essential fat';
            }elseif($this->score >= 14 && $this->score <= 20){
                return $this->category = 'Athletes';
            }elseif($this->score >= 21 && $this->score <= 24){
                return $this->category = 'Fitness';
            }elseif($this->score >= 25 && $this->score <= 31){
                return $this->category = 'Average';
            }elseif($this->score >= 32){
                return $this->category = 'obese';
            }else{
                return $this->category = 'unknown'; 
            }
        }
       
    }



}

class MasIndex extends relativeFatMass{
    public int $score = 0;
    public string $category ="";

    public function getScore(){
        return $this->score;

    }
    public function setScore($score){
        $this->score = gettype($score) == "int"? $score : "unknown";

    }

    public function getCategory(){
        return $this->category;

    }

    public function setCategory($category){
        $this->category = gettype($category) == "string"? $category : "unknown";
    }

}

?>