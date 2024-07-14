<?php
include 'database.php';

$db = new Database();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>DATA BARANG</h1>
        <a href="create.php" class="btn btn-primary btn-sm">Create New Data</a>
        <table border='1' class="table table-hover mt-2">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($db->show() as $barang) {
                ?> 
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <!--<td><?php echo $barang['id']; ?></td>-->
                    <td><?php echo $barang['nama_barang']; ?></td>
                    <td><?php echo $barang['harga']; ?></td>
                    <td><?php echo $barang['stok']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $barang['id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="proses.php?id=<?php echo $barang['id'];?>&action=delete" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>