<?php
include '../../../api.php';
deleteData("http://localhost:8080/riwayat/delete/".$_GET['id_riwayat']);
header('location: ../../../?page=pengeluaran');
?>