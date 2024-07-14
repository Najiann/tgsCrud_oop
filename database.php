<?php

class Database
{
    public $host = 'localhost';
    public $username = 'root';
    public $pass = '';
    public $db = 'crud';
    public $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->pass);
        mysqli_select_db($this->conn, $this->db);
    }

    function show()
    {
        $data = mysqli_query($this->conn, "SELECT * FROM tb_barang");
        $all = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $all;
    }

    function add($nama_barang, $harga, $stok)
    {
        mysqli_query($this->conn, "INSERT INTO `tb_barang` VALUES (NULL, '$nama_barang ', '$harga', '$stok')");
    }

    function edit($id)
    {
        $data = mysqli_query($this->conn, "SELECT * FROM tb_barang WHERE id ='$id' ");
        $all = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $all;
    }

    function update($id, $nama_barang, $harga, $stok)
    {
        mysqli_query($this->conn, "UPDATE `tb_barang` SET `nama_barang` = '$nama_barang', `harga` = '$harga', `stok` = '$stok' WHERE `tb_barang`.`id` = '$id'");
    }

    function delete($id)
    {
        mysqli_query($this->conn, "DELETE FROM tb_barang WHERE `tb_barang`.`id` ='$id' ");
    }
}