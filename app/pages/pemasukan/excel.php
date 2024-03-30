<?php
include("../../../api.php");
try {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <?php
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data Pemasukan - " . date('d-M-Y H:i') . ".xls");
        ?>
    </head>

    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = getData("http://localhost:8080/riwayat/pemasukan/all");
                $i=1;
                foreach ($data as $row) {
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
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