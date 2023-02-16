<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include '../header.php'; ?>

    <!-- Creating Table to view all the data in the mysql database -->
    <!-- using bootstrap table -->
    <div class="container mt-5">

        <table class="table table-striped table-dark">
            <thead>
                <?php
                include './db/config.php';
                $db = new Database();

                // echo count($db->viewData('users'));
                if (count($db->viewData('users'))) :
                ?>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Books Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
            </thead>
            <tbody>


                <?php foreach ($db->viewData('users') as $row) : ?>
                    <?php
                        $id = $row['id'];
                        $name = $row['name'];
                        $author = $row['author'];
                        $price = $row['price'];
                        $desc = $row['description'];
                    ?>
                    <tr>
                        <th scope="row"><?php echo  $id; ?></th>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $author; ?></td>
                        <td><?php echo  $price; ?></td>
                        <td><?php echo $desc; ?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td>
                            <a href="edit.php?edit=<?php echo $id; ?>" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        <?php endif; ?>
        </table>
    </div>
</body>

</html>