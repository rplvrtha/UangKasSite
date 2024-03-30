<?php
include '../../../api.php';
$body = [
    "id_riwayat" => $_POST['add_id_riwayat'],
    "kategori" => 'pengeluaran',
    "tanggal" => $_POST['add_date'],
    "nominal" => $_POST['add_jml'],
    "keterangan" => $_POST['add_ket']
];
        if (isset($_POST['add_id_riwayat']) && isset($_POST['add_date']) && isset($_POST['add_jml']) && isset($_POST['add_ket'])) {
            # code...

            $url = "http://localhost:8080/riwayat/create";
            
            try {
                postData($url, $body);
                header('location: ../../../?page=pengeluaran');
            } catch (\Throwable $th) {
                echo $th;
            }
        } else echo 'ada yang belum diisi '. json_encode($body)
    ?>