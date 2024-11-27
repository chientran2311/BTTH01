
<!doctype html>
<html lang="en">

<head>
    <title>Music for life</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<link rel="stylesheet" href="css/style.css">
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand mx-3" href="">
                    <img src="image/logo2.png" alt="" class="img-fluid">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-xxl   " href="#" aria-current="page">Trang chủ
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đăng nhập</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="text" placeholder="Nội dung cần tìm" />
                        <button class="btn btn-outline-success my-2 " type="submit">
                            Tìm
                        </button>
                    </form>
                </div>
            </div>
        </nav>



        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselId" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="image/slideshow/slide01.jpg" class="w-100 d-block" alt="First slide" />

                </div>
                <div class="carousel-item">
                    <img src="image/slideshow/slide02.jpg" class="w-100 d-block" alt="Second slide" />

                </div>
                <div class="carousel-item">
                    <img src="image/slideshow/slide03.jpg" class="w-100 d-block" alt="Third slide" />

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </header>
    <main class="container-fluid mt-3">
        <h3 class="text-center text-primary text-uppercase mb-3">TOP bài hát yêu thích</h3>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="image/songs/cayvagio.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <a href="http://localhost:8080/baitap1/detail.php" class=" h5 text-primary text-decoration-none">Cây,lá và gió</a>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="image/songs/csmt.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <a href="" class=" h5 text-primary text-decoration-none">Cuộc sống mến thương</a>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="image/songs/longme.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <a href="" class=" h5 text-primary text-decoration-none">Lòng mẹ</a>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="image/songs/phoipha.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <a href="" class=" h5 text-primary text-decoration-none">Phôi pha</a>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mt-3">
                    <img class="card-img-top" src="image/songs/noitinhyeubatdau.jpg" alt="Title" />
                    <div class="card-body text-center">
                        <a href="" class=" h5 text-primary text-decoration-none">Nơi tình yêu bắt đầu</a>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container-fluid mt-5" id="futter">
           <h2 class="text-center  mt-3 mb-4 " id="content">TLU'S MUSIC GARDEN</h2>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>