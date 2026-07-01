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

.list-group-item{
    border:none;
    color:#333;
    padding:12px 18px;
}

.list-group-item:hover{
    background:#0d6efd;
    color:white;
}

.list-group-item.active{
    background:#0d6efd;
    color:white;
    border:none;
}

</style>

<body>

    <div class="sidebar">

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

            <a href="<?= base_url('datareservasi') ?>" >
                <i class="bi bi-people"></i>
                Data Reservasi
            </a>

            <a href="<?= base_url('laporan') ?>">
                <i class="bi bi-file-earmark-text"></i>
                Laporan
            </a>

            <a href="<?= base_url('pengaturan') ?>" class="active">
                <i class="bi bi-gear"></i> Pengaturan
            </a>

            

       </div>
        <a href="<?= base_url('auth/logout') ?>" class="logout">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>


    </div>

    <div class="main">

        <div class="topbar">

            <div class="d-flex align-items-center gap-3">
                <i class="bi bi-list fs-2"></i>
                <h3 class="m-0">Pengaturan</h3>
            </div>

            <div class="topbar-right">

            <!-- Lonceng -->
            <div class="dropdown">

                <i class="bi bi-bell fs-5"
                    role="button"
                    data-bs-toggle="dropdown">\
                </i>

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

    <?php if($this->session->flashdata('error')){ ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php } ?>

    <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php } ?>

    <div class="row">

        <div class="col-md-7">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h4 class="mb-4">
                        <i class="bi bi-person-circle"></i>
                        Profil Admin
                    </h4>

                    <form method="post" action="<?= base_url('pengaturan/simpan') ?>">

                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   value="<?= $user->nama ?>">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="<?= $user->email ?>">
                        </div>

                        <div class="mb-3">
                            <label>Password Baru</label>
                            <input type="password"
                                   name="password"
                                   class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Konfirmasi Password</label>
                            <input type="password"
                                   name="konfirmasi"
                                   class="form-control">
                        </div>

                        <button class="btn btn-primary">
                            <i class="bi bi-save"></i>
                            Simpan
                        </button>

                    </form>

                </div>

            </div>

        </div>

        <div class="col-md-5">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h4>
                        <i class="bi bi-info-circle"></i>
                        Informasi Sistem
                    </h4>

                    <table class="table table-borderless">

                        <tr>
                            <td>Nama Sistem</td>
                            <td>Badminton Reservasi</td>
                        </tr>

                        <tr>
                            <td>Versi</td>
                            <td>1.0.0</td>
                        </tr>

                        <tr>
                            <td>Nama Admin</td>
                            <td><?= $user->nama ?></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><?= $user->email ?></td>
                        </tr>

                        <tr>
                            <td>Role</td>
                            <td><?= ucfirst($user->role) ?></td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>