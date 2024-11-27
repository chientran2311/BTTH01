<?php
require 'connection.php'; 

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $count_theloai = $conn->query("SELECT COUNT(*) FROM theloai")->fetchColumn();
    $count_tacgia = $conn->query("SELECT COUNT(*) FROM tacgia")->fetchColumn();
    $count_baiviet = $conn->query("SELECT COUNT(*) FROM baiviet")->fetchColumn();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <?php include('header.php') ?>
    </header>
    <main>
        <div class="container mt-5 my-4" id="admin">
            <div class="row ">
                <div class="col-sm-3 ">
                    <div class="card mb-2 " style="width: 100%;">

                        <div class="card-body">
                            <h4 class="card-title text-primary text-center">
                            <a href="" class="text-decoration-none">Người dùng</a>
                            </h4>
                            <p class="card-text text-center"> 2311</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title text-primary text-center">
                            <a href="category.php" class="text-decoration-none">Thể loại</a>
                            </h4>
                            <p class="card-text text-center"> <?php echo $count_theloai ?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title text-primary text-center">
                            <a href="author.php" class="text-decoration-none">Tác giả</a>
                            </h4>
                            <p class="card-text text-center"> <?php echo $count_tacgia ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title text-primary text-center">
                            <a href="article.php" class="text-decoration-none">Bài viết</a>
                            </h4>
                            <p class="card-text text-center"> <?php echo $count_baiviet ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include('footer.php') ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>