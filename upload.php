<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

if (isset($_POST["submit"])) {
    $targetDir = "uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFile = $targetDir . $fileName;

    // 파일이 업로드된 후 확인
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "✅ 파일이 업로드되었습니다: " . $targetFile . "<br>";

        // DB에 저장할 준비
        $stmt = $conn->prepare("INSERT INTO member_images (image_path) VALUES (?)");
        if (!$stmt) {
            die("❌ DB 쿼리 준비 중 오류 발생: " . $conn->error);
        }

        $stmt->bind_param("s", $targetFile);
        if ($stmt->execute()) {
            echo "✅ DB에 이미지 경로 저장 성공! <br>";
        } else {
            die("❌ DB 저장 중 오류 발생: " . $stmt->error);
        }

        echo "🎉 업로드 완료! <a href='display.php'>이미지 보기</a>";
    } else {
        die("❌ 파일을 이동하는 중 오류 발생.");
    }

    $stmt->close();
    $conn->close();
}
?>
