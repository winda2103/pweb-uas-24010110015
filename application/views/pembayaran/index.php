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
.card{
    border:none;
    border-radius:14px;
    box-shadow:0 2px 8px rgba(0,0,0,.08);
}

.card-body{
    padding:20px;
}

.payment-card{
    display:flex;
    justify-content:space-between;
    align-items:center;
    border:1px solid #d9d9d9;
    border-radius:10px;
    padding:10px 12px;
    margin-bottom:10px;
    cursor:pointer;
    transition:.2s;
}

.payment-card:hover{
    border-color:#0d6efd;
}

.payment-left{
    display:flex;
    align-items:center;
    gap:18px;
}

.payment-icon{
    width:34px;
    height:36px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:22px;
    color:#0d6efd;
}

.payment-info h5{
    margin:0;
    font-size:18px;
    font-weight:bold;
    margin-bottom: 2px;
}

.payment-info small{
    color:#666;
    font-size:13px;
}

.payment-card input{
    width:18px;
    height:18px;
}

.btn-primary{

    border-radius:8px;

    height:46px;

    font-size:16px;

    font-weight:600;

}

.table{
    margin-bottom:0;
}

.table th,
.table td{
    font-size:15px;
    padding:2px 0;     
    line-height:1.3;   
    vertical-align:middle;
}

.table th{
    width:150px;
    font-weight:600;
}

.col-md-5 .card-body{
    font-size:15px;
}

.col-md-5 h3{
    font-size:24px;
}


.summary-content{
    flex:1;
}

.btn-konfirmasi{
    margin-top:auto;
}

.summary-card{
    border-radius:16px;
    box-shadow:0 2px 10px rgba(0,0,0,.08);
    min-height:550px;
}

.summary-card .card-body{
    padding:28px;
    display: flex;
    flex-direction:column;
    height:100%;
}

.summary-card h3{
    font-size:28px;
    font-weight:bold;
    margin-bottom:18px;
}

.summary-card .d-flex{
    margin-bottom:14px !important;
}

.summary-card hr{
    margin:16px 0;
}

.summary-card .alert{
    margin-top:18px;
    margin-bottom:20px;
    padding:12px 16px;
}

.summary-card .btn{
    height:50px;
    border-radius:8px;
    font-size:18px;
    font-weight:600;
}

.btn-konfirmasi{
    margin-top:auto;
}

.summary-table th,
.summary-table td{
    font-size:15px;
    padding:8px 0;
    line-height:0.9;
}

.summary-table th{
    width:170px;
    font-weight:600;
}

.summary-table td{
    text-align:right;
    font-weight:600;
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

           <a href="<?= base_url('pembayaran') ?>" class="active" >
                <i class="bi bi-wallet2"></i>
                Pembayaran
            </a>

            <a href="<?= base_url('datareservasi') ?>" >
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
        <form action="<?= base_url('pembayaran/simpan') ?>" method="post">

            <input type="hidden" name="id_reservasi" value="<?= $id_reservasi ?>">
            <input type="hidden" id="jumlahBayarInput" name="jumlah_bayar" value="<?= $total_harga/2 ?>">

            <?= $id_reservasi ?>

            <div class="row">

    <!-- KIRI -->
    <div class="col-md-7">

        <!-- Detail -->
        <div class="card mb-4">
            <div class="card-body">

                <h3 class="fw-bold mb-4">Detail Reservasi</h3>

                <div class="row">

                    <div class="col-md-4">
                        <img src="<?= base_url('assests/img/lapangan.jpg') ?>"
                            style="width:160px;height:110px;object-fit:cover;border-radius:10px;">
                    </div>

                    <div class="col-md-8">

                        <table class="table table-borderless">

                            <tr>
                                <th>Nama Pelanggan</th>
                                <td><?= $nama ?></td>
                            </tr>

                            <tr>
                                <th>Lapangan</th>
                                <td><?= $lapangan ?></td>
                            </tr>

                            <tr>
                                <th>Tanggal</th>
                                <td><?= $tanggal ?></td>
                            </tr>

                            <tr>
                                <th>Waktu</th>
                                <td><?= $jam_mulai ?></td>
                            </tr>

                            <tr>
                                <th>Durasi</th>
                                <td><?= $durasi ?> Jam</td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>
        </div>

        <!-- Metode Pembayaran -->
        <div class="card">

            <div class="card-body">

                <h3 class="fw-bold mb-4">
                    Metode Pembayaran
                </h3>

                <label class="payment-card">

                    <div class="payment-left">

                        <div class="payment-icon">
                            <i class="bi bi-credit-card"></i>
                        </div>

                        <div class="payment-info">
                            <h5>Transfer Bank</h5>
                            <small>Transfer ke rekening bank yang tersedia</small>
                        </div>

                    </div>

                    <input type="radio"
                        name="metode_pembayaran"
                        value="Transfer Bank"
                        checked>

                </label>

                <label class="payment-card">

                    <div class="payment-left">

                        <div class="payment-icon">
                            <i class="bi bi-qr-code"></i>
                        </div>

                        <div class="payment-info">
                            <h5>QRIS</h5>
                            <small>Scan QR Code untuk pembayaran</small>
                        </div>

                    </div>

                    <input type="radio"
                        name="metode_pembayaran"
                        value="QRIS">

                </label>

                <label class="payment-card">

                    <div class="payment-left">

                        <div class="payment-icon">
                            <i class="bi bi-cash"></i>
                        </div>

                        <div class="payment-info">
                            <h5>Tunai</h5>
                            <small>Bayar langsung di tempat</small>
                        </div>

                    </div>

                    <input type="radio"
                        name="metode_pembayaran"
                        value="Tunai">

                </label>

                <hr>

                <h5 class="fw-bold mt-3">Jenis Pembayaran</h5>

                <div class="form-check mt-3">
                    <input class="form-check-input"
                        type="radio"
                        name="status_bayar"
                        id="dp"
                        value="dp"
                        checked>

                    <label class="form-check-label" for="dp">
                        DP 50%
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input"
                        type="radio"
                        name="status_bayar"
                        id="lunas"
                        value="lunas">

                    <label class="form-check-label" for="lunas">
                        Bayar Lunas
                    </label>
                </div>
            </div>

        </div>

    </div>

    <!-- KANAN -->
    <div class="col-md-5">

        <div class="card summary-card">
            <div class="card-body">

                <div class="summary-content">

                    <h3 class="fw-bold mb-4">Ringkasan Pembayaran</h3>

                   <table class="table table-borderless summary-table">

                        <tr>
                            <th>Nama</th>
                            <td><?= $nama ?></td>
                        </tr>

                        <tr>
                            <th>Lapangan</th>
                            <td><?= $lapangan ?></td>
                        </tr>

                        <tr>
                            <th>Tanggal</th>
                            <td><?= $tanggal ?></td>
                        </tr>

                        <tr>
                            <th>Waktu</th>
                            <td><?= $jam_mulai ?></td>
                        </tr>

                        <tr>
                            <th>Durasi</th>
                            <td><?= $durasi ?> Jam</td>
                        </tr>

                    </table>

                    <?php
                    $hargaPerJam = ($durasi > 0) ? $total_harga / $durasi : 0;
                    ?>

                    <table class="table table-borderless summary-table">

                        <tr>
                            <th>Harga Sewa (1 Jam)</th>
                            <td>Rp <?= number_format($hargaPerJam,0,',','.') ?></td>
                        </tr>

                        <tr>
                            <th>Subtotal</th>
                            <td>Rp <?= number_format($total_harga,0,',','.') ?></td>
                        </tr>

                        <tr>
                            <th>Jumlah Bayar</th>
                            <td id="jumlahBayar">
                                Rp <?= number_format($total_harga/2,0,',','.') ?>
                            </td>
                        </tr>

                        </table>

                    <hr>

                    <div class="alert alert-success d-flex align-items-center">
                        <i class="bi bi-cash me-2"></i>
                        <strong>
                            Metode pembayaran:
                            <span id="metodeText">Transfer Bank</span>
                        </strong>
                    </div>

                

                    <button class="btn btn-primary w-100 btn-konfirmasi" style="margin-top:110px">
                        <i class="bi bi-check-circle"></i>
                        Konfirmasi Pembayaran
                    </button>
                </div>

            </div>
        </div>

    </div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

<script>
const radios = document.querySelectorAll('input[name="metode_pembayaran"]');
const metode = document.getElementById('metodeText');

radios.forEach(radio=>{
    radio.addEventListener('change',function(){
        metode.innerHTML=this.value;
    });
});
</script>

<script>

const total = <?= $total_harga ?>;

const jumlah = document.getElementById("jumlahBayar");
const inputJumlah = document.getElementById("jumlahBayarInput");

document.querySelectorAll('input[name="status_bayar"]').forEach(function(r){

    r.addEventListener("change", function(){

        if(this.value == "dp"){

            jumlah.innerHTML = "Rp " + (total/2).toLocaleString('id-ID');
            inputJumlah.value = total/2;

        }else{

            jumlah.innerHTML = "Rp " + total.toLocaleString('id-ID');
            inputJumlah.value = total;

        }

    });

});



</script>

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