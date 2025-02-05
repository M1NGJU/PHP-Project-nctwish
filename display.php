<?php
include 'db.php';

$result = $conn->query("SELECT image_path FROM member_images");

echo "<h2>업로드된 이미지 목록</h2>";
while ($row = $result->fetch_assoc()) {
    echo "🔹 이미지 경로: " . $row["image_path"] . "<br>";
    echo '<img src="' . $row["image_path"] . '" width="200" style="margin:10px;">';
}

$conn->close();
?>
