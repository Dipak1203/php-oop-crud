<?php



if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include './db/config.php';
    $db = new Database();
    $db->delete('users', $id);

    if ($db) {
        header('location:view.php');
    }
}
