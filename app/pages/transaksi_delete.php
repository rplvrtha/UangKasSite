<div class="row">

    <div class="col-12 h-100">
        <div class="card shadow mb-4">
            <div class="card-title">
                <h1 class="h2 text-center m-4 text-gray-900">Delete Transaksi</h1>

            </div>
            <form action="app/pages/transaksi/delete.php?id_trx=<?= $_GET['id_trx']?>" method="post">
                <div class=" card-body">
                <h5>Apakah kamu yakin ingin menghapus data dengan id <?= $_GET['id_trx'] ?>?</h5>
                </div>
                <div class="card-footer text-right">
                    <a href="?page=transaksi" class="btn btn-secondary col-2 mr-2">Cancel</a>
                    <input type="submit" class="btn btn-danger col-2 mr-2" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>