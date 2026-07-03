<!DOCTYPE html>
<html>
<head>
    <title>Data Lapangan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">

</head>

<style>

body{
    margin:0;
    background:#f3f3f3;
}

.sidebar{
    width:250px;
    height:100vh;
    position:fixed;
    left:0;
    top:0;
    background:linear-gradient(180deg,#3569ad,#2f67ab);
    color:white;

    display:flex;
    flex-direction:column;
}

.main-content{
    margin-left:250px;
}

.topbar{
    background:#fff;
    height:70px;
    padding:20px;
    font-size:32px;
    font-weight:bold;
}

.card-box{
    background:#fff;
    border-radius:15px;
    padding:20px;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
}

.main{
    margin-left:250px;
}

.content{
    padding:30px;
}

.menu{
    flex:1;
    display:flex;
    flex-direction:column;
    margin-top:10px;
}

.sidebar{
    width:250px;
    height:100vh;
    background:linear-gradient(180deg,#3569ad,#2f67ab);
    position:fixed;
    color:white;
}

.menu a{
    display:flex;
    align-items:center;
    gap:16px;
    color:white;
    text-decoration:none;
    padding:4px 20px;
    font-size:18px;
    border-radius:12px;
    margin:2px 10px;
    font-family:"Times New Roman", serief;
}

.menu a i{
    font-size:20px;
    width:22px;
    margin-right:12px;
}

.menu a.active{
    background:#0d6efd;
    border-radius:12px;
}

.menu a:hover{
    background:#0d6efd;
}

.sidebar img{
    display:block;
    margin:20px auto 10px;
}

.sidebar h3,
.sidebar p{
    text-align:center;
    color:white;
    margin:0;
}

.card-stat{
    border:none;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,.08);
}

.topbar{
    background:white;
    height:70px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 30px;
    box-shadow:0 2px 10px rgba(0,0,0,.05);
}

.logo{
    width:70px;
    margin-bottom:10px;
}

.logo-title{
    text-align:center;
}

.logo-title h3{
    font-size:18px;
    margin:0;
    font-weight:bold;
}

.logo-title .reservasi{
    color:#1f2fff;
}

.logo-title p{
    font-size:12px;
    margin:0;
}

.icon-box{
    width:50px;
    height:50px;
    background:#0d6efd;
    color:white;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
}

#myChart{
    height:280px !important;
}

.topbar-right{
    display:flex;
    align-items:center;
    gap:16px;
}

.topbar-right i{
    font-size:24px;
}

.admin-info{
    display:flex;
    flex-direction:column;
    line-height:1.2;
}

.admin-info strong{
    font-size:15px;
    font-weight:600;
}

.admin-info small{
    font-size:12px;
    color:#666;
}

.bi-chevron-down{
    font-size:12px !important;
}

.card-stat .card-body{
    min-height:120px;
    padding:18px;
}

.sidebar .text-center{
    margin-top:20px !important;
    margin-bottom:25px !important;
}

.sidebar h4{
    font-size:16px;
    margin:0;
}

.sidebar small{
    font-size:12px;
}

.admin-info strong{
    font-size:14px;
}

.admin-info small{
    font-size:11px;
}

.admin-info{
    line-height:1.1;
}

.card-stat{
    height:100%;
}

.card-body{
    padding:20px;
}

.status-wait,
.status-paid{
    width:90px;
    height:35px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:8px;
    font-size:13px;
    font-weight:500;
}

.status-wait{
    background:#ffe94d;
    color:#333;
}

.status-paid{
    background:#2ee6b8;
    color:#333;
}

.logo-header{
    display:flex;
    align-items:center;
    gap:12px;
    padding:18px 18px;
}

.logo-img{
    width:60px;
    height:60px;
}

.logo-badminton{
    font-family:'Irish Grover', cursive;
    font-size:26px;
    color:#fff;
    line-height:1;
}

.logo-reservasi{
    font-family:'Irish Grover', cursive;
    font-size:26px;
    color:#2b2cff;
    line-height:1;
}

.logo-admin{
    font-size:10px;
    color:#fff;
    letter-spacing:1px;
}

.grafik-body{
    padding:20px !important;
}

body{
    margin:0;
    background:#f3f3f3;
    font-family:"Times New Roman", serief;
}

.content{
    padding:30px;
}

.card-stat{
    border:none;
    border-radius:15px;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
}

.icon-box{
    width:60px;
    height:60px;
    background:#0d6efd;
    color:white;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:26px;
}

.table-card{
    background:white;
    border-radius:15px;
    padding:25px;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
}

.status{
    display:inline-block;
    min-width:90px;
    text-align:center;
    border-radius:5px;
    padding:5px 12px;
    font-size:13px;
    font-weight:600;
}

.status-aktif{
    background:#d1f7d6;
    border:1px solid #28a745;
    color:#198754;
}

.status-perawatan{
    background:#ffe7b3;
    border:1px solid #ff9800;
    color:#e67e22;
}

.status-nonaktif{
    background:#ffd6d6;
    border:1px solid #dc3545;
    color:#dc3545;
}


.table th{
    background:#f5f5f5;
}

.table td{
    vertical-align:middle;
}

.table{
    border-radius:10px;
    overflow:hidden;
}

.menu .logout{
    margin-top:250px;
}

.sidebar.hide{
    left:-250px;
    transition:0.3s;
}

.main.full{
    margin-left:0;
    transition:0.3s;
}

.sidebar,
.main{
    transition:0.3s;
}

.menu-toggle{
    cursor:pointer;
}

</style>

<body>

<div class="sidebar" id="sidebar">

   <div class="logo-header">

        <img src="<?= base_url('assests/img/Vector.png') ?>" class="logo-img">

        <div class="logo-text">
            <div class="logo-badminton">BADMINTON</div>
            <div class="logo-reservasi">RESERVASI</div>
            <div class="logo-admin">ADMIN PANEL</div>
        </div>

    </div>

    <div class="menu">
        <a href="<?= base_url('dashboard') ?>">
            <i class="bi bi-house"></i> Dashboard
        </a>
        <a href="<?= base_url('lapangan') ?>" class="active">
            <i class="bi bi-grid"></i> Data Lapangan
        </a>
        <a href="<?= base_url('reservasi') ?>">
            <i class="bi bi-calendar-check"></i> Reservasi
        </a>
        <a href="#"><i class="bi bi-wallet2"></i> Pembayaran</a>
        <a href="#">
            <i class="bi bi-people"></i>
            Data Reservasi
        </a>
        <a href="#"><i class="bi bi-file-earmark-text"></i> Laporan</a>
        <a href="#"><i class="bi bi-gear"></i> Pengaturan</a>
        <a href="<?= base_url('auth/logout') ?>" class="logout">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>

</div>

<div class="main" id="main">

    <div class="topbar">
        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-list fs-2 menu-toggle" id="menuToggle"></i>
            <h3 class="m-0">Data Lapangan</h3>
        </div>

       <div class="topbar-right">

            <div class="dropdown">

                <i class="bi bi-bell fs-5"
                role="button"
                data-bs-toggle="dropdown"></i>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li><h6 class="dropdown-header">Notifikasi</h6></li>

                    <?php if(!empty($notifikasi)){ ?>

                        <?php foreach($notifikasi as $n){ ?>

                        <li>
                            <a class="dropdown-item" href="#">
                                Reservasi baru dari <b><?= $n->nama ?></b><br>
                                <small><?= $n->nama_lapangan ?> - <?= substr($n->jam_mulai,0,5) ?></small>
                            </a>
                        </li>

                        <?php } ?>

                    <?php }else{ ?>

                        <li>
                            <span class="dropdown-item text-muted">
                                Belum ada notifikasi
                            </span>
                        </li>

                    <?php } ?>

                </ul>
            </div>

           <div class="dropdown">

            <a href="#" class="d-flex align-items-center text-decoration-none text-dark"
            data-bs-toggle="dropdown" aria-expanded="false">

                <i class="bi bi-person-fill fs-5 me-2"></i>

                <div class="admin-info me-2">
                    <strong>Admin</strong>
                    <small>Administrator</small>
                </div>

                <i class="bi bi-chevron-down"></i>

            </a>

            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-person me-2"></i>Profil
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-key me-2"></i>Ubah Password
                    </a>
                </li>

                <li><hr class="dropdown-divider"></li>

                <li>
                    <a class="dropdown-item text-danger" href="<?= base_url('auth/logout') ?>">
                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                    </a>
                </li>
            </ul>

        </div>

        </div>
    </div>

<div class="content">

<div class="row g-3">

    <div class="col-md-3">
        <div class="card card-stat">
            <div class="card-body d-flex align-items-center">

                <div class="icon-box me-3">
                    <i class="bi bi-grid"></i>
                </div>

                <div>
                    <h6>Total Lapangan</h6>
                    <h3><?= $total ?></h3>
                    <small>Lapangan</small>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-stat">
            <div class="card-body d-flex align-items-center">

                <div class="icon-box bg-success me-3">
                    <i class="bi bi-check-circle"></i>
                </div>

                <div>
                    <h6>Lapangan Aktif</h6>
                    <h3><?= $aktif ?></h3>
                    <small>Aktif</small>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-stat">
            <div class="card-body d-flex align-items-center">

                <div class="icon-box bg-warning me-3">
                    <i class="bi bi-tools"></i>
                </div>

                <div>
                    <h6>Dalam Perawatan</h6>
                    <h3><?= $perawatan ?></h3>
                    <small>Tidak tersedia</small>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-stat">
            <div class="card-body d-flex align-items-center">

                <div class="icon-box bg-danger me-3">
                    <i class="bi bi-x-circle"></i>
                </div>

                <div>
                    <h6>Nonaktif</h6>
                    <h3><?= $nonaktif ?></h3>
                    <small>Tidak aktif</small>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="table-card mt-4">
    <form method="get" action="<?= base_url('lapangan') ?>">

    <div class="row">

        <div class="col-md-3">
            <label>Filter & Pencarian</label>

            <input type="text"
            name="cari"
            id="cari"
            class="form-control"
            placeholder="Cari nama lapangan..."
            value="<?= $this->input->get('cari'); ?>">
        </div>

        <div class="col-md-2">
            <label>Status</label>

            <select name="status" class="form-select">
            <option value="">Semua Status</option>
            <option value="aktif" <?= ($this->input->get('status')=='aktif')?'selected':''; ?>>Aktif</option>
            <option value="nonaktif" <?= ($this->input->get('status')=='nonaktif')?'selected':''; ?>>Nonaktif</option>
            <option value="perawatan" <?= ($this->input->get('status')=='perawatan')?'selected':''; ?>>Perawatan</option>
        </select>

        </div>

       <div class="col-md-2 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-funnel"></i> Filter
            </button>
        </div>

        <div class="col-md-5 text-end d-flex align-items-end justify-content-end">

            <a href="<?= base_url('lapangan/tambah') ?>" class="btn btn-primary">
                <i class="bi bi-plus"></i> Tambah Lapangan
            </a>
        </div>

    </div>
    </form>

</div>

<div class="table-card mt-4">


    <table class="table table-bordered table-hover">

        <thead class="table-light">

        <tr>
            <th>No</th>
            <th>Nama Lapangan</th>
            <th>Harga Sewa (1 jam)</th>
            <th>Jam Operasional</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        </thead>

        <tbody>

        <?php
        $no=1;
        foreach($lapangan as $l){
        ?>

       <tr>

            <td><?= $no++ ?></td>

            <td><?= $l->nama_lapangan ?></td>

            <td class="text-primary">
                Rp <?= number_format($l->harga_per_jam,0,',','.') ?>
            </td>

            <td>07:00 - 23:00</td>

            <td>
                <span class="status status-<?= strtolower($l->status) ?>">
                    <?= ucfirst($l->status) ?>
                </span>
            </td>

            <td>

                <a href="<?= base_url('lapangan/edit/'.$l->id_lapangan) ?>"
                class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-pencil"></i>
                </a>

                <a href="<?= base_url('lapangan/hapus/'.$l->id_lapangan) ?>"
                class="btn btn-outline-danger btn-sm"
                onclick="return confirm('Hapus data?')">
                    <i class="bi bi-trash"></i>
                </a>

            </td>

        </tr>

        <?php } ?>

        </tbody>

    </table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

<script>
const menu = document.getElementById("menuToggle");
const sidebar = document.getElementById("sidebar");
const main = document.getElementById("main");

menu.addEventListener("click", function(){
    sidebar.classList.toggle("hide");
    main.classList.toggle("full");
});
</script>
</body>
</html>