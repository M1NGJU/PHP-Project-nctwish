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

    <div class="container mt-4">
        <h2>멤버</h2>
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
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
