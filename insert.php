<?php
require('connect.php');
    if(isset($_POST['submit'])){
        $num = $_POST['name'];
        $numa = $_POST['height'];
        $numb = $_POST['weight'];
        $numc = ($numa / ($numb**2));

        $sql = "INSERT INTO test (name, height, weight, bmi) value ('$num','$numa', '$numb', '$numc')";

        if(mysqli_query($conn, $sql)){
            echo "New data insert successfully";
            echo "<a href='index.php'>back to home page</a>";
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
        <div class="text-center">
        <a href="index.php" class="btn btn-secondary">backt</a>
    </form>
</body>

</html>
