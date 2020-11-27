<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'rujrawee1.mysql.database.azure.com', 'rujawee11@rujrawee1', 'Neaybaby123', 'Test');
if(mysqli_connect_errno($conn)){
    echo "connect fail".mysqli_connect_error();
}
?>