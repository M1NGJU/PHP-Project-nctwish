<?php

$conn = mysqli_connect('localhost', 'test', '1111', 'testdb');

if (!$conn) {
    die('데이터베이스 연결 실패: ' . mysqli_connect_error());
}

// "사쿠야"의 정보를 가져오는 SQL 쿼리 실행
$sql = "SELECT * FROM member WHERE name = '사쿠야'";
$result = mysqli_query($conn, $sql);

// 데이터 가져오기
$sakuya = mysqli_fetch_assoc($result);

// MySQL 연결 닫기
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpo  rt" content="width=device-width, initial-scale=1.0">
    <title>SAKUYA</title>
    <link rel="stylesheet" href="Sakuya.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- 네비게이션 바 -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/nctwishLogo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            SAKUYA
          </a>
        </div>
    </nav>
    <!-- 료 슬라이드 -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/sakuya2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/sakuya1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/sakuya3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>