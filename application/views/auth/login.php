<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    min-height:100vh;
    background:url('<?= base_url("assests/img/bg-badminton.jpg") ?>');
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
}

.overlay{
    min-height:100vh;
    background:rgba(0,60,180,0.35);
}

.login-wrapper{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:40px 80px;
}

.left-content{
    width:50%;
    color:white;
}

.logo{
    width:130px;
    margin-bottom:5px;
}

.badminton{
    font-size:58px;
    font-family:"Irish Grover", cursive;
    font-weight:bold;
    line-height:0.9;
}

.reservasi{
    font-size:58px;
    font-family:"Irish Grover", cursive;
    font-weight:bold;
    color:#1f2fff;
    line-height:0.9;
}

.admin-panel{
    font-size:16px;
    font-family:"Times New Roman";
    font-weight:bold;
    margin-top:0;
}

.welcome{
    margin-top:140px;
}

.welcome h2{
    font-size:24px;
    font-weight:bold;
    line-height:1.1;
}

.welcome p{
    width:350px;
    font-size:14px;
    line-height:1.6;
}

.login-card{
    width:500px;
    background:#fff;
    border-radius:20px;
    padding:50px;
    box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.login-icon{
    text-align:center;
    font-size:55px;
    color:#0d6efd;
}

.login-icon {
    text-align: center;
    margin-bottom:15px;
}

.login-icon svg{
   font-size: 70px;
   color: #0d6efd;

}

.login-title{
    text-align:center;
    font-family:"Times New Roman";
    font-size:28px;
    font-weight:bold;
}

.login-subtitle{
    text-align:center;
    margin-bottom:20px;
}

.form-control{
    height:50px;
}

.btn-login{
    width:100%;
    height:50px;
    background:#0d6efd;
    color:white;
    border:none;
    border-radius:8px;
    font-weight:bold;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:12px;
}

.btn-login i{
    font-size:22px;
}

.overlay {
    min-height:100vh;
    background:rbga(0,70,180,0,45);
}

.security-info{
    display:flex;
    align-items:center;
    gap:15px;
    margin-top:70px;
}

.security-info img{
    width:45px;
}

.security-info h6{
    margin:0;
    font-size:16px;
    font-weight:bold;
}

.security-info p{
    margin:0;
    font-size:13px;
}

.security-icon{
    font-size:40px;
    color:#0d6efd;
}

::placeholder{
    color:#999 !important;
    font-size:14px;
}

.form-check{
    margin-top:-5px;
    margin-bottom:15px;
}

.form-check-label{
    font-size:14px;
    font-weight:600;
}

.forgot-password{
    color:#0d6efd;
    text-decoration:none;
    font-weight:600;
    font-size:15px;
}

.forgot-password:hover{
    text-decoration:underline;
}

.separator{
    display:flex;
    align-items:center;
    text-align:center;
    margin-top:15px;
}

.separator::before,
.separator::after{
    content:'';
    flex:1;
    border-bottom:1px solid #ddd;
}

.separator span{
    padding:0 10px;
    color:#777;
    font-size:14px;
}

.welcome-box{
    display:flex;
    align-items:flex-start;
    gap:15px;
    margin-top:140px;
}

.welcome-line{
    width:5px;
    height:70px;
    background:#0d6efd;
    border-radius:10px;
}

.welcome-box h2{
    font-size:24px;
    font-weight:bold;
    line-height:1.1;
    margin-bottom:10px;
}

.welcome-box p{
    width:350px;
    font-size:14px;
    line-height:1.6;
}

</style>
</head>
<body>

<div class="overlay">

<div class="login-wrapper">

    <div class="left-content">

        <img src="<?= base_url('assests/img/Vector.png') ?>" class="logo">

        <div class="badminton">BADMINTON</div>
        <div class="reservasi">RESERVASI</div>
        <div class="admin-panel">ADMIN PANEL</div>

        <div class="welcome-box">
            <div class="welcome-line"></div>

            <div>
                <h2>Selamat Datang,<br>Admin!</h2>

                <p>
                    Silahkan masuk ke panel admin untuk mengelola data
                    lapangan, jadwal, dan reservasi.
                </p>
            </div>
        </div>

        <div class="security-info">
            <i class="bi bi-shield-check security-icon"></i>
            <div>
                <h6>Akses aman hanya untuk administrator</h6>
                <p>Jangan bagikan akun Anda kepada pihak lain</p>
            </div>
            
        </div>

    </div>

    <div class="login-card">

        <div class="login-icon">
            <i class="bi bi-shield-lock"></i>
        </div>

        <div class="login-title">
            ADMIN PANEL
        </div>

        <div class="login-subtitle">
            Reservasi Badminton Cegil
        </div>
        <?php if(isset($error)){ ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
        <?php } ?>
                

        <form action="<?= base_url('auth') ?>" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>
                <input type="text"
                    name="email"
                    class="form-control"
                    placeholder="Masukkan username">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="bi bi-lock"></i>
                </span>

                <input type="password"
                    id="password"
                    name="password"
                    class="form-control"
                    placeholder="Masukkan Password">

                <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                    <i class="bi bi-eye"></i>
                </span>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">
                    Remember Me
                </label>
            </div>

            <button type="submit" class="btn-login">
                <i class="bi bi-box-arrow-in-right"></i>
                LOGIN ADMIN
            </button>

            <div class="separator">
                <span>atau</span>
            </div>

            <div class="text-center mt-3">
                <a href="#" class="forgot-password">Lupa Password?</a>
            </div>

        </form>

    </div>

</div>
<script>
    document.getElementById('togglePassword').addEventListener('click', function () {

        const password = document.getElementById('password');
        const icon = this.querySelector('i');

        if(password.type === 'password'){
            password.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        }else{
            password.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }

    });
</script>
</div>

</body>
</html>