<?php
include '../../../api.php';
deleteData("http://localhost:8080/user/delete/".$_GET['no_induk']);
header('location: ../../../?page=kelola');
?>