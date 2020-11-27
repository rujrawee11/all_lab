<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070143_it63070143', 'MNLyvs28', 'it63070143_it63070143', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['ชื่อ'];
$height = $_POST['นำ้หนัก'];
$weight = $_POST['ส่วนสูง'];
$bmi = $_POST['bmi'];


$sql = "INSERT INTO guestbook ( name , height , weight, Total = (weight / (height**)) VALUES ('$name', '$height', '$amount', '$total')";


if (mysqli_query($conn, $sql)) {
    echo "<h2 style='text-align:center; color:black;'>New record created successfully</h2>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<center><a href = "index.php"><button type="button" class="btn btn-info">Continue</button></a></center>