<?php 

class MySQLConnection{
    private ?PDO $connection = null;

    public function __construct($config)
    {
        $host = $config['host'];
        $dbname = $config['dbname'];
        $user = $config['user'];
        $pass = $config['pass'];

        try{
            $this->connection = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

        } catch(PDOException $e){
           echo "Eror! : ".$e->getMessage() . "<br>";
        }
    }

         public function getConnection() : ?PDO{
            return $this->connection;
        }
         public function getPerson($id) {
            $stmt = $this->connection->prepare("SELECT * FROM person WHERE id = ?;");
            $stmt->execute([$id]);
            return $stmt->fetch();
        }
        public function updatePerson($name,$age, $gender, $height, $weight, $waistSize, $bmiScore, $bmiCategory, $rfmScore, $rfmCategory, $id){
            $userInput = [$name,$age, $gender, $height, $weight, $waistSize, $bmiScore, $bmiCategory, $rfmScore, $rfmCategory, $id];
            $stmt = $this->connection->prepare("UPDATE person SET nama = ?, age= ?, gender= ?, height= ?, weight= ?, waist_size= ?, bmi_score= ?, bmi_category= ?, rfm_score= ?, rfm_category= ? WHERE id=?;");
            $stmt->execute($userInput);
        }
    }
    
    
    


?>