<?php
include '../../../api.php';
$body = [
    "no_induk" => $_POST['add_no_induk'],
    "nama" => $_POST['add_nama'],
    "username" => $_POST['add_usrnm'],
    "password" => $_POST['add_password'],
    "email" => $_POST['add_email'],
    "telp" => $_POST['add_telp'],
    "status" => $_POST['add_status'],
    "level" => $_POST['add_level']
];
        if (isset($_POST['add_no_induk']) && isset($_POST['add_nama']) && isset($_POST['add_usrnm']) && isset($_POST['add_password']) && isset($_POST['add_email']) && isset($_POST['add_telp']) && isset($_POST['add_status']) && isset($_POST['add_level'])) {
            # code...

            $url = "http://localhost:8080/user/create";
            
            try {
                postData($url, $body);
                header('location: ../../../?page=kelola');
            } catch (\Throwable $th) {
                echo $th;
            }
        } else echo 'ada yang belum diisi '. json_encode($body)
    ?>