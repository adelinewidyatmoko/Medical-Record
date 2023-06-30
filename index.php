<?php 
require_once 'helper/config.php';
require_once 'helper/mysqlconnection.php';

$mysqlconnection = new MySQLConnection($config);
$connection = $mysqlconnection->getConnection();
//$query = $connection->prepare("SELECT id, nama, age, gender, height,weight,waist_size,bmi_score,bmi_category,rfm_score,rfm_category);
//$query->execute(); 
/*
print_r($person);*/

$selectQuery = "SELECT * FROM medical_record.person;";
$query = $connection->query($selectQuery);
$person = $query->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <a href="create.php">Insert Data</a>
    <table border="l">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>age</th>
            <th>gender</th>
            <th>height</th>
            <th>weight</th>
            <th>waist size</th>
            <th>BMI score</th>
            <th>BMI category</th>
            <th>RFM score</th>
            <th>RFM category</th>
            <th>Action</th>
        </tr>
        <?php foreach($person as $persons): ?>
        <tr>
            <td><?= $persons['id'] ?></td>
            <td><?= $persons['nama']?></td>
            <td><?= $persons['age']?></td>
            <td><?= $persons['gender']?></td>
            <td><?=$persons['height']?></td>
            <td><?=$persons['weight']?></td>
            <td><?=$persons['waist_size']?></td>
            <td><?=$persons['bmi_score']?></td>
            <td><?=$persons['bmi_category']?></td>
            <td><?=$persons['rfm_score']?></td>
            <td><?=$persons['rfm_category']?></td>
            <td><?='<a href="edit.php?id='.$persons['id'].'">Edit</a> | <a href="confirm.php?id='.$persons['id'].'">Delete</a>'?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>