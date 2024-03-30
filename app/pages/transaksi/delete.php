<?php
include '../../../api.php';
deleteData("http://localhost:8080/transaksi/delete/".$_GET['id_trx']);
header('location: ../../../?page=transaksi');
?>