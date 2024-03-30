<div class="row">

    <div class="col-12 h-100">
        <div class="card shadow mb-4">
            <div class="card-title">
                <h1 class="h2 text-center m-4 text-gray-900">Create User</h1>

            </div>
            <div class=" card-body">
                <form action="app/pages/kelola/create.php" method="post">
                    <label>No Induk</label>
                    <input type="number" class="form-control" name="add_no_induk">
                    <hr>
                    <label>Nama</label>
                    <input type="text" class="form-control" name="add_nama">
                    <hr>
                    <label>Username</label>
                    <input type="text" class="form-control" name="add_usrnm">
                    <hr>
                    <label>Password</label>
                    <input type="password" class="form-control" name="add_password">
                    <hr>
                    <label>Email</label>
                    <input type="email" class="form-control" name="add_email">
                    <hr>
                    <label>Telp</label>
                    <input type="tel" class="form-control" name="add_telp">
                    <hr>
                    <label>Status</label>
                    <select class="form-control" name="add_status">
                        <option value="sudah_bayar">Sudah Bayar</option>
                        <option value="belum_bayar">Belum bayar</option>
                    </select>
                    <hr>
                    <label>Level</label>
                    <select class="form-control" name="add_level">
                        <?php
                        if ($_SESSION['level'] == 'admin') {
                            echo '<option value="admin">Admin</option>';
                        }
                        ?>
                        <option value="guru">Guru</option>
                        <option value="bendahara">Bendahara</option>
                        <option value="siswa">Siswa</option>
                    </select>
            </div>
            <div class="card-footer text-right">
                <a href="?page=kelola" class="btn btn-secondary col-2 mr-2">Cancel</a>
                <input type="submit" class="btn btn-primary col-2 mr-2" value="Create">
                <input type="reset" class="btn btn-danger col-2" value="Bersihkan">
            </div>
            </form>
        </div>
    </div>
</div>