<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#pengingat"><i class="fas fa-bell fa-fw text-white-50"></i> Kirim Pengingat</a>
</div>

<!-- Content Row -->
<div class="row">

  <!-- content saldo -->
  <div class="col-xl-9 col-md-8 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              SALDO
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $result = getSaldo();
                                                                echo $result; ?></div>
          </div>
          <div class="col-auto mr-1">
            <i class="fas fa-wallet fa-3x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content jumlah user -->
  <div class="col-xl-3 col-md-4 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
              jumlah user
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $result = getData('http://localhost:8080/user/');
                                                                echo $result['total_user']; ?></div>
          </div>
          <div class="col-auto mr-1">
            <i class="fas fa-users fa-3x text-gray-300"></i>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content pemasukan -->
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
              pemasukan
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $result = "Rp " . number_format(getData('http://localhost:8080/riwayat/pemasukan/')['total_pemasukan']+getData('http://localhost:8080/transaksi/')['total_transaksi'], 2, ",", ".");
                                                                echo $result; ?></div>
          </div>
          <div class="col-auto mr-1">
            <i class="fas fa-chart-bar fa-3x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- content pengeluaran -->
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
              pengeluaran
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $result = "Rp " . number_format(getData('http://localhost:8080/riwayat/pengeluaran/')['total_pengeluaran'], 2, ",", ".");
                                                                echo $result; ?></div>
          </div>
          <div class="col-auto mr-1">
            <i class="fas fa-chart-area fa-3x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- content nominal kas -->
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2 ">
            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
              nominal kas
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              if (isset($_POST['jumlah_kas'])) {
                $data = $_POST['jumlah_kas'];
              } else {
                $data = getData('http://localhost:8080/data/find/kas')['jumlah'];
              }

              $result = "Rp " . number_format($data, 2, ",", ".");
              echo $result;
              ?>
            </div>
            <div class="mt-3 row no-gutters align-items-center"><a href="#" class=" d-sm-inline btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#nominalKas">Edit Nominal</a></div>
          </div>

          <div class="col-auto mr-1">
            <span class="fas fa-coins fa-3x text-gray-300"></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- content denda -->
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
              denda
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              if (isset($_POST['jumlah_denda'])) {
                $data = $_POST['jumlah_denda'];
              } else {
                $data = getData('http://localhost:8080/data/find/denda')['jumlah'];
              }
              $result = "Rp " . number_format($data, 2, ",", ".");
              echo $result;
              ?>
            </div>
            <div class="mt-3 row no-gutters align-items-center"><a href="#" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="#" data-toggle="modal" data-target="#nominalDenda">Edit Denda</a></div>
          </div>

          <div class="col-auto mr-1">
            <span class="fas fa-donate fa-3x text-gray-300" href="#" data-toggle="modal" data-target="#nominalDenda" style="text-decoration: none;"></span><br>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-xl-12 col-lg-6 h-100">
  <div class="card text-center shadow mb-4">

    <!-- Card Body -->
    <div class=" card-body">
      <div class="chart-pie pt-4 pb-2">
        <canvas id="myChart"></canvas>
      </div>
      <div class="mt-4 text-center small">
        <span class="mr-2">
          <i class="fas fa-circle text-success"></i> Pemasukan
        </span>
        <span class="mr-2">
          <i class="fas fa-circle text-danger"></i> Pengeluaran
        </span>

      </div>
    </div>
  </div>
</div>

<!-- modal nominal -->
<form method="post" action="
<?php
$body = [
  "jumlah" => $_POST['jumlah_kas']
];
putData("http://localhost:8080/data/update/kas", $body);
?>
" class="modal fade" id="nominalKas" tabindex="-1" role="dialog" aria-labelledby="kasLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="kasLabel">KasQu</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="h5 m-2">Masukkan Nominal</label>
          <input class="form-control form-control-user" type="number" name="jumlah_kas" placeholder="Nominal" value="<?php echo getData('http://localhost:8080/data/find/kas')['jumlah'] ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <input type="submit" name="submit" value="Confirm" class="btn btn-primary">
      </div>
    </div>
  </div>
</form>

<form method="post" action="
<?php
$body = [
  "jumlah" => $_POST['jumlah_kas']
];
putData("http://localhost:8080/data/update/kas", $body);
?>
" class="modal fade" id="nominalDenda" tabindex="-1" role="dialog" aria-labelledby="dendaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dendaLabel">KasQu</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="h5 m-2">Masukkan Nominal</label>
          <input class="form-control form-control-user" type="number" name="jumlah_denda" placeholder="Nominal" value="<?php echo getData('http://localhost:8080/data/find/denda')['jumlah'] ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <input type="submit" name="submit" value="Confirm" class="btn btn-primary">
      </div>
    </div>
  </div>
</form>

<!-- kirim pengingat -->
<form method="post" onclick="alert('Comming Soon')" class="modal fade" id="pengingat" tabindex="-1" role="dialog" aria-labelledby="kasLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="kasLabel">KasQu</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="h5 m-2">Kepada</label>
          <select class="form-control">
            <option>Semua siswa</option>
            <option>Siswa yang belum membayar kas</option>
          </select>
          <hr>
          <textarea name="pesan" id="pesan" class="form-control col-12" rows="5" placeholder="Tulis pesan pengingat disini..."></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <input type="submit" name="submit" value="Confirm" class="btn btn-primary">
      </div>
    </div>
  </div>
</form>