<?php 



$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Delete Confirmation </h1>
    <p> Are you sure you want to delete this record? </p>
    <a href= "delete.php"?id=<?php echo $id;?>>Yes</a>
    <a href="index.php">No</a>
</body>
</html>