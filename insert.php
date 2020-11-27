<?php
require('connect.php');
    if(isset($_POST['submit'])){
        $num = $_POST['name'];
        $numa = $_POST['height'];
        $numb = $_POST['weight'];
        $numc = ($numa / ($numb**2));

        $sql = "INSERT INTO test (name, height, weight, bmi) value ('$num','$numa', '$numb', '$numc')";

        <div class="mt-4">
            <button type="submit" class="btn btn-dark">Submit</button>
            <a role="button" class="btn btn-dark" href="index.php">Back</a>
        </div>
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <h1>name</h1>
        <input type="text" name="name">
        <h1>height</h1>
        <input type="text" name="height">
        <h1>weight</h1>
        <input type="text" name="weight">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>
