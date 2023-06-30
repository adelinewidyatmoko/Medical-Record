<?php 
require_once "helper/mysqlconnection.php";
require_once "helper/config.php";
require_once "class/person.php";
require_once "class/bmi.php";
require_once "class/rfm.php";
require_once "helper/get_input.php";

if(isset($_POST['Name']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['height']) && isset($_POST['weight']) && isset($_POST['waist'])){
    $names = input_checker($_POST["Name"], '');
    $ages = input_checker($_POST["age"], '');
    $genders = input_checker($_POST["gender"],'');
    $heights = input_checker($_POST["height"], '');
    $weights = input_checker($_POST["weight"], '');
    $waists = input_checker($_POST["waist"], '');
}else{
    $names = "";
    $ages = 0;
    $genders = 0;
    $heights = 0;
    $weights = 0;
    $waists = 0;
}


$objPerson = new Person($names, $ages, $genders);

$objBMI = new bodyMassIndex();
$bmi = round($objBMI->calculate($heights, $weights), 2);
$bmiCategory = $objBMI->determineCategory($genders); 

$objRFM = new relativeFatMass();
$rfm = round($objRFM->calculate($heights, $weights, $genders), 2);
$rfmCategory = $objRFM->determineCategory($genders);


$userInput = [$names,$ages,$genders,$heights,$weights,$waists,$bmi, $bmiCategory,$rfm,$rfmCategory];

$connection = new MYSQLConnection($config);
$preparedQuery = $connection->prepare("
INSERT INTO person(nama, age, gender, height, weight, waist_size,bmi_score,bmi_category,rfm_score,rfm_category) VALUES (?,?,?,?,?,?,?,?,?,?) ");
$preparedQuery->execute($userInput);

header("Location: index.php");
exit();


?>






?>
