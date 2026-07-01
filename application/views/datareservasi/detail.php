<!DOCTYPE html>
<html>
<head>
    <title>Detail Reservasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background:#f5f5f5;">

<div class="container py-5">

    <div class="card shadow rounded-4">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">
                <i class="bi bi-eye"></i>
                Detail Reservasi
            </h3>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="220">Nama Pelanggan</th>
                    <td><?= $r->nama_pelanggan ?></td>
                </tr>

                <tr>
                    <th>Lapangan</th>
                    <td><?= $r->nama_lapangan ?></td>
                </tr>

                <tr>
                    <th>Tanggal</th>
                    <td><?= date('d M Y',strtotime($r->tanggal)) ?></td>
                </tr>

                <tr>
                    <th>Jam</th>
                    <td><?= substr($r->jam_mulai,0,5) ?> - <?= substr($r->jam_selesai,0,5) ?></td>
                </tr>

                <tr>
                    <th>Total Bayar</th>
                    <td>
                        <b class="text-success">
                            Rp <?= number_format($r->total_harga,0,',','.') ?>
                        </b>
                    </td>
                </tr>

                <tr>
                    <th>Status Pembayaran</th>
                    <td>

                        <?php if($r->status=="pending"){ ?>
                            <span class="badge bg-warning">Pending</span>

                        <?php }elseif($r->status=="dp"){ ?>
                            <span class="badge bg-info">DP 50%</span>

                        <?php }else{ ?>
                            <span class="badge bg-success">Lunas</span>

                        <?php } ?>

                    </td>
                </tr>

            </table>

            <a href="<?= base_url('datareservasi') ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i>
                Kembali
            </a>

        </div>

    </div>

</div>

</body>
</html>