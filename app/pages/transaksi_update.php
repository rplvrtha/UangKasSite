<?php
$value = getData("http://localhost:8080/transaksi/find/".$_GET['id_trx']);
$data =getData("http://localhost:8080/user/only");
?>
<div class="row">
    <div class="col-12 h-100">
        <div class="card shadow mb-4">
            <div class="card-title">
                <h1 class="h2 text-center m-4 text-gray-900">Edit Transaksi</h1>

            </div>
            <div class=" card-body">
                <form action="app/pages/transaksi/update.php" method="post">
                <label>Id Transaksi</label>
                <input class="form-control"  value="<?= $value['id_trx'] ?>" disabled>
                <input type="hidden" name="edit_id_trx" value="<?= $value['id_trx'] ?>">
                    <hr>
                    <label>No Induk</label>
                    <select name="edit_no_induk" class="form-control">
                        <?php
                    foreach ($data as $row) {
                        ?>
                    <option value="<?= $row['no_induk'] ?>" <?php if($value['no_induk'] == $row['no_induk']) echo "selected";?>><?= $row['nama'] ?></option>
                    <?php
                    }
                    ?>
                    </select>
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
                <a href="?page=transaksi" class="btn btn-secondary col-2 mr-2">Cancel</a>
                <input type="submit" class="btn btn-primary col-2 mr-2" value="Update">
            </div>
            </form>
        </div>
    </div>
</div>