

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
    <form action="insert.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="Name" id="name">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
        <br>
        <p>select gender:</p>
        <label for="gender">Male</label>
        <input type="radio" name="gender" id="gender" value="male" checked="checked" >
        <br>
        <label for="gender">Female</label>
        <input type="radio" name="gender" id="gender" value="female">
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
        <button type="submit" value="submit">Count</button>
    </form>
</body>
</html>
