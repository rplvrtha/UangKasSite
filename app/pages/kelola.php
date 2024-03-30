<?php
try{
?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Tabel User</h1>
<a href="app/pages/kelola/excel.php" target="_blank" class="btn btn-sm btn-success shadow-sm mb-3">
    <span class="fas fa-download"></span> Export to Excel
</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h5 mb-0 text-gray-800">Daftar User</h1>
            <a href="?page=kelola_create" class="col-1  btn btn-sm btn-primary shadow-sm">
                <span class="fas fa-plus"></span> <span class="d-none d-xl-inline-block">Add</span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="myDataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No Induk</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Telp</th>
                        <th>Status</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = getData("http://localhost:8080/user/only");
                    foreach ($data as $row) {
                        echo "<tr>";
                        echo "<td>" . ucfirst($row['no_induk']) . "</td>";
                        echo "<td>" . ucfirst($row['nama']) . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['telp'] . "</td>";
                        echo "<td>" . str_replace("_", " ", ucfirst($row['status'])) . "</td>";
                        echo "<td>" . ucfirst($row['level']) . "</td>";
                        echo '<td> 
                        <div class="col">
                        <div class="row">
                            <a class="mr-1 col-xl-auto col-md-12 btn btn-sm btn-primary shadow-sm" href="?page=kelola_update&no_induk='.$row['no_induk'] .'"><span class="mr-1 fas fa-edit"></span><span class="d-none d-xl-inline-block">Edit</span></a>
                            <a class="col-xl-auto col-md-12 btn btn-sm btn-danger shadow-sm" href="?page=kelola_delete&no_induk='.$row['no_induk'] .'"><span class="mr-1 fas fa-trash"></span><span class="d-none d-xl-inline-block">Delete</span></a>
                        </div>
                    </div>
                    </td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
 } catch (\Throwable $th) {
    echo $th;
}?>