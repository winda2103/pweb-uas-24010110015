<!DOCTYPE html>
<html>
<head>

    <title>Pembayaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">

</head>

<style>

body{
    margin:0;
    background:#f5f5f5;
    font-family:"Times New Roman",serif;
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

.main{
    margin-left:250px;
}

.logo-header{
    display:flex;
    align-items:center;
    gap:12px;
    padding:18px;
}

.logo-img{
    width:65px;
}

.logo-badminton{
   font-family:'Irish Grover', cursive;
    font-size: 26px;
    color:white;
    line-height:1;
}

.logo-reservasi{
    font-family:'Irish Grover', cursive;
    font-size:26px;
    color:#1f2fff;
    line-height:1;
}

.logo-admin{
    color:white;
    font-size:10px;
}

.menu{
    margin-top:15px;
    flex:1;
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



.topbar{
    height:70px;
    background:white;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 30px;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
}

.topbar-right{
    display:flex;
    align-items:center;
    gap:20px;
}

.admin-info{
    display:flex;
    flex-direction:column;
    line-height:1.2;
}

.admin-info strong{
    font-size:14px;
}

.admin-info small{
    font-size:11px;
    color:#666;
}

.content{
    padding:30px;
}

.logout{
    margin-top:auto;
    display:flex;
    align-items:center;
    gap:16px;
    color:white;
    text-decoration:none;
    padding:8px 20px;
    margin-left:10px;
    margin-right:10px;
    margin-bottom:20px;
    font-size:18px;
    font-family:"Times New Roman", serif;
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

            <div>

                <div class="logo-badminton">BADMINTON</div>
                <div class="logo-reservasi">RESERVASI</div>
                <div class="logo-admin">ADMIN PANEL</div>

            </div>

        </div>

        <div class="menu">

            <a href="<?= base_url('dashboard') ?>">
                <i class="bi bi-house"></i>
                Dashboard
            </a>

            <a href="<?= base_url('lapangan') ?>">
                <i class="bi bi-grid"></i>
                Data Lapangan
            </a>

            <a href="<?= base_url('reservasi') ?>">
                <i class="bi bi-calendar-check"></i>
                Reservasi
            </a>

           <a href="<?= base_url('pembayaran') ?>" >
                <i class="bi bi-wallet2"></i>
                Pembayaran
            </a>

            <a href="<?= base_url('datareservasi') ?>" class="active">
                <i class="bi bi-people"></i>
                Data Reservasi
            </a>

            <a href="<?= base_url('laporan') ?>">
                <i class="bi bi-file-earmark-text"></i>
                Laporan
            </a>

            <a href="#">
                <i class="bi bi-gear"></i> Pengaturan
            </a>

            

       </div>
        <a href="<?= base_url('auth/logout') ?>" class="logout">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>


    </div>

   <div class="main" id="main">

        <div class="topbar">

                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-list fs-2 menu-toggle" id="menuToggle"></i>
                    <h3 class="m-0">Data Reservasi</h3>
                </div>

                <div class="topbar-right">

                    <!-- Lonceng -->
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
                                        <small><?= $n->nama_lapangan ?></small>
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

                    <!-- Administrator -->
                    <div class="dropdown">

                        <div class="d-flex align-items-center"
                            role="button"
                            data-bs-toggle="dropdown">

                            <i class="bi bi-person-fill fs-5 me-2"></i>

                            <div class="admin-info me-2">
                                <strong>Admin</strong>
                                <small>Administrator</small>
                            </div>

                            <i class="bi bi-chevron-down"></i>

                        </div>

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
                                <a class="dropdown-item text-danger"
                                href="<?= base_url('auth/logout') ?>">
                                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

    
        <div class="content">

            <div class="d-flex justify-content-end mb-4">

                <form method="get" action="<?= base_url('datareservasi') ?>">

                    <div class="input-group" style="width:300px;">

                        <input
                            type="text"
                            name="cari"
                            class="form-control"
                            placeholder="Cari Reservasi..."
                            value="<?= $this->input->get('cari') ?>">

                        <button class="input-group-text bg-white">
                            <i class="bi bi-search"></i>
                        </button>

                    </div>

                </form>

            </div>

            <div class="card shadow-sm border-0">

                <div class="card-body p-0">

                    <table class="table table-bordered align-middle text-center mb-0">

                        <thead class="table-light">

                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Lapangan</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                       <tbody>

                            <?php
                            $no = 1;
                            foreach($reservasi as $r){
                            ?>

                            <tr>

                                <td><?= $no++ ?></td>
                                <td><?= $r->nama_pelanggan ?></td>
                                <td><?= $r->lapangan ?></td>
                                <td><?= date('d M Y',strtotime($r->tanggal)) ?></td>
                                <td><?= substr($r->jam_mulai,0,5) ?> - <?= substr($r->jam_selesai,0,5) ?></td>
                                <td>Rp <?= number_format($r->jumlah_bayar,0,',','.') ?></td>
                                <td><?= ucfirst($r->status) ?></td>

                                <td>

                                    <a href="<?= base_url('datareservasi/detail/'.$r->id_reservasi) ?>" class="btn btn-sm btn-primary">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <?php if($r->status == 'dp'){ ?>

                                        <a href="<?= base_url('datareservasi/lunasi/'.$r->id_reservasi) ?>"
                                        class="btn btn-sm btn-success"
                                        onclick="return confirm('Yakin ingin melunasi pembayaran?')">
                                            Lunasi
                                        </a>

                                    <?php } ?>

                                    <a href="<?= base_url('datareservasi/hapus/'.$r->id_reservasi) ?>"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="bi bi-trash"></i>
                                    </a>

                                </td>
                                

                            </tr>

                            <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
    </div>

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