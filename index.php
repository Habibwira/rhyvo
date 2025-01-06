<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kpop Fans | Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Korean-Fans | Home</title>
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body>
        <?php require "navbar.php"; ?>

        <!-- banner -->
        <div class="container-fluid banner d-flex align-items-center">
            <div class="container text-center" style="color: red;">
                <h1>Korean Pop</h1>
                <h4>Mau Cari Apa?</h4>

                <div class="col-8 offset-2">
                    <form method="get" action="artist.php">
                        <div class="input-group input-group-lg my-4">
                            <input type="text" class="form-control" placeholder="Masukan" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                            <button class="btn search warnalain1 text-black">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Highlighted Artist -->
        <div class="container-fluid py-5 warna2">
            <div class="container text-center">
                <h3 class="title" id="kategori">Kategori Artist</h3>

                <div class="row mt-5">
                    <div class="col-md-4 mb-3">
                        <div class="agensi boy-group"></div>
                        <h5 class="text-red mt-3 warna1 pt-2 pb-2"><a class="no-decoration" href="artist.php">Lihat</a></h5>
                    </div>

                    <div class="col-md-4 md-3">
                        <div class="agensi girl-group"></div>
                        <h5 class="text-red mt-3 warna1 pt-2 pb-2"><a class="no-decoration" href="artist.php">Lihat</a></h5>
                    </div>

                    <div class="col-md-4 md-3">
                        <div class="agensi solo-pria"></div>
                        <h5 class="text-red mt-3 warna1 pt-2 pb-2"><a class="no-decoration" href="artist.php">Lihat</a></h5>
                    </div>

                    <div class="col-md-4 md-3">
                        <div class="agensi solo-wanita"></div>
                        <h5 class="text-red mt-3 warna1 pt-2 pb-2"><a class="no-decoration" href="artist.php">Lihat</a></h5>
                    </div>

                    <div class="col-md-4 md-3">
                        <div class="agensi boy-band"></div>
                        <h5 class="text-red mt-3 warna1 pt-2 pb-2"><a class="no-decoration" href="artist.php">Lihat</a></h5>
                    </div>

                    <div class="col-md-4 md-3">
                        <div class="agensi girl-band"></div>
                        <h5 class="text-red mt-3 warna1 pt-2 pb-2"><a class="no-decoration" href="artist.php">Lihat</a></h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- tentang kami -->
        <div class="container-fluid warnalain1 py-5">
            <div class="container text-center">
                <h3>About</h3>
                <p class="fs-5 mt-3">
                    Selamat datang di K-Pop Fans! Kami adalah sumber terpercaya untuk informasi tentang artis K-pop favorit Anda dan agensinya. Temukan informasi lengkap tentang idola-idola K-pop dari berbagai agensi besar seperti SM Entertainment, YG Entertainment, JYP Entertainment, dan banyak lagi. Kami juga menyediakan informasi lengkap tentang grup K-pop favorit Anda, termasuk nama artis, logo, agensi, dan nama fandom mereka. Temukan semua yang Anda butuhkan untuk mendukung idola K-pop Anda di sini.
                </p>
                <p class="fs-5 mt-3">Mari kita rayakan kecintaan terhadap K-pop bersama di K-Pop Fans!</p>
                <a class="btn warna1 h3 mt-3 p-2 fs-5" href="tentang-saya.php" style="color: red;"> See More</a>
            </div>
        </div>

        <!-- Artist -->
        <div class="container-fluid py-5 warna1">
    <div class="container text-center">
        <h2 class="text">Artist</h2>
        <div class="row mt-5">
            <!-- NCT -->
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card warna4 border border-3 border-danger">
                    <div class="image-box">
                        <img src="image/NCT.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">NCT</h5>
                        <p class="card-p fw-bold text">From : SM Entertainment</p>
                        <p class="card-p fw-bold text">Fandom : NCTzen</p>
                        <a href="produk-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
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
                        <a href="produk-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
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
                        <a href="produk-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
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
                        <a href="produk-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
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
                        <a href="produk-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
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
                        <a href="produk-detail.php" class="btn warnalain1 text-red"> Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn warnalain1 h3 mt-3 p-2 fs-5" href="artist.php"> See More</a>
    </div>
</div>


        <!-- footer -->
        <?php require "footer.php"; ?>

        <script src="https://kit.fontawesome.com/69feecb069.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    </html>