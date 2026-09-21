<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Organisasi - Satu Data Sulawesi Tengah</title>
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

/* HERO ORGANISASI */
.organisasi-hero{
  position:relative;
  overflow:hidden;
  margin:22px auto 0;
  max-width:1240px;
  border-radius:20px;
  background:linear-gradient(120deg,#e0f0ff 0%,#d0e6ff 55%,#c0dcff 100%);
  border:1px solid #c7dcf7;
}

.hero-inner{
  position:relative;
  z-index:2;
  display:flex;
  align-items:center;
  gap:32px;
  padding:42px 40px;
  min-height:260px;
}

.hero-text{
  max-width:520px;
}

.hero-icon{
  width:56px;
  height:56px;
  border-radius:14px;
  background:rgba(37,99,235,0.12);
  display:flex;
  align-items:center;
  justify-content:center;
  margin-bottom:18px;
  color:#1c5cf0;
}

.hero-icon svg{
  width:28px;
  height:28px;
}

.hero-text h1{
  margin:0 0 12px;
  font-size:32px;
  font-weight:700;
  color:var(--blue-800);
  line-height:1.2;
}

.hero-text h1 b{
  font-weight:800;
}

.hero-text p{
  margin:0;
  color:var(--ink-700);
  font-size:15px;
  line-height:1.65;
}

.hero-photo{
  position:absolute;
  right:0;
  top:0;
  bottom:0;
  width:48%;
  clip-path:polygon(20% 0,100% 0,100% 100%,0% 100%);
  overflow:hidden;
}

.hero-photo img{
  width:100%;
  height:100%;
  object-fit:cover;
  transform:scale(1.02);
}

.hero-photo::after{
  content:"";
  position:absolute;
  inset:0;
  background:linear-gradient(100deg,#c0dcff 0%,rgba(192,220,255,0) 30%);
}

.hero-shape{
  position:absolute;
  border-radius:50%;
  opacity:.3;
  filter:blur(2px);
  animation:float-y 7s ease-in-out infinite;
}

.hero-shape.s1{
  width:80px;
  height:80px;
  background:#5b8bff;
  left:7%;
  top:15%;
  animation-delay:0s;
}

.hero-shape.s2{
  width:42px;
  height:42px;
  background:#fbbf24;
  left:38%;
  top:72%;
  animation-delay:1.4s;
}

.hero-shape.s3{
  width:24px;
  height:24px;
  background:#10b981;
  left:46%;
  top:18%;
  animation-delay:2.3s;
}

@keyframes float-y{
  0%,100%{transform:translateY(0);}
  50%{transform:translateY(-16px);}
}

/* ORGANISASI CONTENT */
.organisasi-content{
  max-width:1240px;
  margin:48px auto;
  padding:0 24px;
}

.section-title{
  font-size:22px;
  font-weight:700;
  color:#101828;
  margin-bottom:24px;
}

/* Filter Bar */
.filter-bar{
  background:#fff;
  border:1px solid var(--ink-100);
  border-radius:14px;
  padding:20px 24px;
  margin-bottom:28px;
  box-shadow:0 2px 8px rgba(0,0,0,0.04);
}

.filter-labels-row{
  display:grid;
  grid-template-columns:200px 200px 1fr;
  gap:12px;
  margin-bottom:10px;
}

.filter-label-col{
  display:flex;
  align-items:center;
}

.filter-label{
  font-size:14px;
  font-weight:600;
  color:#101828;
}

.filter-controls-row{
  display:grid;
  grid-template-columns:200px 200px 1fr auto;
  gap:12px;
  align-items:center;
}

.filter-dropdown{
  position:relative;
}

.filter-dropdown select{
  width:100%;
  height:44px;
  padding:0 36px 0 14px;
  border:1px solid #d0d5dd;
  border-radius:8px;
  background:#fff;
  font-size:14px;
  font-weight:500;
  color:#344054;
  cursor:pointer;
  transition:all .2s ease;
  appearance:none;
  background-image:url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%23667085' stroke-width='1.67' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
  background-repeat:no-repeat;
  background-position:right 12px center;
}

.filter-dropdown select:hover{
  border-color:#2563eb;
}

.filter-dropdown select:focus{
  outline:none;
  border-color:#2563eb;
  box-shadow:0 0 0 3px rgba(37,99,235,0.1);
}

.search-box{
  position:relative;
}

.search-box input{
  width:100%;
  height:44px;
  padding:0 44px 0 16px;
  border:1px solid #d0d5dd;
  border-radius:8px;
  font-size:14px;
  color:#1f2937;
  transition:all .2s ease;
}

.search-box input:focus{
  outline:none;
  border-color:#2563eb;
  box-shadow:0 0 0 3px rgba(37,99,235,0.1);
}

.search-box input::placeholder{
  color:#9ca3af;
}

.search-icon{
  position:absolute;
  right:14px;
  top:50%;
  transform:translateY(-50%);
  color:#9ca3af;
  pointer-events:none;
}

.search-icon svg{
  width:18px;
  height:18px;
}

.filter-actions{
  display:flex;
  gap:8px;
}

.btn-filter{
  height:44px;
  padding:0 20px;
  border-radius:8px;
  border:none;
  background:#2563eb;
  color:#fff;
  font-size:13.5px;
  font-weight:600;
  cursor:pointer;
  display:inline-flex;
  align-items:center;
  gap:8px;
  transition:all .2s ease;
  box-shadow:0 2px 6px rgba(37,99,235,0.25);
}

.btn-filter:hover{
  background:#1d4ed8;
  box-shadow:0 4px 10px rgba(37,99,235,0.35);
}

.btn-filter svg{
  width:16px;
  height:16px;
}

.btn-reset{
  height:44px;
  padding:0 18px;
  border-radius:8px;
  border:1px solid #d0d5dd;
  background:#fff;
  color:#667085;
  font-size:13.5px;
  font-weight:600;
  cursor:pointer;
  display:inline-flex;
  align-items:center;
  gap:8px;
  transition:all .2s ease;
}

.btn-reset:hover{
  background:#f9fafb;
  border-color:#2563eb;
  color:#2563eb;
}

.btn-reset svg{
  width:16px;
  height:16px;
}

/* Organisasi Grid */
.organisasi-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(360px,1fr));
  gap:18px;
}

.org-card{
  background:#fff;
  border:1px solid var(--ink-100);
  border-radius:14px;
  padding:22px;
  transition:box-shadow .25s var(--ease),border-color .25s var(--ease);
  cursor:pointer;
}

.org-card:hover{
  box-shadow:0 8px 24px rgba(20,71,201,.14);
  border-color:#7ea2ff;
}

.org-header{
  display:flex;
  align-items:flex-start;
  gap:14px;
  margin-bottom:14px;
}

.org-icon{
  width:48px;
  height:48px;
  border-radius:11px;
  background:#e8f0fe;
  display:flex;
  align-items:center;
  justify-content:center;
  flex-shrink:0;
}

.org-icon svg{
  width:24px;
  height:24px;
  color:#1c5cf0;
}

.org-content{
  flex:1;
  min-width:0;
}

.org-title{
  font-size:16.5px;
  font-weight:700;
  color:#101828;
  margin:0 0 6px;
  line-height:1.3;
}

.org-type{
  font-size:12.5px;
  color:#667085;
  font-weight:500;
  display:inline-block;
  padding:3px 10px;
  background:#f3f4f6;
  border-radius:6px;
}

.org-stats{
  display:flex;
  align-items:center;
  gap:18px;
  margin-top:14px;
  padding-top:14px;
  border-top:1px solid #eef1f6;
  font-size:13px;
  color:#667085;
}

.org-stats span{
  display:flex;
  align-items:center;
  gap:6px;
}

.org-stats svg{
  width:16px;
  height:16px;
  color:#9ca3af;
}

.org-stats strong{
  color:#101828;
  font-weight:700;
}

/* Empty State */
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
  .organisasi-grid{grid-template-columns:1fr;}
  .hero-inner{flex-direction:column;padding:32px 24px;}
  .hero-text h1{font-size:26px;}
  .hero-photo{display:none;}
  .footer-grid{grid-template-columns:1fr;}
  .footer-bottom{flex-direction:column;align-items:flex-start;}
  .filter-labels-row{grid-template-columns:1fr;}
  .filter-controls-row{grid-template-columns:1fr;}
  .filter-actions{width:100%;justify-content:stretch;}
  .btn-filter,.btn-reset{flex:1;}
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
<section class="organisasi-hero">
  <div class="hero-shape s1"></div>
  <div class="hero-shape s2"></div>
  <div class="hero-shape s3"></div>
  <div class="hero-inner">
    <div class="hero-text">
      <div class="hero-icon">
        <svg viewBox="0 0 24 24" fill="currentColor">
          <path d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H17V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5Z"/>
        </svg>
      </div>
      <h1><b>Produsen Data</b></h1>
      <p>Produsen Data adalah unit pada instansi pusat maupun instansi daerah yang menghasilkan data berdasarkan kewenangan sesuai dengan ketentuan peraturan perundang-undangan.</p>
    </div>
  </div>
  <div class="hero-photo">
    <img src="{{ asset('image/kantor gubernur.jpeg') }}" alt="Kantor Pemerintah Sulawesi Tengah">
  </div>
</section>

{{-- CONTENT --}}
<section class="organisasi-content">
  
  {{-- Filter Bar --}}
  <div class="filter-bar">
    {{-- Labels Row --}}
    <div class="filter-labels-row">
      <div class="filter-label-col">
        <span class="filter-label">Kategori</span>
      </div>
      <div class="filter-label-col">
        <span class="filter-label">Jenis OPD</span>
      </div>
      <div class="filter-label-col">
        <span class="filter-label">Cari Organisasi</span>
      </div>
    </div>
    
    {{-- Controls Row --}}
    <div class="filter-controls-row">
      <div class="filter-dropdown">
        <select id="filter-kategori">
          <option value="">Semua Kategori</option>
          <option value="pemerintah">Pemerintah Daerah</option>
          <option value="dinas">Dinas</option>
          <option value="badan">Badan</option>
          <option value="kantor">Kantor</option>
        </select>
      </div>
      
      <div class="filter-dropdown">
        <select id="filter-jenis">
          <option value="">Semua Jenis</option>
          <option value="provinsi">Provinsi</option>
          <option value="kabupaten">Kabupaten</option>
          <option value="kota">Kota</option>
        </select>
      </div>
      
      <div class="search-box">
        <input type="text" id="searchInput" placeholder="Cari berdasarkan nama OPD atau singkatan..." />
        <div class="search-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"/>
            <path d="m21 21-4.35-4.35"/>
          </svg>
        </div>
      </div>
      
      <div class="filter-actions">
        <button class="btn-filter" id="applyFilter">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="4" y1="21" x2="4" y2="14"/>
            <line x1="4" y1="10" x2="4" y2="3"/>
            <line x1="12" y1="21" x2="12" y2="12"/>
            <line x1="12" y1="8" x2="12" y2="3"/>
            <line x1="20" y1="21" x2="20" y2="16"/>
            <line x1="20" y1="12" x2="20" y2="3"/>
            <line x1="1" y1="14" x2="7" y2="14"/>
            <line x1="9" y1="8" x2="15" y2="8"/>
            <line x1="17" y1="16" x2="23" y2="16"/>
          </svg>
          Filter
        </button>
        
        <button class="btn-reset" id="resetFilter">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/>
            <path d="M21 3v5h-5"/>
            <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/>
            <path d="M3 21v-5h5"/>
          </svg>
          Reset
        </button>
      </div>
    </div>
  </div>

  <h2 class="section-title">Daftar Organisasi Perangkat Daerah</h2>
  
  {{-- Empty State --}}
  <div class="empty-state">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <path d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H17V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5Z"/>
    </svg>
    <h3>Belum Ada Data Organisasi</h3>
    <p>Data organisasi akan segera tersedia. Silakan kembali lagi nanti.</p>
  </div>
  
  {{-- Organisasi Grid (Hidden for now) --}}
  <div class="organisasi-grid" style="display:none;">
    {{-- Sample Card --}}
    <div class="org-card">
      <div class="org-header">
        <div class="org-icon">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H17V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5Z"/>
          </svg>
        </div>
        <div class="org-content">
          <h3 class="org-title">Dinas Komunikasi, Informatika, Persandian dan Statistik</h3>
          <span class="org-type">Dinas Provinsi</span>
        </div>
      </div>
      <div class="org-stats">
        <span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <ellipse cx="12" cy="5" rx="8" ry="3"/>
            <path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5"/>
            <path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/>
          </svg>
          <strong>0</strong> Dataset
        </span>
        <span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 20v-6M6 20V10M18 20V4"/>
          </svg>
          <strong>0</strong> Kategori
        </span>
      </div>
    </div>
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

<script>
// Filter functionality
document.getElementById('applyFilter').addEventListener('click', function() {
  const kategori = document.getElementById('filter-kategori').value;
  const jenis = document.getElementById('filter-jenis').value;
  const search = document.getElementById('searchInput').value;
  
  console.log('Applying filters:', { kategori, jenis, search });
  
  // TODO: Implement actual filter logic
  alert('Filter diterapkan!\nKategori: ' + (kategori || 'Semua') + '\nJenis: ' + (jenis || 'Semua') + '\nPencarian: ' + (search || '-'));
});

// Reset filter
document.getElementById('resetFilter').addEventListener('click', function() {
  document.getElementById('filter-kategori').value = '';
  document.getElementById('filter-jenis').value = '';
  document.getElementById('searchInput').value = '';
  
  console.log('Filters reset');
});

// Search on Enter
document.getElementById('searchInput').addEventListener('keypress', function(e) {
  if (e.key === 'Enter') {
    document.getElementById('applyFilter').click();
  }
});
</script>

</body>
</html>
