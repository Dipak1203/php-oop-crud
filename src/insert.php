<?php


include './db/config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `users` (name,author,price,description) VALUES ('$name','$author',$price,'$desc');";

    $db = new Database();
    $db->insert($sql);

    if ($db) {
        echo "<script>
            alert('One Book added Successfully');
        </script>";
    }
    header('location:view.php');
}
