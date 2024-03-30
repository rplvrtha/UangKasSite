<div class="row">
    <div class="col-12 h-100">
        <div class="card shadow mb-4">
            <div class="card-title">
                <h1 class="h2 text-center m-4 text-gray-900">Create Pengeluaran</h1>
            </div>
            <div class=" card-body">
                <form action="app/pages/pengeluaran/create.php" method="post">
                    <label>Id Riwayat</label>
                    <input type="text" maxlength="6" class="form-control" name="add_id_riwayat">
                    <hr>
                    <label>Tanggal</label>
                    <input type="date" class="form-control" name="add_date">
                    <hr>
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="add_jml">
                    <hr>
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="add_ket">
            </div>
            <div class="card-footer text-right">
                <a href="?page=pemasukan" class="btn btn-secondary col-2 mr-2">Cancel</a>
                <input type="submit" class="btn btn-primary col-2 mr-2" value="Create">
                <input type="reset" class="btn btn-danger col-2" value="Bersihkan">
            </div>
            </form>
        </div>
    </div>
</div>