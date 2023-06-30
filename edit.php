<?php 
require_once "helper/mysqlconnection.php";
require_once "helper/get_input.php";
require_once "helper/config.php";
require_once "class/person.php";
require_once "class/bmi.php";
require_once "class/rfm.php";


if(isset($_GET['id'])){
    $id = $_GET['id'];
   // $query->execute([$id]);
}
$mysqlconnection = new MySQLConnection($config);
$connection = $mysqlconnection->getConnection();

$preparedQuery = $connection->prepare("SELECT * FROM person WHERE id = ?");
$user = $preparedQuery->execute([$id]);
$preparedQuery->fetchAll();
var_dump($user);

$named = input_checker('name','');
$aged = input_checker('age','');
$gendered = input_checker('gender','');
$heighted = input_checker('height','');
$weighted = input_checker('weight','');
$waistSized = input_checker('waist','');

if(isset($_POST['submit'])){
    $attributes = [
    'name' => $named,
    'age' => $aged,
    'height' => $heighted,
    'waist' => $waistSized
    ];
}

$datas = [
    $named,
    $aged,
    $gendered,
    $heighted,
    $weighted,
    $waistSized,
    $id
];

$male = $user['gender'] == "male" ? "checked ":"";
$female = $user['gender'] == "female" ? "checked ":"";


//print_r($datas);

//$preparedQuery = $connection->prepare($editQuery);

//header('Location: index.php');
//exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <input type="hidden" name="id" value="<?= $user['id']?>">
        
        <label for="name">Name</label>
        <input type="text" name="Name" id="name" value= "<?= $user['name']?>">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age" value= "<?= $user['age']?>">
        <br>
        <p>select gender:</p>
        <label for="gender">Male</label>
        <input type="radio" name="gender" id="gender" value="male" checked= <?= $male?> >
        <br>
        <label for="gender">Female</label>
        <input type="radio" name="gender" id="gender" value="female" checked= <?= $female?> >
        <br>
        <label for="height">Height</label>
        <input type="number" name="height" id="height" value= "<?= $user['height']?>">
        <br>
        <label for="weight">Weight</label>
        <input type="number" name ="weight" id="weight" value= "<?= $user['weight']?>">
        <br>
        <label for="waist">Waist Size</label>
        <input type="number" name="waist" id="waist" value= "<? $user['waist']?>">
        <br>
        <button type="submit" value="submit">Submit</button>
    </form>
</body>
</html>