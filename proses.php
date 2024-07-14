<?php
include 'database.php';

$db = new Database();
$action = $_GET['action'];

if($action == 'add') {
    //add data
    $db->add($_POST['nama_barang'], $_POST['harga'], $_POST['stok']);
    header('Location: index.php');
} else if ($action == 'update') {
    //update data
    $db->update($_POST['id'], $_POST['nama_barang'], $_POST['harga'], $_POST['stok']);
    header('Location: index.php');

} else if($action == 'delete') {
    //delete data
    $db->delete($_GET['id']);
    header('Location: index.php');
}