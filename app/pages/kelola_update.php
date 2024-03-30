<?php
$value = getData("http://localhost:8080/user/find/" . $_GET['no_induk'])
?>
<div class="row">
    <div class="col-12 h-100">
        <div class="card shadow mb-4">
            <div class="card-title">
                <h1 class="h2 text-center m-4 text-gray-900">Edit User</h1>

            </div>
            <div class=" card-body">
                <form action="app/pages/kelola/update.php" method="post">
                    <label>No Induk</label>
                    <input class="form-control" value="<?= $value['no_induk'] ?>" disabled>
                    <input type="hidden" name="edit_no_induk" value="<?= $value['no_induk'] ?>">
                    <hr>
                    <label>Nama</label>
                    <input type="text" class="form-control" name="edit_nama" value="<?= ucfirst($value['nama']) ?>">
                    <hr>
                    <label>Username</label>
                    <input type="text" class="form-control" name="edit_usrnm" value="<?= $value['username'] ?>">
                    <hr>
                    <label>Password</label>
                    <input type="password" class="form-control" name="edit_password" placeholder="Masukkan Password">
                    <hr>
                    <label>Email</label>
                    <input type="email" class="form-control" name="edit_email" value="<?= $value['email'] ?>">
                    <hr>
                    <label>Telp</label>
                    <input type="tel" class="form-control" name="edit_telp" value="<?= $value['telp'] ?>">
                    <hr>
                    <label>Status</label>
                    <select name="edit_status" class="form-control">

                        <option value="belum_bayar" <?php if($value['status'] == 'belum_bayar' ) echo 'selected' ; ?>>Belum Bayar</option>
                        <option value="sudah_bayar" <?php if($value['status'] == 'sudah_bayar' ) echo 'selected'; ?>>Sudah Bayar</option>
                    </select>
                    <label>Level</label>
                    <select name="edit_level" class="form-control">
                        <?php if ($_SESSION['level'] == 'admin') { ?>
                            <option value="admin" <?php if($value['level'] == 'admin') echo 'selected' ?>>Admin</option>
                        <?php } ?>
                        <option value="guru" <?php if($value['level'] == 'guru') echo 'selected' ; ?>>Guru</option>
                        <option value="bendahara" <?php if($value['level'] == 'bendahara') echo 'selected' ; ?>>Bendahara</option>
                        <option value="siswa" <?php if($value['level'] == 'siswa') echo 'selected' ; ?>>Siswa</option>
                    </select>
            </div>
            <div class="card-footer text-right">
                <a href="?page=kelola" class="btn btn-secondary col-2 mr-2">Cancel</a>
                <input type="submit" class="btn btn-primary col-2 mr-2" value="Update">
            </div>
            </form>
        </div>
    </div>
</div>