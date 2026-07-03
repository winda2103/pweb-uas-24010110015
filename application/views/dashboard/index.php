<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">

<style>
body{
    margin:0;
    background:#f3f3f3;
    font-family:"Times New Roman", serief;
}

.sidebar{
    width:250px;
    height:100vh;
    background:linear-gradient(180deg,#3569ad,#2f67ab);
    position:fixed;
    left:0;
    top:0;
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
    width:20px;
    margin-right:12px;
}

.menu a:first-child{
    background:#0d6efd;
}

.menu a:last-child{
    margin-top:250px
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
    width:60px;
    height:60px;
    background:#0d6efd;
    color:white;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
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
    padding:20px 15px;
    gap:12px;
}

.logo-img{
    width:65px;
    height:auto;
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
    font-family:"Times New Roman";
    font-size:10px;
    color:white;
    letter-spacing:1px;
    margin-top:3px
}

.grafik-body{
    padding:20px !important;
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

</head>

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

        <a href="<?= base_url('lapangan') ?>">
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

        <a href="<?= base_url('auth/logout') ?>">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>

</div>

<div class="main" id="main">

    <div class="topbar">
        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-list fs-2 menu-toggle" id="menuToggle"></i>
            <h3 class="m-0">Dashboard</h3>
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

        <div class="row g-3">

            <div class="col-md-3">
               <div class="card card-stat">
                    <div class="card-body d-flex align-items-center">

                        <div class="icon-box me-3">
                            <i class="bi bi-calendar-check"></i>
                        </div>

                        <div>
                            <h6>Total Reservasi</h6>
                            <h2><?= $total_reservasi ?></h2>
                            <small class="text-success">+12% dari minggu lalu</small>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-stat">
                    <div class="card-body d-flex align-items-center">

                        <div class="icon-box me-3">
                            <i class="bi bi-grid"></i>
                        </div>

                        <div>
                            <h6>Lapangan</h6>
                            <h2><?= $total_lapangan ?></h2>
                            <small>Lapangan Aktif</small>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-stat">
                    <div class="card-body d-flex align-items-center">

                        <div class="icon-box me-3">
                            <i class="bi bi-person-fill"></i>
                        </div>

                        <div>
                            <h6>Reservasi</h6>
                            <h2><?= $total_reservasi ?></h2>
                            <small class="text-success">+8% dari bulan lalu</small>
                        </div>

                    </div>
                </div>
            </div>

           <div class="col-md-3">
                <div class="card card-stat">
                    <div class="card-body d-flex align-items-center">

                        <div class="icon-box me-3">
                            <i class="bi bi-cash-stack"></i>
                        </div>

                        <div>
                            <h6>Pendapatan</h6>
                           <h2>Rp<?= number_format($pendapatan, 0, ',', '.') ?></h2>
                            <small class="text-success">+15% dari bulan lalu</small>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4">

            <div class="col-md-7">
                <div class="card card-stat">
                    <div class="card-body grafik-body">

                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3>Grafik Pendapatan</h3>

                            <select class="form-select w-auto">
                                <option>Bulan Ini</option>
                            </select>
                        </div>

                        <canvas id="myChart"></canvas>

                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card card-stat">
                    <div class="card-body">

                        <div class="d-flex justify-content-between mb-4">
                            <h3>Reservasi Terbaru</h3>
                            <button class="btn btn-sm btn-outline-secondary">
                                Lihat Semua
                            </button>
                        </div>

                      <?php if(!empty($reservasi)){ ?>

                            <?php foreach($reservasi as $r){ ?>

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <div class="d-flex">
                                    <i class="bi bi-person-fill me-3 fs-5"></i>

                                    <div>
                                        <b><?= $r->nama ?></b><br>

                                        <small>
                                            <?= $r->nama_lapangan ?> •
                                            <?= date('d M Y', strtotime($r->tanggal)) ?> •
                                            <?= substr($r->jam_mulai,0,5) ?> -
                                            <?= substr($r->jam_selesai,0,5) ?>
                                        </small>
                                    </div>
                                </div>

                                <?php if($r->status == 'pending'){ ?>
                                    <span class="status-wait">Menunggu</span>
                                <?php }else{ ?>
                                    <span class="status-paid">Dibayar</span>
                                <?php } ?>

                            </div>

                            <?php } ?>

                        <?php }else{ ?>

                        <p class="text-center text-muted">
                            Belum ada data reservasi.
                        </p>

                        <?php } ?>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?= json_encode($label) ?>,
        datasets: [{
            data: <?= json_encode($nilai) ?>,
            borderColor: '#2f80ed',
            borderWidth: 3,
            pointBackgroundColor: '#2f80ed',
            pointRadius: 5,
            tension: 0.4,
            fill: false
        }]
    },
    options:{
        maintainAspectRatio:false,

        layout:{
            padding:{
                top:10,
                left:20,
                right:10,
                bottom:20
            }
        },

        plugins:{
            legend:{
                display:false
            }
        },

        scales:{
            x:{
                offset:true
            },
            y:{
                beginAtZero:true,
                ticks:{
                    callback:function(value){
                        return 'Rp' + value.toLocaleString('id-ID');
                    }
                }
            }
        }
    }
});
</script>

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