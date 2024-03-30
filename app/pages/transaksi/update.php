<?php
include '../../../api.php';
$body = [
    "no_induk" => $_POST['edit_no_induk'],
    "tanggal" => $_POST['edit_date'],
    "nominal" => $_POST['edit_jml'],
    "keterangan" => $_POST['edit_ket']
];
        if (isset($_POST['edit_id_trx']) && isset($_POST['edit_no_induk']) && isset($_POST['edit_date']) && isset($_POST['edit_jml']) && isset($_POST['edit_ket'])) {
            $url = "http://localhost:8080/transaksi/update/".$_POST['edit_id_trx'];
            
            try {
                putData($url, $body);
                header('location: ../../../?page=transaksi');
            } catch (\Throwable $th) {
                echo $th;
            }
        } else echo 'ada yang belum diisi '. json_encode($body)
    ?>