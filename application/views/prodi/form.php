<div class="card shadow border-0">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0 fw-bold"><?php echo $button ?> Program Studi</h5>
    </div>

    <div class="card-body">
        <form action="<?php echo $action ?>" method="post">

            <!-- Fakultas -->
            <div class="mb-3">
                <label class="form-label fw-bold">Fakultas</label>
                <select name="fakultas_id" class="form-control">
                    <option value="">-- Pilih Fakultas --</option>
                    <?php foreach ($fakultas as $f): ?>
                        <option value="<?php echo $f['fakultas_id'] ?>"
                            <?php echo ($prodi && $prodi['fakultas_id'] == $f['fakultas_id']) ? 'selected' : '' ?>>
                            <?php echo $f['fakultas_name'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <small class="text-danger"><?php echo form_error('fakultas_id') ?></small>
            </div>

            <!-- Nama Prodi -->
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Program Studi</label>
                <input type="text" name="prodi_name" class="form-control"
                    value="<?php echo $prodi ? $prodi['prodi_name'] : '' ?>"
                    placeholder="Masukkan nama program studi">
                <small class="text-danger"><?php echo form_error('prodi_name') ?></small>
            </div>

            <!-- Strata -->
            <div class="mb-3">
                <label class="form-label fw-bold">Strata</label>
                <select name="prodi_strata" class="form-control">
                    <option value="">-- Pilih Strata --</option>
                    <option value="D3" <?php echo ($prodi && $prodi['prodi_strata'] == 'D3') ? 'selected' : '' ?>>D3</option>
                    <option value="S1" <?php echo ($prodi && $prodi['prodi_strata'] == 'S1') ? 'selected' : '' ?>>S1</option>
                    <option value="S2" <?php echo ($prodi && $prodi['prodi_strata'] == 'S2') ? 'selected' : '' ?>>S2</option>
                    <option value="S3" <?php echo ($prodi && $prodi['prodi_strata'] == 'S3') ? 'selected' : '' ?>>S3</option>
                </select>
                <small class="text-danger"><?php echo form_error('prodi_strata') ?></small>
            </div>

            <!-- Tombol -->
            <div class="d-flex justify-content-between">
                <a href="<?php echo base_url('prodi') ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success"><?php echo $button ?></button>
            </div>

        </form>
    </div>
</div>