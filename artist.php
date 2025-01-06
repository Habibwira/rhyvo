<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kpop Fans | Artist</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .card {
            background-color: #2c2c2c; /* Abu-abu gelap */
            border: 3px solid red;
            color: red; /* Teks warna merah */
        }

        .card img {
            background-color: #2c2c2c;
        }

        .btn {
            background-color: red;
            color: black;
        }

        .btn:hover {
            background-color: darkred;
        }
    </style>

</head>

<body>
    <?php require "navbar.php"; ?>

    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container">
            <h1 class="text text-center">Korean Pop</h1>
        </div>
    </div>

    <!-- body -->
    <div class="full-body warna1">
        <div class="container py-5" style="background-color: black;">
            <form class="d-flex mt-3 mb-5" role="search" action="" method="get">
                <input class="form-control me-2" type="text" name="keyword" placeholder="Search" aria-label="Search" autocomplete="off" id="keyword">
                <button class="btn" style="background-color: red;" type="submit" name="cari" id="tombol-cari">Search</button>
            </form>
            <div class="row text-center">
                <div class="col-lg-3 mb-5">
                    <h3 style="color: red;">Kategori</h3>
                    <ul class="list-group">
                        <!-- Placeholder kategori -->
                        <a class="no-decoration" href="#">
                            <li class="list-group-item" style="background-color: #a0a0a0;">Boygroup</li>
                        </a>
                        <a class="no-decoration" href="#">
                            <li class="list-group-item" style="background-color: #a0a0a0;">Girlgroup</li>
                        </a>
                        <a class="no-decoration" href="#">
                            <li class="list-group-item" style="background-color: #a0a0a0;">Solo Pria</li>
                        </a>
                        <a class="no-decoration" href="#">
                            <li class="list-group-item" style="background-color: #a0a0a0;">Solo Wanita</li>
                        </a>
                        <a class="no-decoration" href="#">
                            <li class="list-group-item" style="background-color: #a0a0a0;">Boyband</li>
                        </a>
                        <a class="no-decoration" href="#">
                            <li class="list-group-item" style="background-color: #a0a0a0;">Girlband</li>
                        </a>
                    </ul>
                </div>
                <div class="container-fluid col-lg-9" id="artist">
                    <div class="container">
                        <h3 class="text-center" style="color: red;">Artist</h3>
                        <div class="row">
                            <!-- Placeholder artist -->
                            <!-- NCT -->
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card warna1 border border-3 border-danger">
                    <div class="image-box">
                        <img src="image/NCT.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">NCT</h5>
                        <p class="card-p fw-bold text">From : SM Entertainment</p>
                        <p class="card-p fw-bold text">Fandom : NCTzen</p>
                        <a href="artist-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- EXO -->
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card warna2 border border-3 border-danger">
                    <div class="image-box">
                        <img src="image/EXO.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">EXO</h5>
                        <p class="card-p fw-bold text">From : SM Entertainment</p>
                        <p class="card-p fw-bold text">Fandom : EXO-L</p>
                        <a href="artist-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Girls Generation -->
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card warna2 border border-3 border-danger">
                    <div class="image-box">
                        <img src="image/SNSD.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Girls Generation</h5>
                        <p class="card-p fw-bold text">From : SM Entertainment</p>
                        <p class="card-p fw-bold text">Fandom : SONE</p>
                        <a href="artist-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- aespa -->
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card warna2 border border-3 border-danger">
                    <div class="image-box">
                        <img src="image/AESPA.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">aespa</h5>
                        <p class="card-p fw-bold text">From : SM Entertainment</p>
                        <p class="card-p fw-bold text">Fandom : Mys</p>
                        <a href="artist-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- ENHYPEN -->
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card warna2 border border-3 border-danger">
                    <div class="image-box">
                        <img src="image/ENHYPEN.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ENHYPEN</h5>
                        <p class="card-p fw-bold text">From : Hybe Label</p>
                        <p class="card-p fw-bold text">Fandom : ENGENE</p>
                        <a href="artist-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- RIIZE -->
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card warna2 border border-3 border-danger">
                    <div class="image-box">
                        <img src="image/RIIZE.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">RIIZE</h5>
                        <p class="card-p fw-bold text">From : SM Entertainment</p>
                        <p class="card-p fw-bold text">Fandom : BRIZE</p>
                        <a href="artist-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
                    </div>
                </div>
            </div>
                            <!-- Tambahkan lebih banyak artist di sini -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>

    <script src="https://kit.fontawesome.com/69feecb069.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        var keyword = document.getElementById("keyword");
        var tombolCari = document.getElementById("tombol-cari");
        var artistContainer = document.getElementById("artist");

        keyword.addEventListener("keyup", function() {
            // Contoh penggantian dengan AJAX statis
            artistContainer.innerHTML = `<div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-3 border-danger text-center" style="background-color: #404040;">
                        <div class="image-box">
                            <img src="image/example-search.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-5 warna1" style="color: red;">Search Result Artist</h5>
                            <p class="card-p fw-bold text">Dari Search Agency</p>
                            <p class="card-p fw-bold text">Fandom "Search Fandom"</p>
                            <a href="#" class="btn" style="background-color: red; color: black;"> Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>`;
        });
    </script>

</body>

</html>
