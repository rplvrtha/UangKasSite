<?php
session_start();
include("api.php");

function getSaldo()
{
  $transaksi = getData('http://localhost:8080/transaksi/');
  $pemasukan = getData('http://localhost:8080/riwayat/pemasukan/');
  $pengeluaran = getData('http://localhost:8080/riwayat/pengeluaran/');

  $saldo = $transaksi['total_transaksi'] - $pengeluaran['total_pengeluaran'] + $pemasukan['total_pemasukan'];
  $result = "Rp " . number_format($saldo, 2, ",", ".");

  return $result;
}
if (isset($_SESSION["username"]) && $_SESSION["no_induk"]) {
  $title = "Dashboard";
  $page = $_GET['page'];
  $page_file = "app/pages/$page.php";
  if (isset($_GET['page']) && file_exists($page_file)) {
    $title = ucfirst($_GET['page']);
  } else if (!$page) {
    $title = "Dashboard";
  } else {
    $title = "404: Page Not Found";
  }
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
      <?php
      echo strtoupper(str_replace('_',' ',$title));
      ?> - KASQU
    </title>
    <link href="assets/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  </head>
  <body id="page-top">
    <div id="wrapper">
      <?php include 'app/template/sidebar.php'; ?>
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <?php include 'app/template/header.php'; ?>
          <div class="container-fluid">
            <?php
            if (isset($_GET['page'])) {
              $page = $_GET['page'];
              $page_file = "app/pages/$page.php";
              if (file_exists($page_file)) {
                include $page_file;
              } else {
                include "app/pages/not_found.php";
              }
            } else {
              include 'app/pages/dashboard.php';
            } ?>
          </div>
        </div>
      <?php include 'app/template/footer.php';
    } else {
      header('Location: app/pages/login.php');
      exit();
    } ?>