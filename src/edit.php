<?php include './db/config.php'; ?>

<?php
$db = new Database();
$row = $db->find('users', $_GET['edit']);
echo $row;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit</title>
</head>

<body class="">
    <?php include '../header.php'; ?>

    <?php
    $db = new Database();
    $row = $db->find('users', $_GET['edit']);
    echo $row;
    ?>

    <?php if ($row) : ?>
        <?php echo "Hello World" . $row['name']; ?>

    <?php endif; ?>

    <section class="container mt-4">
        <div class="row h-100 justify-content-center align-item-center">
            <div class="col-md-8">
                <img src="../books.gif" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 mt-5 shadow-lg p-4">
                <form action="./src/insert.php" method="post" class="mt-3">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter Books Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the books name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter book author</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the books name" name="author">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Books Price</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter the books name" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Write Describe Books</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" name="edit" value="Update" />
                </form>
            </div>
        </div>
    </section>

    <div class="container-fluid bg-dark text-light py-3 text-center mt-3">
        <a href="" class="text-light text-center text-decoration-none">copyright2022DesignByDIPAKKUMAL</a>
    </div>
</body>

</html>