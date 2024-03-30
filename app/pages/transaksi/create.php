<?php
include '../../../api.php';
$body = [
    "id_trx" => $_POST['add_id_trx'],
    "no_induk" => $_POST['add_no_induk'],
    "tanggal" => $_POST['add_date'],
    "nominal" => $_POST['add_jml'],
    "keterangan" => $_POST['add_ket']
];
        if (isset($_POST['add_id_trx']) && isset($_POST['add_no_induk']) && isset($_POST['add_date']) && isset($_POST['add_jml']) && isset($_POST['add_ket'])) {
            # code...

            $url = "http://localhost:8080/transaksi/create";
            
            try {
                postData($url, $body);
                header('location: ../../../?page=transaksi');
            } catch (\Throwable $th) {
                echo $th;
            }
        } else echo 'ada yang belum diisi '. json_encode($body)
    ?>