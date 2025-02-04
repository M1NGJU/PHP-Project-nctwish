<?php

$conn = mysqli_connect('localhost', 'test', '1111', 'testdb');

if (!$conn) {
    die('데이터베이스 연결 실패: ' . mysqli_connect_error());
}

// "시온"의 정보를 가져오는 SQL 쿼리 실행
$sql = "SELECT * FROM member WHERE name = '시온'";
$result = mysqli_query($conn, $sql);

// 데이터 가져오기
$sion = mysqli_fetch_assoc($result);

// MySQL 연결 닫기
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Sion.css">
</head>
<body>
    <!-- nav바 -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/nctwishLogo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            SION
          </a>
        </div>
    </nav>
    <!-- 슬라이드 -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/sion3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/sion2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/sion1.png" class="d-block w-100" alt="...">
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
    <div class="container mt-4">
        <h2 class="text-center">SION 정보</h2>
        <?php if ($sion): ?> 
        <table class="table table-bordered text-center">
            <tr>
                <th>이름</th>
                <td><?php echo htmlspecialchars($sion['name']); ?></td>
            </tr>
            <tr>
                <th>생년월일</th>
                <td><?php echo htmlspecialchars($sion['birthday']); ?></td>
            </tr>
            <tr>
                <th>국적</th>
                <td><?php echo htmlspecialchars($sion['nationality']); ?></td>
            </tr>
            <tr>
                <th>소속사</th>
                <td><?php echo htmlspecialchars($sion['Enter']); ?></td>
            </tr>
            <tr>
                <th>데뷔일</th>
                <td><?php echo htmlspecialchars($sion['debut']); ?></td>
            </tr>
        </table>
        <?php else: ?>
            <p class="text-center">시온의 정보가 없습니다.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>