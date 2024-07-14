<?php
include 'database.php';

$db = new Database();

$detail = $db->edit($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Create Data</title>
</head>

<body>
    <div class="container">
        <h1>DATA BARANG</h1>
        <h4>Update Data Barang</h4>

        <form method="POST" action="proses.php?action=update">
            <?php
            foreach($detail as $siswa) {
            ?>
            <div class="mb-3">
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $siswa['id'] ?>">
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $siswa['nama_barang'] ?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $siswa['harga'] ?>">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stock</label>
                <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $siswa['stok'] ?>">
            </div>
            <?php
            }
            ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>