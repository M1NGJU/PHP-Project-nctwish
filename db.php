<?php
$servername = "localhost";
$username = "test";
$password = "1111";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}
?>
