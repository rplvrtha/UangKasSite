<?php
$value = getData("http://localhost:8080/riwayat/find/".$_GET['id_riwayat'])
?>
<div class="row">
    <div class="col-12 h-100">
        <div class="card shadow mb-4">
            <div class="card-title">
                <h1 class="h2 text-center m-4 text-gray-900">Edit Pengeluaran</h1>

            </div>
            <div class=" card-body">
                <form action="app/pages/pengeluaran/update.php" method="post">
                    <label>Id Riwayat</label>
                    <input class="form-control"  value="<?= $value['id_riwayat'] ?>" disabled>
                    <input type="hidden" name="edit_id_riwayat" value="<?= $value['id_riwayat'] ?>">
                    <hr>
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="edit_date" value="<?= substr($value['tanggal'],0,10) ?>">
                    <hr>
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="edit_jml" value="<?= $value['nominal'] ?>">
                    <hr>
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="edit_ket" value="<?= $value['keterangan'] ?>">
            </div>
            <div class="card-footer text-right">
                <a href="?page=pemasukan" class="btn btn-secondary col-2 mr-2">Cancel</a>
                <input type="submit" class="btn btn-primary col-2 mr-2" value="Update">
            </div>
            </form>
        </div>
    </div>
</div>