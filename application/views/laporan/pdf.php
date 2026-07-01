<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
table{
    width:100%;
    border-collapse:collapse;
}
th,td{
    border:1px solid #000;
    padding:8px;
    text-align:center;
}
h2{
    text-align:center;
}
</style>
</head>
<body>

    <h2>Laporan Pendapatan</h2>

    <table>

        <tr>
            <th>Tanggal</th>
            <th>Reservasi</th>
            <th>Pendapatan</th>
        </tr>

        <?php foreach($laporan as $l){ ?>

        <tr>
            <td><?= date('d M Y',strtotime($l->tanggal)) ?></td>
            <td><?= $l->jumlah_reservasi ?></td>
            <td>Rp <?= number_format($l->pendapatan,0,',','.') ?></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>