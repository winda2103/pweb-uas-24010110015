<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Lapangan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f5f5f5;">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4>Edit Lapangan</h4>
        </div>

        <div class="card-body">

            <form action="<?= base_url('lapangan/update') ?>" method="post">

                <input type="hidden" name="id_lapangan" value="<?= $lapangan->id_lapangan ?>">

                <div class="mb-3">
                    <label class="form-label">Nama Lapangan</label>
                    <input type="text"
                           name="nama_lapangan"
                           class="form-control"
                           value="<?= $lapangan->nama_lapangan ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga per Jam</label>
                    <input type="number"
                           name="harga_per_jam"
                           class="form-control"
                           value="<?= $lapangan->harga_per_jam ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>

                    <select name="status" class="form-select">
                        <option value="aktif" <?= $lapangan->status=='aktif'?'selected':''; ?>>Aktif</option>
                        <option value="nonaktif" <?= $lapangan->status=='nonaktif'?'selected':''; ?>>Nonaktif</option>
                        <option value="perawatan" <?= $lapangan->status=='perawatan'?'selected':''; ?>>Perawatan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="<?= base_url('lapangan') ?>" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>