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
        <?php include 'header.php' ?>
    </header>
    <main>
        <div class="container mt-5 mb-3" id="admin">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
                    <form method="post">
                        <div class="mb-3">
                            <label for="ten_tloai" class="form-label">Tên thể loại</label>
                            <input type="text" class="form-control" name="ten_tloai" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Thêm" class="btn btn-success mx-2">
                            <a href="category.php" class="btn btn-warning">Quay lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'footer.php' ?>
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
<?php
require 'connection.php';
 $ten_tloai = trim($_POST['ten_tloai']);
 if (empty($ten_tloai)) {
    echo 'Vui lòng nhập tên thể loại';
 } else {
    $sql = "INSERT INTO theloai (ten_tloai) VALUES (:tentheloai) ";
    $stmt = $conn ->prepare($sql);
    $stmt ->bindParam(':tentheloai', $ten_tloai);
    $stmt -> execute();
    header('location: category.php');
 }
?>