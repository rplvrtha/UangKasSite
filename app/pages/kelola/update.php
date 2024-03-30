<?php
include '../../../api.php';
$body = [
    "nama" => $_POST['edit_nama'],
    "username" => $_POST['edit_usrnm'],
    "password" => $_POST['edit_password'],
    "email" => $_POST['edit_email'],
    "telp" => $_POST['edit_telp'],
    "status" => $_POST['edit_status'],
    "level" => $_POST['edit_level']
];
        if (isset($_POST['edit_no_induk']) && isset($_POST['edit_nama']) && isset($_POST['edit_usrnm']) && isset($_POST['edit_password']) && isset($_POST['edit_email']) && isset($_POST['edit_telp']) && isset($_POST['edit_status']) && isset($_POST['edit_level'])) {
            $url = "http://localhost:8080/user/update/".$_POST['edit_no_induk'];
            
            try {
                putData($url, $body);
                header('location: ../../../?page=kelola');
            } catch (\Throwable $th) {
                echo $th;
            }
        } else echo 'ada yang belum diisi '. json_encode($body)
    ?>