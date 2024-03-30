<?php
include("../../../api.php");
try {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data Transaksi - " . date('d-M-Y H:i') . ".xls");
        ?>
    </head>

    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Induk</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = getData("http://localhost:8080/transaksi/find/all");
                $i=1;
                foreach ($data as $row) {
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['no_induk'] ?></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td><?= $row['nominal'] ?></td>
                        <td><?= $row['keterangan'] ?></td>
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