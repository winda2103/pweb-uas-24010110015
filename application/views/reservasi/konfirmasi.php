<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Reservasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow rounded-4">

        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Konfirmasi & Pembayaran</h4>
        </div>

        <div class="card-body">

            <h5 class="mb-4">Ringkasan Reservasi</h5>

            <table class="table">

                <tr>
                    <th width="180">Lapangan</th>
                    <td><?= $lapangan ?></td>
                </tr>

                <tr>
                    <th>Tanggal</th>
                    <td><?= $tanggal ?></td>
                </tr>

                <tr>
                    <th>Jam Mulai</th>
                    <td><?= $jam_mulai ?></td>
                </tr>

                <tr>
                    <th>Durasi</th>
                    <td><?= $durasi ?> Jam</td>
                </tr>

                <tr>
                    <th>Total Harga</th>
                    <td>
                        <b class="text-primary">
                            Rp <?= number_format($total_harga,0,',','.') ?>
                        </b>
                    </td>
                </tr>

            </table>

            <hr>

            <h5>Metode Pembayaran</h5>

            <form action="<?= base_url('pembayaran') ?>" method="post">

                <input type="hidden" name="id_reservasi" value="<?= $id_reservasi ?>">
                <input type="hidden" name="nama" value="<?= $nama ?>">
                <input type="hidden" name="lapangan" value="<?= $lapangan ?>">
                <input type="hidden" name="tanggal" value="<?= $tanggal ?>">
                <input type="hidden" name="jam_mulai" value="<?= $jam_mulai ?>">
                <input type="hidden" name="durasi" value="<?= $durasi ?>">
                <input type="hidden" name="total_harga" value="<?= $total_harga ?>">
                <input type="hidden" name="jumlah_bayar" value="<?= $total_harga ?>">

                <button class="btn btn-primary">
                    Lanjut ke Pembayaran
                </button>

            </form>


        </div>

    </div>

</div>

</body>
</html>