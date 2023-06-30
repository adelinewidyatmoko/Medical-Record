<?php 



if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['height']) && isset($_POST['weight']) && isset($_POST['waist'])){
    $names = input_checker($_POST["name"], '');
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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>form input</p>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="Name" id="name">
        <br>
        <label for="age"Age>Age</label>
        <input type="number" name="age" id="age">
        <br>
        <p>select gender:</p>
        <label for="genders"> </label>
        <!-- <select name="genders" id="gender">
            <option type ="radio" value="male">Male</option>
            <option value="female">Female</option>
        </select> -->
        <input type="radio" name="gender" id="gender" value="male">
        <label for="gendermale">Male</label>
        
        <br>
        <input type="radio" name="gender" id="gender" value="female">
        <label for="genderfemale">Female</label>
        
        <br>
        <label for="height">Height</label>
        <input type="number" name="height" id="height">
        <br>
        <label for="weight">Weight</label>
        <input type="number" name ="weight" id="weight">
        <br>
        <label for="waist">Waist Size</label>
        <input type="number" name="waist" id="waist">
        <br>
        <button value="submit">Count</button>


    </form>
    <p>User Detail:</p>
    <ul>
        <li>Name : <?php echo $names?></li>
        <li>Age : <?php echo $ages?></li>
        <li>Height : <?php echo $heights?></li>
        <li>weight : <?php echo $weights?></li>
        <li>waist : <?php echo $waists?></li>
        <li>BMI score : <?php echo $bmi?> with the status <?php echo $bmiCategory?> </li>
        <li>RFM score : <?php echo $rfm ?> with the satus <?php echo $rfmCategory?> </li>
        
    </ul>
</body>
</html>