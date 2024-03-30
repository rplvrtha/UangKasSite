<?php
include '../../../api.php';
$body = [
    "kategori" => 'pemasukan',
    "tanggal" => $_POST['edit_date'],
    "nominal" => $_POST['edit_jml'],
    "keterangan" => $_POST['edit_ket']
];
        if (isset($_POST['edit_id_riwayat']) && isset($_POST['edit_date']) && isset($_POST['edit_jml']) && isset($_POST['edit_ket'])) {
            $url = "http://localhost:8080/riwayat/update/".$_POST['edit_id_riwayat'];
            
            try {
                putData($url, $body);
                header('location: ../../../?page=pemasukan');
            } catch (\Throwable $th) {
                echo $th;
            }
        } else echo 'ada yang belum diisi '. json_encode($body)
    ?>