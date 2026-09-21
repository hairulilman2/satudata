<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dataset - Satu Data Sulawesi Tengah</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
:root{
  --blue-900:#0a2472;
  --blue-800:#0e3aa3;
  --blue-700:#1447c9;
  --blue-600:#1c5cf0;
  --blue-500:#2f6fed;
  --blue-400:#5b8bff;
  --blue-100:#e8f0fe;
  --blue-50:#f2f7ff;
  --ink-900:#101828;
  --ink-700:#344054;
  --ink-500:#667085;
  --ink-300:#d0d5dd;
  --ink-100:#eef1f6;
  --white:#ffffff;
  --ease:cubic-bezier(.22,.61,.36,1);
}

*{box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{
  margin:0;
  font-family:"Inter","Segoe UI",system-ui,-apple-system,sans-serif;
  color:var(--ink-900);
  background:#f7f9fc;
  -webkit-font-smoothing:antialiased;
}
body.dark{background:#0b1220; color:#e7ecf5;}
a{color:inherit;text-decoration:none;}
button{font-family:inherit;}
img{max-width:100%;display:block;}

.wrap{max-width:1240px;margin:0 auto;padding:0 24px;}

/* NAVBAR */
.site-header{
  position:sticky;
  top:0;
  z-index:50;
  background:#fff;
  border-bottom:1px solid #e5e7eb;
  box-shadow:0 1px 2px rgba(0,0,0,0.02);
}
.site-header .wrap{
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:20px;
  height:68px;
}
.brand{
  display:flex;
  align-items:center;
  gap:12px;
  flex-shrink:0;
}
.brand .logo-mark-wrap{
  width:40px;
  height:40px;
  flex-shrink:0;
}
.brand .logo-mark-wrap img{
  width:100%;
  height:100%;
  object-fit:contain;
  border-radius:8px;
}
.brand .brand-text{line-height:1.15;}
.brand .brand-text b{
  display:block;
  font-size:14px;
  color:#2563eb;
  font-weight:800;
  letter-spacing:0;
  margin:0;
}
.brand .brand-text span{
  display:block;
  font-size:10px;
  color:#64748b;
  letter-spacing:.02em;
  font-weight:500;
}

.main-nav{
  display:flex;
  align-items:center;
  gap:4px;
  flex:0 0 auto;
}
.main-nav a{
  display:flex;
  align-items:center;
  gap:6px;
  padding:8px 14px;
  border-radius:8px;
  font-size:13.5px;
  font-weight:600;
  color:#475569;
  transition:all .2s cubic-bezier(.4,0,.2,1);
  white-space:nowrap;
}
.main-nav a:hover{
  background:#eff6ff;
  color:#2563eb;
}
.main-nav a.active{
  background:#2563eb;
  color:#fff;
  box-shadow:0 2px 8px rgba(37,99,235,.3);
}
.main-nav a.active:hover{
  background:#1d4ed8;
}
.main-nav svg{
  width:15px;
  height:15px;
  flex-shrink:0;
}

.header-actions{
  display:flex;
  align-items:center;
  gap:8px;
  flex-shrink:0;
}
.icon-btn{
  width:36px;
  height:36px;
  border-radius:8px;
  border:1px solid #e2e8f0;
  background:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  cursor:pointer;
  color:#64748b;
  transition:all .2s ease;
}
.icon-btn:hover{
  background:#f8fafc;
  border-color:#cbd5e1;
  color:#1e293b;
}
.icon-btn svg{
  width:18px;
  height:18px;
}

.btn{
  height:36px;
  padding:0 16px;
  border-radius:8px;
  border:none;
  cursor:pointer;
  font-size:12.5px;
  font-weight:700;
  display:inline-flex;
  align-items:center;
  gap:6px;
  transition:all .2s ease;
  text-transform:uppercase;
  letter-spacing:.02em;
}
.btn:active{
  transform:scale(.98);
}
.btn-primary{
  background:#2563eb;
  color:#fff;
  box-shadow:0 2px 8px rgba(37,99,235,.25);
}
.btn-primary:hover{
  background:#1d4ed8;
  box-shadow:0 4px 12px rgba(37,99,235,.35);
}

/* HERO DATASET */
.dataset-hero{
  position:relative;overflow:hidden;
  margin:22px auto 0;max-width:1240px;
  border-radius:20px;
  background:linear-gradient(120deg,#eaf2ff 0%,#dbe9ff 55%,#cfe1ff 100%);
  border:1px solid #d7e6ff;
}
.hero-inner{
  position:relative;z-index:2;
  display:flex;align-items:center;gap:32px;
  padding:38px 40px;min-height:190px;
}
.hero-text{max-width:480px;}
.hero-text h1{
  margin:0 0 10px;font-size:30px;font-weight:700;color:var(--blue-800);
}
.hero-text h1 b{font-weight:800;}
.hero-text p{margin:0;color:var(--ink-700);font-size:14.5px;line-height:1.6;}
.hero-photo{
  position:absolute;right:0;top:0;bottom:0;width:46%;
  clip-path:polygon(18% 0,100% 0,100% 100%,0% 100%);
  overflow:hidden;
}
.hero-photo img{width:100%;height:100%;object-fit:cover;transform:scale(1.02);}
.hero-photo::after{
  content:"";position:absolute;inset:0;
  background:linear-gradient(100deg,#cfe1ff 0%,rgba(207,225,255,0) 30%);
}
.hero-shape{
  position:absolute;border-radius:50%;opacity:.35;filter:blur(2px);
  animation:float-y 7s ease-in-out infinite;
}
.hero-shape.s1{width:70px;height:70px;background:var(--blue-400);left:6%;top:18%;animation-delay:0s;}
.hero-shape.s2{width:34px;height:34px;background:#f59e0b;left:34%;top:70%;animation-delay:1.2s;}
.hero-shape.s3{width:20px;height:20px;background:#12b76a;left:44%;top:22%;animation-delay:2.1s;}
@keyframes float-y{0%,100%{transform:translateY(0);}50%{transform:translateY(-14px);}}

/* DATASET CONTENT */
.dataset-content{
  max-width:1240px;
  margin:48px auto;
  padding:0 24px;
}

/* FILTER BAR */
.filter-bar{
  background:#fff;
  border:1px solid var(--ink-100);
  border-radius:12px;
  padding:16px 20px;
  margin-bottom:24px;
  box-shadow:0 1px 3px rgba(0,0,0,.04);
}

.filter-label{
  font-size:13px;
  font-weight:600;
  color:#344054;
  margin-bottom:12px;
}

.filter-controls{
  display:flex;
  align-items:center;
  gap:12px;
}

.filter-controls select{
  height:38px;
  border:1px solid var(--ink-300);
  border-radius:8px;
  padding:0 12px;
  font-size:13px;
  background:#fff;
  color:#344054;
  font-weight:500;
  cursor:pointer;
  transition:all .2s ease;
}

.filter-controls select:hover{
  border-color:#7ea2ff;
}

.filter-controls select:focus{
  outline:none;
  border-color:#1c5cf0;
  box-shadow:0 0 0 3px rgba(28,92,240,.1);
}

.search-input{
  flex:1;
  height:38px;
  border:1px solid var(--ink-300);
  border-radius:8px;
  padding:0 14px;
  font-size:13px;
  background:#fff;
  color:#344054;
  font-weight:400;
  transition:all .2s ease;
  min-width:200px;
}

.search-input:focus{
  outline:none;
  border-color:#1c5cf0;
  box-shadow:0 0 0 3px rgba(28,92,240,.1);
}

.search-input::placeholder{
  color:#9ca3af;
  font-weight:400;
}

.nav-btn{
  width:38px;
  height:38px;
  border:1px solid var(--ink-300);
  border-radius:8px;
  background:#1c5cf0;
  display:flex;
  align-items:center;
  justify-content:center;
  cursor:pointer;
  color:#fff;
  transition:all .2s ease;
  flex-shrink:0;
}

.nav-btn:hover{
  background:#1447c9;
  transform:translateY(-1px);
}

.nav-btn svg{
  width:18px;
  height:18px;
}

.section-title{
  font-size:22px;
  font-weight:700;
  color:#101828;
  margin-bottom:24px;
}

.dataset-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(360px,1fr));
  gap:20px;
}

.dataset-card{
  background:#fff;
  border:1px solid var(--ink-100);
  border-radius:14px;
  padding:20px;
  transition:transform .25s var(--ease),box-shadow .25s var(--ease),border-color .25s var(--ease);
  cursor:pointer;
}
.dataset-card:hover{
  transform:translateY(-4px);
  box-shadow:0 8px 24px rgba(20,71,201,.14);
  border-color:#7ea2ff;
}

.card-header{
  display:flex;
  align-items:flex-start;
  gap:12px;
  margin-bottom:12px;
}
.card-icon{
  width:44px;height:44px;
  border-radius:10px;
  background:#e8f0fe;
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;
}
.card-icon svg{width:22px;height:22px;color:#1c5cf0;}

.card-content{flex:1;min-width:0;}
.card-title{
  font-size:16px;
  font-weight:700;
  color:#101828;
  margin:0 0 8px;
  line-height:1.4;
}
.card-desc{
  font-size:14px;
  color:#667085;
  line-height:1.5;
  margin:0 0 16px;
}
.card-meta{
  display:flex;
  align-items:center;
  gap:16px;
  font-size:12.5px;
  color:#98a2b3;
}
.card-meta span{
  display:flex;
  align-items:center;
  gap:4px;
}
.card-meta svg{width:14px;height:14px;}

/* EMPTY STATE */
.empty-state{
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  padding:80px 24px;
  text-align:center;
}
.empty-state svg{
  width:80px;
  height:80px;
  color:#cbd5e1;
  margin-bottom:24px;
}
.empty-state h3{
  font-size:20px;
  font-weight:700;
  color:#475569;
  margin:0 0 8px;
}
.empty-state p{
  font-size:14px;
  color:#94a3b8;
  margin:0;
}

/* FOOTER */
.site-footer{
  background:linear-gradient(135deg,#0a2472 0%,#1447c9 100%);
  color:#fff;
  padding:60px 0 0;
  margin-top:80px;
}

.footer-grid{
  display:grid;
  grid-template-columns:1.2fr 1fr 1fr 0.9fr;
  gap:40px;
  padding-bottom:40px;
  border-bottom:1px solid rgba(255,255,255,0.15);
}

.footer-col h3{
  font-size:18px;
  margin:0 0 4px;
  font-weight:800;
  letter-spacing:0.5px;
}

.footer-col h4{
  font-size:15px;
  margin:0 0 16px;
  font-weight:700;
  color:#fff;
}

.footer-brand{
  display:flex;
  align-items:center;
  gap:14px;
  margin-bottom:16px;
}

.footer-brand img{
  width:48px;
  height:48px;
  object-fit:contain;
}

.footer-brand span{
  font-size:10px;
  color:rgba(255,255,255,0.75);
  display:block;
  margin-top:2px;
  letter-spacing:0.3px;
}

.footer-desc{
  font-size:13px;
  line-height:1.7;
  color:rgba(255,255,255,0.85);
  margin:0;
}

.footer-links{
  list-style:none;
  padding:0;
  margin:0;
  display:flex;
  flex-direction:column;
  gap:12px;
}

.footer-links li{
  display:flex;
  align-items:flex-start;
  gap:10px;
  font-size:13px;
  line-height:1.5;
  color:rgba(255,255,255,0.85);
}

.footer-links li svg{
  width:16px;
  height:16px;
  flex-shrink:0;
  margin-top:2px;
  color:rgba(255,255,255,0.6);
}

.footer-links li a{
  color:rgba(255,255,255,0.85);
  text-decoration:none;
  transition:color .2s ease;
}

.footer-links li a:hover{
  color:#fff;
  text-decoration:underline;
}

.footer-map{
  border-radius:10px;
  overflow:hidden;
  box-shadow:0 4px 12px rgba(0,0,0,0.2);
  height:180px;
}

.footer-map iframe{
  width:100%;
  height:100%;
  border:0;
}

.footer-bottom{
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:24px 0;
  gap:20px;
  flex-wrap:wrap;
}

.footer-logo-diskominfo{
  display:flex;
  align-items:center;
  gap:12px;
}

.footer-logo-diskominfo img{
  width:40px;
  height:40px;
  object-fit:contain;
}

.footer-logo-diskominfo div{
  display:flex;
  flex-direction:column;
  gap:2px;
}

.footer-logo-diskominfo strong{
  font-size:12px;
  font-weight:700;
  color:#fff;
  letter-spacing:0.3px;
}

.footer-logo-diskominfo span{
  font-size:9px;
  color:rgba(255,255,255,0.75);
  letter-spacing:0.5px;
}

.footer-copyright{
  font-size:12px;
  color:rgba(255,255,255,0.75);
}

@media(max-width:1080px){
  .footer-grid{grid-template-columns:1fr 1fr;}
}

@media(max-width:768px){
  .dataset-grid{grid-template-columns:1fr;}
  .hero-inner{flex-direction:column;padding:32px 24px;}
  .hero-text h1{font-size:24px;}
  .hero-photo{display:none;}
  .footer-grid{grid-template-columns:1fr;}
  .footer-bottom{flex-direction:column;align-items:flex-start;}
}

.page-fade{animation:page-in .5s var(--ease);}
@keyframes page-in{from{opacity:0;}to{opacity:1;}}
</style>
</head>
<body class="page-fade">

{{-- Loading Screen --}}
@include('loading_screen.loading_screen')

<div id="content">

@include('navbar.navbar')

{{-- HERO --}}
<section class="dataset-hero">
  <div class="hero-shape s1"></div>
  <div class="hero-shape s2"></div>
  <div class="hero-shape s3"></div>
  <div class="hero-inner">
    <div class="hero-text">
      <h1><b>Dataset</b></h1>
      <p>Akses data pemerintah menjadi lebih mudah. Cari informasi spesifik, filter berdasarkan topik yang relevan, dan unduh dataset terverifikasi.</p>
    </div>
  </div>
  <div class="hero-photo">
    <img src="{{ asset('image/kantor gubernur.jpeg') }}" alt="Kantor Gubernur Sulawesi Tengah">
  </div>
</section>

{{-- CONTENT --}}
<section class="dataset-content">
  
  {{-- FILTER BAR --}}
  <div class="filter-bar">
    <div class="filter-label">Kategori</div>
    <div class="filter-controls">
      <select>
        <option value="">Data Prioritas</option>
        <option value="ekonomi">Ekonomi</option>
        <option value="pendidikan">Pendidikan</option>
        <option value="kesehatan">Kesehatan</option>
        <option value="infrastruktur">Infrastruktur</option>
      </select>
      
      <select>
        <option value="">Daerah</option>
        <option value="palu">Kota Palu</option>
        <option value="donggala">Kab. Donggala</option>
        <option value="parimo">Kab. Parigi Moutong</option>
        <option value="tolitoli">Kab. Toli-Toli</option>
      </select>
      
      <select>
        <option value="">Kategori</option>
        <option value="ekonomi">Ekonomi</option>
        <option value="pendidikan">Pendidikan</option>
        <option value="kesehatan">Kesehatan</option>
        <option value="lingkungan">Lingkungan</option>
      </select>
      
      <select>
        <option value="">2025</option>
        <option value="2024">2024</option>
        <option value="2023">2023</option>
        <option value="2022">2022</option>
      </select>
      
      <input type="text" class="search-input" placeholder="Cari dataset...">
      
      <button class="nav-btn" title="Navigasi">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M3 11l19-9-9 19-2-8-8-2z"/>
        </svg>
      </button>
    </div>
  </div>
  
  <h2 class="section-title">Dataset Tersedia</h2>
  
  {{-- Empty State --}}
  <div class="empty-state">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <path d="M9 2v6h6V2M9 16v6h6v-6M3 9v6h6V9M15 9v6h6V9"/>
    </svg>
    <h3>Belum Ada Dataset</h3>
    <p>Dataset akan segera tersedia. Silakan kembali lagi nanti.</p>
  </div>
</section>

{{-- FOOTER --}}
<footer class="site-footer">
  <div class="wrap">
    <div class="footer-grid">
      {{-- Brand & Description --}}
      <div class="footer-col">
        <div class="footer-brand-block">
          <div class="footer-brand">
            <img src="{{ asset('image/logo-sulteng.png') }}" alt="Logo Sulawesi Tengah" width="48" height="48">
            <div>
              <h3>SATU DATA</h3>
              <span>PROVINSI SULAWESI TENGAH</span>
            </div>
          </div>
          <p class="footer-desc">Mewujudkan data yang akurat, mutakhir, terpadu, dapat dipertanggungjawabkan, serta mudah diakses untuk mendukung pembangunan Provinsi Sulawesi Tengah.</p>
        </div>
      </div>

      {{-- Kontak Kami --}}
      <div class="footer-col">
        <h4>Kontak Kami</h4>
        <ul class="footer-links">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
            Jl. R.A. Kartini No. 106 94117
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            04513459909
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
              <polyline points="22,6 12,13 2,6"/>
            </svg>
            <a href="mailto:dinsa@diskominfo.sultengprov.go.id">dinsa@diskominfo.sultengprov.go.id</a>
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4M12 8h.01"/>
            </svg>
            <a href="https://www.kominfo.sultengprov.go.id" target="_blank">www.kominfo.sultengprov.go.id</a>
          </li>
        </ul>
      </div>

      {{-- Peta Lokasi --}}
      <div class="footer-col">
        <h4>Peta Lokasi</h4>
        <div class="footer-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.675234567890!2d119.8736!3d-0.8985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bec3c12345678%3A0x1234567890abcdef!2sDiskominfo%20Sulteng!5e0!3m2!1sid!2sid!4v1234567890123!5m2!1sid!2sid" width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

      {{-- Informasi --}}
      <div class="footer-col">
        <h4>Informasi</h4>
        <ul class="footer-links">
          <li><a href="#">Kebijakan Privasi</a></li>
          <li><a href="#">Syarat dan Ketentuan</a></li>
          <li><a href="#">Kontak Kami</a></li>
        </ul>
      </div>
    </div>

    {{-- Footer Bottom --}}
    <div class="footer-bottom">
      <div class="footer-logo-diskominfo">
        <img src="{{ asset('image/logo-sulteng.png') }}" alt="Logo Sulteng" width="40" height="40">
        <div>
          <strong>PEMERINTAH PROVINSI SULAWESI TENGAH</strong>
          <span>DINAS KOMUNIKASI, INFORMATIKA, PERSANDIAN DAN STATISTIK</span>
        </div>
      </div>
      <div class="footer-copyright">
        © 2026 Dinas Komunikasi, Informatika, Persandian dan Statistik Provinsi Sulawesi Tengah
      </div>
    </div>
  </div>
</footer>

</div>

</body>
</html>
