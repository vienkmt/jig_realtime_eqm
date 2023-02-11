<?php
//DB info
$servername = "localhost";
$username = "root";
$password = "Auth@8495678";
$dbname = "iot_eqm";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id=$_GET['id'];
$value=$_GET['value'];

//Insert vào bảng Logs.  //Và cập nhật vào bảng Machine
$sql2 = sprintf("UPDATE `Logs` SET Value=%u,LastUpdate=current_timestamp() WHERE Id=%u; ",$value,$id);
if ($conn->query($sql2) === TRUE) {
    echo "Update ok ";
} else {
    echo "Lỗi: " . $sql2 . "<br>" . $conn->error;
}
$conn->close();

?>