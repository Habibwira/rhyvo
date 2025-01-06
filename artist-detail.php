<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kpop Fans | Artist Detail</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <?php require "navbar.php"; ?>

    <!-- Artist Detail -->
    <div class="container-fluid py-5 warna4">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <img src="image/NCT.png" class="w-100" alt="Artist Image">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h1>NCT</h1>
                    <p class="fs-5">Dari SM Entertainment</p>
                    <p class="fs-5">Detail mengenai artis ini akan ditampilkan di sini. Deskripsikan keunikan, prestasi, atau latar belakang artis secara singkat.</p>
                    <p class="fs-5">Fandom: NCTzen</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Artists -->
    <div class="container-fluid py-5" style="background-color: red;">
        <div class="container">
            <h2 class="text-center mb-5" style="color: black;">Artist Terkait</h2>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                    <a href="#">
                        <img src="image/AESPA.png" class="img-fluid img-thumbnail" style="height: 100%; width: 100%; object-fit: cover; object-position: center;" alt="Related Artist">
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <a href="#">
                        <img src="image/EXO.png" class="img-fluid img-thumbnail" style="height: 100%; width: 100%; object-fit: cover; object-position: center;" alt="Related Artist">
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <a href="#">
                        <img src="image/ENHYPEN.png" class="img-fluid img-thumbnail" style="height: 100%; width: 100%; object-fit: cover; object-position: center;" alt="Related Artist">
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <a href="#">
                        <img src="image/RIIZE.png" class="img-fluid img-thumbnail" style="height: 100%; width: 100%; object-fit: cover; object-position: center;" alt="Related Artist">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require "footer.php"; ?>

    <script src="https://kit.fontawesome.com/69feecb069.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
