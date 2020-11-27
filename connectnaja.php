<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'mizuki01.mysql.database.azure.com', 'mizuki@mizuki01', 'Miura260344', 'mimi', 3306);
if(mysqli_connect_errno($conn)){
    echo "connect fail".mysqli_connect_error();
}
?>