<?php
session_start();
include 'db.php'; // DB 연결

$userid = $_POST['userid'];
$passwd = $_POST['passwd'];

// 아이디 확인
$sql = "SELECT * FROM login WHERE userid = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userid);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    
    // 비밀번호 비교 (그냥 문자열 비교)
    if ($passwd === $row['pass']) {
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['username'] = $row['name'];

        echo "<script>alert('로그인 성공!'); location.href='display.php';</script>";
        exit();
    } else {
        echo "<script>alert('비밀번호가 틀렸습니다.'); history.back();</script>";
    }
} else {
    echo "<script>alert('존재하지 않는 아이디입니다.'); history.back();</script>";
}

$conn->close();
?>
