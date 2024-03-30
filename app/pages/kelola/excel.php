<?php
include("../../../api.php");
try {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data User - " . date('d-M-Y H:i') . ".xls");
        ?>
    </head>

    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Status</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = getData("http://localhost:8080/user/only");
                $i=1;
                foreach ($data as $row) {
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= ucfirst($row['nama']) ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['password'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['telp'] ?></td>
                        <td><?= str_replace("_", " ", ucfirst($row['status'])) ?></td>
                        <td><?= ucfirst($row['level']) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>

    </html>
<?php

} catch (\Throwable $th) {
    echo $th;
}
?>