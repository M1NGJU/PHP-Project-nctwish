<?php
include 'db.php'; // DB 연결 파일

// 사용자 입력한 데이터 받기
$name = $_POST['username'];
$userid = $_POST['userid'];
$phone = $_POST['userphone'];
$pass = $_POST['passwd']; // 비밀번호 암호화

// 아이디 중복 체크
$check_sql = "SELECT * FROM login WHERE userid = ?";
$stmt = $conn->prepare($check_sql);
$stmt->bind_param("s", $userid);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('이미 존재하는 아이디입니다.'); history.back();</script>";
} else {
    // 회원정보 저장
    $sql = "INSERT INTO login (name, phone, userid, pass) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $phone, $userid, $pass);
    
    if ($stmt->execute()) {
        echo "<script>alert('회원가입 성공! 로그인 페이지로 이동합니다.'); location.href='login.html';</script>";
    } else {
        echo "<script>alert('회원가입 실패: " . $conn->error . "'); history.back();</script>";
    }
}

$conn->close();
?>
