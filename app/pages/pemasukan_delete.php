<div class="row">

    <div class="col-12 h-100">
        <div class="card shadow mb-4">
            <div class="card-title">
                <h1 class="h2 text-center m-4 text-gray-900">Delete Pemasukan</h1>

            </div>
            <form action="app/pages/pemasukan/delete.php?id_riwayat=<?= $_GET['id_riwayat']?>" method="post">
                <div class=" card-body">
                <h5>Apakah kamu yakin ingin menghapus data dengan id <?= $_GET['id_riwayat'] ?>?</h5>
                </div>
                <div class="card-footer text-right">
                    <a href="?page=pemasukan" class="btn btn-secondary col-2 mr-2">Cancel</a>
                    <input type="submit" class="btn btn-danger col-2 mr-2" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>