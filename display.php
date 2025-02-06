<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="head">
        <img src="img/wave.png">
        <div class="text">
            <img src="img/nctText.png">
        </div>
    </div>
    <!-- 멤버 이미지 카드 형식 -->
    <div class="container mt-4">
        <h2>NCT WISH</h2>
        <div class="row">
            <div class="col-2 mb-4">
                <div class="card">
                    <a href="Sion.php">
                        <img src="img/member-sion.png" class="card-img-top" alt="Sion">
                    </a>
                </div>
            </div>
            <div class="col-2 mb-4">
                <div class="card">
                    <a href="Riku.php">
                        <img src="img/member-riku.png" class="card-img-top" alt="Riku">
                    </a>
                </div>
            </div>
            <div class="col-2 mb-4">
                <div class="card">
                    <a href="Yushi.php">
                        <img src="img/member-yushi.png" class="card-img-top" alt="Yushi">
                    </a>
                </div>
            </div>
            <div class="col-2 mb-4">
                <div class="card">
                    <a href="Jaehee.php">
                        <img src="img/member-jaehee.png" class="card-img-top" alt="Jaehee">
                    </a>
                </div>
            </div>
            <div class="col-2 mb-4">
                <div class="card">
                    <a href="ryo.php">
                        <img src="img/member-ryo.png" class="card-img-top" alt="Ryo">
                    </a>
                </div>
            </div>
            <div class="col-2 mb-4">
                <div class="card">
                    <a href="Sakuya.php">
                        <img src="img/member-sakuya.png" class="card-img-top" alt="Sakuya">
                    </a>
                </div>
            </div>
        </div>
    </div>

   <!-- 유튜브 영상 모음 -->
    <div class="container mt-4">
        <h2 class="youtube-title">NCT WISH 영상 모음</h2>

        <div class="youtube-wrapper">
            <button class="carousel-btn" onclick="scrollLeft()">&#10094;</button>  <!-- 왼쪽 버튼 -->

            <div class="youtube-carousel">
                <?php include 'youtube.php'; ?>  <!-- 유튜브 API로 가져온 동영상 -->
            </div>

            <button class="carousel-btn" onclick="scrollRight()">&#10095;</button>  <!-- 오른쪽 버튼 -->
        </div>
    </div>

    <!-- 위시 사진 모음 -->
    <div class="container mt-4">
        <h2 class="youtube-title">NCT WISH 사진 모음</h2>

        <div class="youtube-wrapper">
            <button class="carousel-btn" onclick="scrollLeft()">&#10094;</button>  <!-- 왼쪽 버튼 -->

            <div class="youtube-carousel">
                <img src="img/image2.png">
                <img src="img/image3.png">
                <img src="img/image4.png">
                <img src="img/image5.png">
                <img src="img/image6.png">
                <img src="img/image7.png">
                <img src="img/image8.png">
                <img src="img/image9.png">
            </div>

            <button class="carousel-btn" onclick="scrollRight()">&#10095;</button>  <!-- 오른쪽 버튼 -->
        </div>
    </div>

    <!-- JavaScript-->
    <script>
        function scrollLeft() {
            document.querySelector(".youtube-carousel").scrollBy({ left: -600, behavior: 'smooth' });
        }

        function scrollRight() {
            document.querySelector(".youtube-carousel").scrollBy({ left: 600, behavior: 'smooth' });
        }
    </script>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
