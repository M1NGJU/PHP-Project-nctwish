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
    <!-- 멤버 이미지 -->
    <div class="container mt-4">
        <h2>NCT WISH</h2>
        <div class="row">
            <?php
            include 'db.php';

            $result = $conn->query("SELECT image_path FROM member_images");

            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-2 col-sm-4 col-6">';
                echo '<div class="card mb-6">';
                echo '<img src="' . $row["image_path"] . '" class="card-img-top" style="width: 100%; height: auto;">';
                echo '</div>';
                echo '</div>';
            }

            $conn->close();
            ?>
        </div>
    </div>

   <!-- 유튜브 영상 모음 -->
    <div class="container mt-4">
        <h2 class="youtube-title">WISH 영상 모음</h2>
        <div class="youtube-wrapper">
            <button class="scroll-btn left" onclick="scrollLeft()">&#10094;</button> <!-- 왼쪽 버튼 -->
            <div class="youtube-carousel">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YtD6TLCKLI8?si=_aSFkIrpwtmuVefM" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/KZTJAWFW_GM?si=znw4eM5Ve9CW-plM" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/TEYygTDBcK4?si=-pg4PDITytOm8LmH" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/rkNnogEAX00?si=ho5-TfIW3T6yiIyl" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Y8BGikyr8Wk?si=Cmfn5qmJIcYXFrz6" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/R319nIK_P4s?si=fkZI7YDU9dLcIBWb" allowfullscreen></iframe>
            </div>
            <button class="scroll-btn right" onclick="scrollRight()">&#10095;</button> <!-- 오른쪽 버튼 -->
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
