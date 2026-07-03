<!DOCTYPE html>
<html>
<head>

    <title>Reservasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

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

.badge.rounded-circle{
    width:32px;
    height:32px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:14px;
}

.lapangan-card{
    border-radius:15px;
    cursor:pointer;
    transition:.3s;
}

.lapangan-card:hover{
    transform:translateY(-3px);
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

.lapangan-card{
    width:130px;
    border:1px solid #cfcfcf;
    border-radius:10px;
    overflow:hidden;
    transition:.3s;
}

.lapangan-card img{
    width:100%;
    height:55px;
    object-fit:cover;
}

.lapangan-card .card-body{
    padding:8px;
}

.lapangan-card h6{
    font-size:15px;
    margin-bottom:2px;
}

.lapangan-card small{
    font-size:12px;
}

.row.align-items-start{
    display:flex;
    align-items:flex-start;
}

.card.shadow-sm.rounded-4.w-100{
    margin-top:0;
}

.lapangan-card{
    width:100%;
}

.lapangan-card img{
    height:80px !important;
}

.jam-btn{
    height:60px;
    font-size:14px;
    font-weight:600;
    line-height:1.2;
}

.jam-btn small{
    display:block;
    font-size:11px;
    font-weight:normal;
}

.btn-outline-danger{
    border:2px solid #ef6a6a;
    background:#fdeaea;
    color:#d9534f;
}

.btn-outline-success{
    border:2px solid #59d36a;
    background:#eefcf0;
    color:#198754;
}

.jam-btn{
    width:95px;
    height:44px;
    border-radius:6px;
    margin:5px;
    font-size:14px;
    text-align:center;
    line-height:16px;
}

.jam-btn.penuh{
    border-color:#ef6b6b;
    color:#d9534f;
}

.btn-outline-success:hover{
    background:#eefcf0;
    color:#198754;
    border-color:#59d36a;
}

.btn-outline-danger:hover{
    background:#fdeaea;
    color:#d9534f;
    border-color:#ef6a6a;
}

.menu .logout{
    margin-top:280px;
}

.flatpickr-calendar.inline{
    width:100% !important;
    max-width:100%;
    box-shadow:none;
    border:none;
}

.flatpickr-months{
    width:100%;
}

.flatpickr-days{
    width:100% !important;
}

.dayContainer{
    width:100% !important;
    min-width:100% !important;
    max-width:100% !important;
}

.flatpickr-rContainer{
    width:100% !important;
}

.flatpickr-weekdays{
    width:100% !important;
}

.flatpickr-innerContainer{
    justify-content:center;
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

            <a href="<?= base_url('lapangan') ?>">
                <i class="bi bi-grid"></i> Data Lapangan
            </a>

            <a href="<?= base_url('reservasi') ?>" class="active">
                <i class="bi bi-calendar-check"></i> Reservasi
            </a>

            <a href="<?= base_url('pembayaran') ?>">
                <i class="bi bi-wallet2"></i> Pembayaran
            </a>

            <a href="#">
                <i class="bi bi-people"></i>
                Data Reservasi
            </a>

            <a href="#">
                <i class="bi bi-file-earmark-text"></i> Laporan
            </a>

            <a href="#">
                <i class="bi bi-gear"></i> Pengaturan
            </a>

            
        </div>
         <a href="<?= site_url('auth/logout') ?>" class="logout">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>

    </div>

    <div class="main" id="main">

    <div class="topbar">

        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-list fs-2 menu-toggle" id="menuToggle"></i>
            <h3 class="m-0">Reservasi</h3>
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
                        <a href="<?= site_url('auth/logout') ?>" class="logout">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

    <div class="content">
        <div class="card bg-white shadow-sm rounded-4 border-0 p-4">

    <h3 class="fw-bold">Buat Reservasi Baru</h3>

    <p class="text-muted">
        Pilih lapangan, tanggal, dan jam untuk membuat reservasi.
    </p>

    <div class="row">

        <div class="col-md-6 mb-3">

            <label class="form-label fw-bold">Nama Pelanggan</label>

            <input type="text"
                class="form-control"
                id="nama"
                placeholder="Masukkan nama pelanggan">

        </div>

       
               
    </div>

    <div class="d-flex align-items-center mb-3" style="max-width:700px;">

        <span id="step1" class="badge bg-primary rounded-circle p-2">1</span>

        <span class="mx-1">Pilih Lapangan</span>

        <div class="flex-grow-1 border-top"></div>

       <span id="step2" class="badge bg-secondary rounded-circle p-2 ms-3">2</span>

        <span class="mx-1">Pilih Tanggal & Jam</span>

        <div class="flex-grow-1 border-top"></div>

       <span id="step3" class="badge bg-secondary rounded-circle p-2 ms-3">3</span>

        <span class="ms-1">Konfirmasi & Bayar</span>

    </div>

        <div class="row mt-2 align-items-start">

    <div class="col-md-9">

        <h5 class="mb-3">Pilih Lapangan</h5>

        <div class="row">

            <?php foreach($lapangan as $l){ ?>

            <div class="col-lg-2 col-md-4 col-6 mb-3">

                <div class="card lapangan-card"
                    data-id="<?= $l->id_lapangan ?>"
                    data-lapangan="<?= $l->nama_lapangan ?>"
                    data-harga="<?= $l->harga_per_jam ?>">

                    <img src="<?= base_url('assests/img/lapangan.jpg') ?>"
                         class="card-img-top"
                         style="height:70px;object-fit:cover;">

                    <div class="card-body text-center">

                       <h6 class="nama-lapangan"><?= $l->nama_lapangan ?></h6>

                        <small class="text-primary">
                            Rp <?= number_format($l->harga_per_jam,0,',','.') ?>/jam
                        </small>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>

    

    <div class="col-md-3 d-flex align-items-start" style="margin-top:-135px;">

        <div class="card shadow-sm rounded-4 w-100">

            <div class="card-body">

                <h5>Ringkasan Reservasi</h5>

                <hr>

               <div class="d-flex justify-content-between mb-2">
                    <b>Lapangan</b>
                    <span id="summaryLapangan">-</span>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <b>Tanggal</b>
                    <span id="summaryTanggal">-</span>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <b>Waktu</b>
                    <span id="summaryJam">-</span>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <b>Durasi</b>
                    <span id="summaryDurasi">-</span>
                </div>

                <hr>

                <div class="d-flex justify-content-between mb-2">
                    <b>Nama</b>
                    <span id="summaryNama">-</span>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <b>Total Harga</b>
                    <span id="summaryHarga" class="text-primary fw-bold">Rp 0</span>
                </div>

                <form action="<?= base_url('reservasi/konfirmasi') ?>" method="post">
                    
                    <input type="hidden" name="nama" id="nama_booking">
                    <input type="hidden" name="email" id="email_booking">
                    <input type="hidden" name="no_hp" id="nohp_booking">
                    <input type="hidden" name="alamat" id="alamat_booking">
                    <input type="hidden" name="id_lapangan" id="id_lapangan">
                    <input type="hidden" name="lapangan" id="lapangan">
                    <input type="hidden" name="tanggal" id="tanggal_booking">
                    <input type="hidden" name="jam_mulai" id="jam_booking">
                    <input type="hidden" name="durasi" id="durasi_booking">
                    <input type="hidden" name="total_harga" id="total_booking">

                    <button id="btnLanjut" class="btn btn-primary px-4">
                        Lanjutkan →
                    </button>

                </form>

            </div>

        </div>

    </div>

    <div class="card bg-white shadow-sm rounded-4 border-0 p-4 mt-4 mb-0">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <div>
            <h4 class="fw-bold">Pilih Tanggal & Jam</h4>
            <small class="text-muted">
                Pilih tanggal terlebih dahulu untuk melihat ketersediaan jam.
            </small>
        </div>

        <div>
            <label class="me-2">Durasi</label>

            <select id="durasi" class="form-select form-select-sm d-inline-block" style="width:120px;">
                <option value="1">1 Jam</option>
                <option value="2">2 Jam</option>
                <option value="3">3 Jam</option>
            </select>
        </div>

    </div>

    <div class="row">

       <div class="col-md-4">

            <div class="card shadow-sm">

                <div class="card-body p-2">

                    <input type="text" id="tanggal" class="form-control mb-2">
                </div>

            </div>

        </div>

      <div class="col-md-8">

        <div class="mb-3 fw-bold">
            <i class="bi bi-calendar3 me-2"></i>
            Senin, 22 Juni 2026
        </div>

            <div class="row g-2">

                <div class="col-md-2">
                    <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>07:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>08:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                   <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>09:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>10:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                   <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>11:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                  <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>12:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                   <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>13:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                  <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>14:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                   <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>15:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>16:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                  <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>17:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                  <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>18:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-outline-success jam-btn w-100 jam-tersedia">
                        <div>19:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-outline-danger jam-btn w-100">
                        <div>20:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-outline-danger jam-btn w-100">
                        <div>21:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-outline-danger jam-btn w-100">
                        <div>22:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-outline-danger jam-btn w-100">
                        <div>23:00</div>
                        <small>Rp 50.000</small>
                    </button>
                </div>

            </div>

        </div>
    </div>

    <div class="mt-4 border-top pt-3 ms-2">

        <div class="d-flex align-items-center">

            <i class="bi bi-info-circle text-primary me-2 fs-5"></i>

            <div>

                <b>Informasi</b><br>

                <small class="text-muted">
                    Pembatalan reservasi maksimal 2 jam sebelum jadwal bermain untuk mendapatkan refund.
                </small>

            </div>

        </div>

    </div>

</div>

</div>

</div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/id.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

let durasiPilih = "1";
let idLapangan = "";
let tanggalPilih = "";
let hargaLapangan = 0;
let jamMulai = "";

const lapangan = document.querySelectorAll('.lapangan-card');

lapangan.forEach(function(card){

    card.addEventListener('click', function(){

        lapangan.forEach(function(c){
            c.classList.remove('border-primary','border-3');
        });

        this.classList.add('border-primary','border-3');

        document.getElementById('summaryLapangan').innerHTML =
            this.dataset.lapangan;
        idLapangan = this.dataset.id;
        console.log(idLapangan);
        loadJamBooking();

        hargaLapangan = parseInt(this.dataset.harga);

        updateHarga();

        updateStep();

    });

});

flatpickr("#tanggal", {
    inline: true,
    locale: "id",
    dateFormat: "d/m/Y",
    defaultDate: "2026-06-22",
    onChange: function(selectedDates, dateStr) {

        tanggalPilih = dateStr;

        document.getElementById("summaryTanggal").innerHTML = dateStr;

        loadJamBooking();

        cekLengkap();

        updateStep();

    }
});

document.getElementById("durasi").addEventListener("change", function(){

    durasiPilih = this.value;

    document.getElementById("summaryDurasi").innerHTML =
        durasiPilih + " Jam";

    updateHarga();

    if(jamMulai != ""){

        let mulai = parseInt(jamMulai.split(":")[0]);
        let selesai = mulai + parseInt(durasiPilih);

        document.getElementById("summaryJam").innerHTML =
            jamMulai + " - " + selesai.toString().padStart(2,"0") + ":00";
    }

    updateStep();

});

function aktifkanJam(){

    $(".jam-btn").off("click").on("click", function(){

        if($(this).prop("disabled")) return;

        $(".jam-btn")
            .removeClass("btn-success")
            .addClass("btn-outline-success");

        $(this)
            .removeClass("btn-outline-success")
            .addClass("btn-success");

        jamMulai = $(this).find("div").text().trim();

        let mulai = parseInt(jamMulai.substring(0,2));
        let selesai = mulai + parseInt(durasiPilih);

        $("#summaryJam").html(
            jamMulai + " - " + selesai.toString().padStart(2,"0") + ":00"
        );

        cekLengkap();
        updateStep();

    });

}

function loadJamBooking(){

    if(idLapangan == "" || tanggalPilih == ""){
        return;
    }

    jamMulai = "";

    document.getElementById("summaryJam").innerHTML = "-";

    $(".jam-btn").removeClass("btn-success")
                .addClass("btn-outline-success")
                .prop("disabled", false);

    $.ajax({
        

        url: "<?= base_url('reservasi/getJamBooking') ?>",
        type: "POST",

        data:{
            id_lapangan:idLapangan,
            tanggal:tanggalPilih
        },

            success:function(response){

            let booking = JSON.parse(response);

            $(".jam-btn").each(function(){

                $(this)
                    .removeClass("btn-outline-danger btn-danger")
                    .addClass("btn-outline-success")
                    .prop("disabled",false);

                let jamBtn = $(this).find("div").text().trim();

                booking.forEach(function(item){

                    let mulai = parseInt(item.jam_mulai.substring(0,2));
                    let selesai = parseInt(item.jam_selesai.substring(0,2));

                    let jamSekarang = parseInt(jamBtn.substring(0,2));

                    if(jamSekarang >= mulai && jamSekarang < selesai){

                        $(this)
                            .removeClass("btn-outline-success")
                            .addClass("btn-outline-danger")
                            .prop("disabled",true);

                    }

                }.bind(this));

            });

            aktifkanJam();

        }

    });

}

function updateHarga(){

    if(hargaLapangan == 0) return;

    let total = hargaLapangan * parseInt(durasiPilih);

    document.getElementById("summaryHarga").innerHTML =
        "Rp " + total.toLocaleString("id-ID");

}

function cekLengkap(){

    let lapangan = document.getElementById("summaryLapangan").innerHTML;
    let tanggal = document.getElementById("summaryTanggal").innerHTML;
    let jam = document.getElementById("summaryJam").innerHTML;

    if(lapangan != "-" && tanggal != "-" && jam != "-"){

        let btn = document.getElementById("btnLanjut");

        btn.disabled = false;
        btn.classList.remove("btn-secondary");
        btn.classList.add("btn-primary");

    }

}

function updateStep(){

    // STEP 1
    if(idLapangan != ""){
        document.getElementById("step1").innerHTML = "✓";
        document.getElementById("step1").classList.remove("bg-primary","bg-secondary");
        document.getElementById("step1").classList.add("bg-success");
    }

    // STEP 2
    if(tanggalPilih != "" && document.getElementById("summaryJam").innerHTML != "-"){
        document.getElementById("step2").innerHTML = "✓";
        document.getElementById("step2").classList.remove("bg-primary","bg-secondary");
        document.getElementById("step2").classList.add("bg-success");
    }

}

function aktifkanJam(){

    $(".jam-btn").off("click").on("click", function(){

        if($(this).prop("disabled")) return;

        $(".jam-btn")
            .removeClass("btn-success")
            .addClass("btn-outline-success");

        $(this)
            .removeClass("btn-outline-success")
            .addClass("btn-success");

        jamMulai = $(this).find("div").text().trim();

        let mulai = parseInt(jamMulai.substring(0,2));
        let selesai = mulai + parseInt(durasiPilih);

        $("#summaryJam").html(
            jamMulai + " - " + selesai.toString().padStart(2,"0") + ":00"
        );

        cekLengkap();
        updateStep();

    });

}

document.getElementById("btnLanjut").addEventListener("click", function(){

    document.getElementById("summaryNama").innerHTML =
    document.getElementById("nama").value;

    document.getElementById("nama_booking").value =
    document.getElementById("nama").value;
    
    document.getElementById("id_lapangan").value = idLapangan;

    document.getElementById("lapangan").value =
    document.getElementById("summaryLapangan").innerHTML;

    document.getElementById("tanggal_booking").value =
    document.getElementById("summaryTanggal").innerHTML;

    document.getElementById("jam_booking").value = jamMulai;

    document.getElementById("durasi_booking").value =
        durasiPilih;

    document.getElementById("total_booking").value =
        hargaLapangan * parseInt(durasiPilih);

});

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