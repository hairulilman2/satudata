<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Satu Data Sulteng</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
*{box-sizing:border-box;margin:0;padding:0;}
html{width:100%;height:100%;}
body{
  font-family:"Inter","Segoe UI",sans-serif;
  background-image:url('{{ asset("image/kantor gubernur.jpeg") }}');
  background-size:cover;
  background-position:center;
  background-repeat:no-repeat;
  background-attachment:fixed;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  position:relative;
  overflow:hidden;
}

/* overlay gelap tipis supaya teks terbaca */
body::before{
  content:"";
  position:fixed;inset:0;
  background:linear-gradient(180deg,rgba(30,92,240,.12) 0%,rgba(30,92,240,.2) 100%);
  z-index:0;pointer-events:none;
}

/* ── WAVE BAWAH ── */
.wave-container{
  position:fixed;left:0;bottom:-5px;
  width:100%;height:200px;z-index:1;pointer-events:none;
  overflow:hidden;
  transform:rotate(180deg);
}
.wave{position:absolute;left:-5%;width:110%;border-radius:50% 50% 0 0;}
.wave-1{bottom:-100px;height:200px;background:#1e5cf0;transform:rotate(-2deg);}
.wave-2{bottom:-110px;height:190px;background:#2563eb;transform:rotate(3deg);}
.wave-3{bottom:-120px;height:180px;background:#1d4ed8;transform:rotate(-1deg);}

/* ── TOMBOL KEMBALI (PANAH) ── */
.back-btn{
  position:fixed;top:22px;left:22px;z-index:100;
  display:inline-flex;align-items:center;gap:9px;
  height:48px;padding:0 16px;
  background:#1c5cf0;
  border:none;
  border-radius:999px;
  color:#fff;
  font-family:inherit;font-size:14px;font-weight:600;
  text-decoration:none;
  box-shadow:0 6px 20px rgba(28,92,240,.42);
  transition:all .3s ease;
  overflow:hidden;
  width:48px;
}
.back-btn:hover{
  background:#1447c9;
  transform:translateX(-3px);
  width:auto;
  padding:0 20px 0 16px;
}
.back-btn svg{
  width:20px;height:20px;
  stroke:#fff;
  fill:none;
  stroke-width:2.5;
  stroke-linecap:round;
  stroke-linejoin:round;
  flex-shrink:0;
}
.back-btn-text{
  white-space:nowrap;
  opacity:0;
  max-width:0;
  transition:opacity .3s ease, max-width .3s ease;
  overflow:hidden;
}
.back-btn:hover .back-btn-text{
  opacity:1;
  max-width:100px;
}

/* ── CONTAINER UTAMA ── */
.login-container{
  position:relative;z-index:5;
  width:100%;max-width:460px;
  padding:20px 20px;
  margin:auto;
  display:flex;flex-direction:column;align-items:center;
}

/* ── HEADER (logo + judul, di LUAR card) ── */
.login-header{
  text-align:center;
  margin-bottom:12px;
}
.login-logo{
  width:56px;height:56px;
  margin:0 auto 6px;
}
.login-logo img{
  width:100%;height:100%;object-fit:contain;
  filter:drop-shadow(0 4px 8px rgba(0,0,0,.25));
}
.login-header h1{
  font-size:16px;font-weight:800;
  letter-spacing:0.8px;color:#1447c9;
  margin-bottom:3px;
}
.login-header p{
  font-size:10px;font-weight:700;
  color:#101828;text-transform:uppercase;
  letter-spacing:.5px;
}

/* ── CARD (diperbesar) ── */
.login-card{
  width:100%;
  background:rgba(255,255,255,.94);
  backdrop-filter:blur(14px);
  -webkit-backdrop-filter:blur(14px);
  border-radius:16px;
  padding:26px 26px 22px;
  border:1px solid rgba(255,255,255,.8);
  box-shadow:0 20px 56px rgba(0,0,0,.2);
}

/* ── JUDUL CARD ── */
.login-title{
  font-size:16px;font-weight:700;
  color:#101828;text-align:center;
  margin-bottom:16px;
}

/* ── FORM GROUP ── */
.form-group{margin-bottom:12px;}
.form-label{
  display:block;
  font-size:13px;font-weight:600;
  color:#344054;margin-bottom:6px;
}

/* ── INPUT ── */
.input-wrapper{position:relative;}
.input-icon{
  position:absolute;left:14px;top:50%;
  transform:translateY(-50%);
  width:17px;height:17px;color:#98a2b3;z-index:2;
}
.form-input{
  width:100%;height:42px;
  padding:0 40px 0 40px;
  border:1.5px solid #d0d5dd;
  border-radius:8px;
  background:rgba(255,255,255,.9);
  color:#101828;
  font-family:inherit;font-size:13px;
  outline:none;transition:.2s ease;
}
.form-input::placeholder{color:#98a2b3;}
.form-input:focus{
  border-color:#1c5cf0;
  box-shadow:0 0 0 3px rgba(28,92,240,.12);
  background:#fff;
}

/* ── PASSWORD ── */
.password-wrapper{position:relative;}
.toggle-password{
  position:absolute;right:12px;top:50%;
  transform:translateY(-50%);
  border:none;background:transparent;
  color:#667085;cursor:pointer;
  padding:4px;z-index:5;
  display:flex;align-items:center;
}
.toggle-password:hover{color:#1c5cf0;}
.toggle-password svg{width:17px;height:17px;}

/* ── OPTIONS ROW ── */
.form-options{
  display:flex;align-items:center;
  justify-content:space-between;
  gap:12px;flex-wrap:wrap;
  margin:5px 0 14px;
}
.remember-me{display:flex;align-items:center;gap:7px;}
.remember-me input[type="checkbox"]{
  width:16px;height:16px;
  accent-color:#1c5cf0;cursor:pointer;
}
.remember-me label{font-size:13px;color:#475467;cursor:pointer;}
.forgot-link{
  font-size:13px;color:#1c5cf0;
  text-decoration:none;font-weight:600;
}
.forgot-link:hover{text-decoration:underline;}

/* ── LOGIN BUTTON ── */
.btn-login{
  width:100%;height:42px;
  border:none;border-radius:8px;
  background:#1c5cf0;color:#fff;
  font-family:inherit;font-size:14px;font-weight:600;
  cursor:pointer;
  display:flex;align-items:center;justify-content:center;gap:8px;
  box-shadow:0 6px 16px rgba(28,92,240,.32);
  transition:.25s ease;
  margin-bottom:14px;
}
.btn-login:hover{background:#1447c9;transform:translateY(-1px);}
.btn-login svg{width:17px;height:17px;}

/* ── SECURITY ── */
.security-info{
  display:flex;align-items:center;justify-content:space-between;gap:10px;
  padding:12px 14px;
  background:rgba(239,246,255,.95);
  border:1px solid #bfdbfe;
  border-radius:8px;
  color:#475569;
  font-size:11.5px;line-height:1.5;
}
.security-left{display:flex;align-items:center;gap:10px;}
.security-info > .security-left > svg{width:20px;height:20px;color:#1c5cf0;flex-shrink:0;}
.security-info strong{
  display:block;color:#1e40af;
  margin-bottom:2px;font-size:12.5px;font-weight:700;
}
.security-check{
  width:30px;height:30px;border-radius:50%;
  background:#1c5cf0;display:flex;
  align-items:center;justify-content:center;flex-shrink:0;
}
.security-check svg{width:15px;height:15px;color:#fff;stroke-width:2.5;}

/* ── RESPONSIVE ── */
@media(max-width:560px){
  .login-container{max-width:100%;padding:16px 16px;}
  .login-card{padding:22px 18px 18px;border-radius:14px;}
  .login-title{font-size:18px;margin-bottom:18px;}
  .back-btn{padding:0 16px 0 13px;height:44px;font-size:13px;top:16px;left:16px;}
  .login-logo{width:64px;height:64px;}
}
</style>
</head>
<body>

<!-- WAVE -->
<div class="wave-container">
  <div class="wave wave-1"></div>
  <div class="wave wave-2"></div>
  <div class="wave wave-3"></div>
</div>

<!-- TOMBOL KEMBALI (PANAH) -->
<a href="{{ url('/') }}" class="back-btn" title="Kembali ke Dashboard">
  <svg viewBox="0 0 24 24" aria-hidden="true">
    <path d="M19 12H5"/>
    <path d="M12 19l-7-7 7-7"/>
  </svg>
  <span class="back-btn-text">Kembali</span>
</a>

<!-- CONTAINER -->
<div class="login-container">

  <!-- HEADER di luar card -->
  <div class="login-header">
    <div class="login-logo">
      <img src="{{ asset('image/logo-sulteng.png') }}" alt="Logo Sulawesi Tengah">
    </div>
    <h1>SATU DATA</h1>
    <p>Provinsi Sulawesi Tengah</p>
  </div>

  <!-- CARD -->
  <div class="login-card">
    <h2 class="login-title">Selamat Datang Kembali</h2>

    <form action="{{ route('login') }}" method="POST">
      @csrf

      <!-- EMAIL -->
      <div class="form-group">
        <label class="form-label" for="email">Email atau Username</label>
        <div class="input-wrapper">
          <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="8" r="5"/>
            <path d="M20 21a8 8 0 1 0-16 0"/>
          </svg>
          <input type="text" id="email" name="email" class="form-input"
                 placeholder="Masukkan email atau username" required>
        </div>
      </div>

      <!-- PASSWORD -->
      <div class="form-group">
        <label class="form-label" for="password">Kata Sandi</label>
        <div class="password-wrapper">
          <div class="input-wrapper">
            <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="11" width="18" height="11" rx="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
            <input type="password" id="password" name="password" class="form-input"
                   placeholder="Masukkan Kata Sandi" required>
          </div>
          <button type="button" class="toggle-password" onclick="togglePassword()" aria-label="Tampilkan kata sandi">
            <svg id="eye-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
              <circle cx="12" cy="12" r="3"/>
            </svg>
          </button>
        </div>
      </div>

      <!-- OPTIONS -->
      <div class="form-options">
        <div class="remember-me">
          <input type="checkbox" id="remember" name="remember">
          <label for="remember">Ingat saya</label>
        </div>
        <a href="#" class="forgot-link">Lupa kata sandi?</a>
      </div>

      <!-- LOGIN BUTTON -->
      <button type="submit" class="btn-login">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
          <path d="M10 17l5-5-5-5"/>
          <path d="M15 12H3"/>
        </svg>
        Masuk
      </button>
    </form>

    <!-- SECURITY -->
    <div class="security-info">
      <div class="security-left">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
        </svg>
        <div>
          <strong>Akses aman dengan akun terverifikasi</strong>
          <span>Kami menjaga keamanan data dan informasi anda</span>
        </div>
      </div>
      <div class="security-check">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
        </svg>
      </div>
    </div>

  </div><!-- /card -->
</div><!-- /container -->

<script>
function togglePassword(){
  const p=document.getElementById('password');
  const e=document.getElementById('eye-icon');
  if(p.type==='password'){
    p.type='text';
    e.innerHTML=`<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/>
    <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/>
    <path d="M14.12 14.12a3 3 0 1 1-4.24-4.24"/>
    <line x1="1" y1="1" x2="23" y2="23"/>`;
  } else {
    p.type='password';
    e.innerHTML=`<path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/>`;
  }
}
</script>
</body>
</html>