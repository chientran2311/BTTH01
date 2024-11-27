<?php
  require("connection.php");
  try {
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM theloai");
    $stmt->execute();
    $theloai_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo "". $e->getMessage() ."";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <?php 
           include("header.php");
           ?>
    </header>
    <main class="container mt-5" id="admin">
        <div class="row ">
            <div class="col-2 ">
                <a href="add_category.php" class="btn btn-success mt-5">Thêm mới</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="table-responsive">
                <table class="table table-striped  ">
                    <thead>
                        <tr>
                            <th scope="col-1">id</th>
                            <th scope="col-7">Tên thể loại</th>
                            <th scope="col-3">sửa</th>
                            <th scope="col-3">xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       foreach ($theloai_data as $row) {
                       ?>
                        <tr class="">
                            <td scope="row"><?php echo $row['ma_tloai'] ?></td>
                            <td><?php echo $row['ten_tloai'] ?></td>
                            <td><a href="edit_category.php?id=<?= $row['ma_tloai'] ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="delete_category.php?id=<?= $row['ma_tloai'] ?>"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                       <?php
                       }
                       ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
    <footer>
        <?php 
           include("footer.php");
           ?>
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