<!DOCTYPE html>
<html>
<head>
    <title>Tambah Lapangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h3>Tambah Lapangan</h3>

<form method="post" action="<?= base_url('lapangan/simpan') ?>">

<div class="mb-3">
<label>Nama Lapangan</label>
<input type="text" name="nama_lapangan" class="form-control" required>
</div>

<div class="mb-3">
<label>Harga per Jam</label>
<input type="number" name="harga_per_jam" class="form-control" required>
</div>

<div class="mb-3">
<label>Status</label>

<select name="status" class="form-select">
    <option value="aktif">Aktif</option>
    <option value="nonaktif">Nonaktif</option>
</select>

</div>

<button class="btn btn-primary">Simpan</button>

<a href="<?= base_url('lapangan') ?>" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</body>
</html>