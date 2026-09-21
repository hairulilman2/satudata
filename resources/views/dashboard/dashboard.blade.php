<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Satu Data Sulteng — Portal Satu Data Provinsi Sulawesi Tengah</title>
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
.btn-primary svg{
  width:14px;
  height:14px;
}

/* HERO: memakai Tailwind (lihat <style id="hero-tailwind"> di bawah) */

/* STATS */
.db-band{padding:36px 0;}
.db-band-blue{background:linear-gradient(180deg,#eef3ff,#f6f9ff);}

.db-kpi-row{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;}
.db-kpi-card{
  background:#fff;border:1px solid var(--ink-100,#e7eaf1);border-radius:14px;
  padding:16px 18px;display:flex;align-items:flex-start;gap:14px;
  transition:transform .25s var(--ease),box-shadow .25s var(--ease),border-color .25s var(--ease);
}
.db-kpi-card:hover{
  transform:translateY(-4px);
  box-shadow:0 8px 24px rgba(20,71,201,.14),0 2px 6px rgba(16,24,40,.06);
  border-color:#7ea2ff;
}
.db-kpi-icon{
  width:44px;height:44px;border-radius:12px;
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.db-kpi-icon svg{width:22px;height:22px;}
.db-kpi-icon.blue{background:#e8f0fe;color:#1c5cf0;}
.db-kpi-icon.orange{background:#fff2e0;color:#e88a1c;}
.db-kpi-icon.green{background:#e4f7ea;color:#1a9a52;}

.db-kpi-body{flex:1;min-width:0;}
.db-kpi-title{font-size:12.5px;font-weight:600;color:#101828;}
.db-kpi-num-row{display:flex;align-items:baseline;gap:8px;margin-top:3px;}
.db-kpi-num{font-size:26px;font-weight:800;color:#101828;font-variant-numeric:tabular-nums;}
.db-kpi-trend{font-size:11px;font-weight:700;padding:2px 7px;border-radius:20px;}
.db-kpi-trend.up{color:#0a8f4a;background:#e5f8ee;}
.db-kpi-trend.neutral{color:#6b7280;background:#f3f4f6;}
.db-kpi-label{font-size:12px;color:var(--ink-500,#5b6478);margin-top:6px;}

/* STATS CHARTS */
.db-stats-head{
  display:flex;align-items:center;justify-content:space-between;
  margin:36px 0 14px;gap:10px;flex-wrap:wrap;
}
.db-stats-head h2{
  font-size:15px;margin:0;color:#101828;
  display:flex;align-items:center;gap:8px;
}
.db-stats-head h2 svg{width:17px;height:17px;color:#1c5cf0;}
.db-stats-head .yr-pick{
  display:flex;align-items:center;gap:8px;
  font-size:12.5px;color:var(--ink-500,#5b6478);
}
.db-stats-head select{
  height:34px;border:1px solid var(--ink-300,#d7dbe4);
  border-radius:8px;padding:0 10px;font-size:12.5px;background:#fff;
}

.db-stats-grid{
  display:grid;grid-template-columns:repeat(2,1fr);gap:16px;
}
.db-stat-chart{
  background:#fff;border:1px solid var(--ink-100,#e7eaf1);
  border-radius:14px;padding:20px 22px;
  transition:transform .25s var(--ease),box-shadow .25s var(--ease),border-color .25s var(--ease);
}
.db-stat-chart:hover{
  transform:translateY(-4px);
  box-shadow:0 8px 24px rgba(20,71,201,.14),0 2px 6px rgba(16,24,40,.06);
  border-color:#7ea2ff;
}
.db-stat-chart .lbl{
  font-size:12px;color:var(--ink-500,#5b6478);
  margin:0 0 10px;font-weight:600;
}
.db-stat-chart .num-row{
  display:flex;align-items:baseline;gap:10px;margin-bottom:12px;
}
.db-stat-chart .num{
  font-size:24px;font-weight:800;line-height:1;
}
.db-stat-chart .trend{
  font-size:11.5px;font-weight:700;
}
.db-stat-chart .trend.up{color:#0a8f4a;}
.db-stat-chart .trend.down{color:#c0392b;}

.db-stat-chart-big{
  display:flex;gap:8px;margin-top:12px;
}
.db-stat-chart-big .yaxis-lbl{
  display:flex;flex-direction:column;
  font-size:10px;color:var(--ink-500,#8891a3);
  text-align:right;line-height:1;
  width:30px;flex-shrink:0;
  height:180px;
  position:relative;
}
.db-stat-chart-big .yaxis-lbl span{
  position:absolute;
  right:0;
  transform:translateY(-50%);
}
.db-stat-chart-big .yaxis-lbl span:nth-child(1){top:6px;}
.db-stat-chart-big .yaxis-lbl span:nth-child(2){top:51px;}
.db-stat-chart-big .yaxis-lbl span:nth-child(3){top:96px;}
.db-stat-chart-big .yaxis-lbl span:nth-child(4){top:141px;}
.db-stat-chart-big .yaxis-lbl span:nth-child(5){top:174px;}
.db-stat-chart-big svg{
  flex:1;width:100%;height:180px;display:block;overflow:visible;
}
.db-stat-chart .xaxis-big{
  display:flex;justify-content:space-between;margin-top:4px;padding-left:38px;
}
.db-stat-chart .xaxis-big span{
  font-size:10.5px;color:var(--ink-500,#8891a3);
}

@media (max-width:900px){
  .db-stats-grid{grid-template-columns:1fr;}
}

/* MAIN GRID LAYOUT */
.db-main-grid{
  display:grid;
  grid-template-columns:1.5fr 1fr;
  gap:18px;
  align-items:start;
}

.db-panel{
  background:#fff;
  border:1px solid var(--ink-100,#e7eaf1);
  border-radius:14px;
  padding:18px 20px;
}

.db-panel-head{
  display:flex;
  align-items:flex-start;
  justify-content:space-between;
  margin-bottom:14px;
  gap:12px;
}

.db-panel-head-left{
  display:flex;
  align-items:flex-start;
  gap:10px;
}

.db-panel-icon{
  width:32px;height:32px;
  border-radius:9px;
  background:#e8f0fe;
  color:#1c5cf0;
  display:flex;
  align-items:center;
  justify-content:center;
  flex:0 0 auto;
}

.db-panel-icon svg{width:16px;height:16px;}

.db-panel-head-text h3{
  font-size:15px;
  margin:0;
  color:#101828;
}

.db-panel-head-text p{
  margin:2px 0 0;
  font-size:11.5px;
  color:var(--ink-500,#5b6478);
  line-height:1.4;
}

/* MAP SECTION */
.db-map-outer{
  display:grid;
  grid-template-columns:1fr 230px;
  gap:16px;
}

.db-map-canvas{
  position:relative;
  height:100%;
  background:radial-gradient(circle at 40% 25%,#f4f8ff,#eef2fb);
  border-radius:12px;
  overflow:hidden;
}

.db-map-canvas svg{
  width:100%;
  height:100%;
  display:block;
  transition:transform .2s ease;
  transform-origin:center center;
}

.db-map-canvas path{
  cursor:pointer;
  stroke:#fff;
  stroke-width:1.4;
  transition:opacity .15s ease,filter .15s ease;
}

.db-map-canvas path:hover{
  opacity:.82;
  filter:brightness(1.08);
}

.db-map-canvas path.active{
  stroke:#101828;
  stroke-width:2.2;
}

.db-map-zoom{
  position:absolute;
  left:10px;
  top:10px;
  display:flex;
  flex-direction:column;
  gap:4px;
  z-index:5;
}

.db-map-zoom button{
  width:26px;
  height:26px;
  border:1px solid var(--ink-300,#d7dbe4);
  background:#fff;
  border-radius:7px;
  cursor:pointer;
  font-size:15px;
  font-weight:700;
  color:#344054;
  line-height:1;
  display:flex;
  align-items:center;
  justify-content:center;
}

.db-map-zoom button:hover{
  background:#f2f5fb;
}

.kab-label{
  font-size:6.5px;
  font-weight:700;
  fill:#1f2937;
  paint-order:stroke;
  stroke:#fff;
  stroke-width:2px;
  pointer-events:none;
}

.db-pop-panel{
  border-left:1px solid var(--ink-100,#e7eaf1);
  padding-left:18px;
  margin-left:2px;
  display:flex;
  flex-direction:column;
  min-height:0;
}

.db-pop-panel h4{
  margin:0 0 10px;
  font-size:14.5px;
  color:#101828;
  flex:0 0 auto;
}

.db-pop-total{
  background:linear-gradient(90deg,#f3e0ff,#e7d3ff);
  border-radius:10px;
  padding:10px 13px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:8px;
  font-size:12px;
  font-weight:700;
  color:#7c3aed;
  margin-bottom:10px;
  flex:0 0 auto;
}

.db-pop-list{
  display:flex;
  flex-direction:column;
  gap:6px;
  max-height:270px;
  overflow-y:auto;
  padding-right:4px;
}

.db-pop-row{
  position:relative;
  overflow:hidden;
  flex:0 0 auto;
  display:flex;
  align-items:center;
  gap:9px;
  background:#fff;
  border:1px solid var(--ink-100,#e7eaf1);
  border-radius:8px;
  padding:7px 10px;
  font-size:12px;
}

.db-pop-row .fill{
  position:absolute;
  left:0;
  top:0;
  bottom:0;
  width:0%;
  z-index:0;
}

.db-pop-row .rank,
.db-pop-row .name,
.db-pop-row .val{
  position:relative;
  z-index:1;
}

.db-pop-row .rank{
  width:24px;
  height:24px;
  border-radius:6px;
  font-weight:700;
  font-size:11px;
  display:flex;
  align-items:center;
  justify-content:center;
  flex:0 0 auto;
}

.db-pop-row .name{
  flex:1;
  min-width:0;
  color:var(--ink-700,#333c4d);
  font-weight:600;
  white-space:normal;
  line-height:1.25;
}

.db-pop-row .val{
  font-weight:700;
  color:#101828;
  white-space:nowrap;
  flex:0 0 auto;
}

/* SIDE COLUMN */
.db-side-col{
  display:flex;
  flex-direction:column;
  gap:16px;
}

.db-focus-card{
  display:flex;
  gap:12px;
  align-items:flex-start;
}

.db-focus-icon{
  width:34px;
  height:34px;
  border-radius:9px;
  background:#101c33;
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  flex:0 0 auto;
}

.db-focus-icon svg{width:16px;height:16px;}

.db-focus-card p{
  margin:2px 0 0;
  font-size:12.5px;
  color:var(--ink-500,#5b6478);
  line-height:1.55;
}

.db-side-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:14px;
}

.db-mini-card{
  background:#fff;
  border:1px solid var(--ink-100,#e7eaf1);
  border-radius:12px;
  padding:14px 15px;
  display:flex;
  flex-direction:column;
  gap:6px;
  transition:transform .25s var(--ease),box-shadow .25s var(--ease),border-color .25s var(--ease);
}

.db-mini-card:hover{
  transform:translateY(-4px);
  box-shadow:0 8px 24px rgba(20,71,201,.14);
  border-color:#7ea2ff;
}

.db-mini-card .mini-top{
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:8px;
}

.db-mini-card .mini-icon{
  width:26px;
  height:26px;
  border-radius:7px;
  display:flex;
  align-items:center;
  justify-content:center;
  flex:0 0 auto;
}

.db-mini-card .mini-icon svg{width:13px;height:13px;}

.db-mini-card .mini-num{
  font-size:19px;
  font-weight:800;
  color:#101828;
}

.db-mini-card .mini-lbl{
  font-size:11.5px;
  color:var(--ink-500,#5b6478);
}

.db-mini-spark{
  width:100%;
  height:34px;
  display:block;
  margin-top:2px;
}

.db-topic-row{
  display:flex;
  align-items:flex-end;
  gap:12px;
}

.db-mini-bars{
  display:flex;
  align-items:flex-end;
  gap:3px;
  height:50px;
  flex:0 0 auto;
  padding-bottom:1px;
}

.db-mini-bars span{
  display:block;
  width:5px;
  border-radius:2px 2px 0 0;
}

.db-topic-list{
  display:flex;
  flex-direction:column;
  gap:5px;
  margin-top:2px;
  flex:1 1 auto;
  min-width:0;
}

.db-topic-list .t{
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:6px;
  font-size:11px;
  color:var(--ink-700,#333c4d);
}

.db-topic-list .t b{
  font-weight:700;
  color:#101828;
  white-space:nowrap;
}

.db-topic-list .bar{
  flex:1;
  height:5px;
  background:#eef1f6;
  border-radius:4px;
  overflow:hidden;
  margin-bottom:2px;
}

.db-topic-list .bar span{
  display:block;
  height:100%;
  border-radius:4px;
}

.db-donut-row{
  display:flex;
  align-items:center;
  gap:12px;
}

.db-donut-legend{
  display:flex;
  flex-direction:column;
  gap:5px;
  font-size:11px;
  color:var(--ink-500,#5b6478);
}

.db-donut-legend .dot{
  width:7px;
  height:7px;
  border-radius:2px;
  display:inline-block;
  margin-right:5px;
}

.db-donut-legend b{color:#101828;}

@media (max-width:1080px){
  .db-main-grid{grid-template-columns:1fr;}
  .db-side-grid{grid-template-columns:1fr;}
}

@media (max-width:900px){
  .db-map-outer{grid-template-columns:1fr;}
  .db-pop-panel{
    border-left:none;
    border-top:1px solid var(--ink-100,#e7eaf1);
    padding-left:0;
    padding-top:16px;
    margin-top:16px;
  }
}

@media (max-width:1080px){
  .db-kpi-row{grid-template-columns:1fr 1fr;}
}
@media (max-width:640px){
  .db-kpi-row{grid-template-columns:1fr;}
}

.count-up{font-variant-numeric:tabular-nums;}
.page-fade{animation:page-in .5s var(--ease);}
@keyframes page-in{from{opacity:0;}to{opacity:1;}}

/* FOOTER */
.site-footer{
  background:linear-gradient(135deg,#0a2472 0%,#1447c9 100%);
  color:#fff;
  padding:60px 0 0;
  margin-top:80px;
}

.footer-grid{
  display:grid;
  grid-template-columns:1.2fr 1fr 1fr 0.8fr;
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
  font-size:16px;
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

.footer-brand span{
  font-size:11px;
  color:rgba(255,255,255,0.8);
  display:block;
  margin-top:2px;
}

.footer-desc{
  font-size:13.5px;
  line-height:1.65;
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
  font-size:13.5px;
  line-height:1.5;
  color:rgba(255,255,255,0.85);
}

.footer-links li svg{
  width:18px;
  height:18px;
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
}

.footer-map{
  border-radius:10px;
  overflow:hidden;
  box-shadow:0 4px 12px rgba(0,0,0,0.2);
}

.footer-bottom{
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:24px 0;
  gap:20px;
}

.footer-logo-diskominfo{
  display:flex;
  align-items:center;
  gap:14px;
}

.footer-logo-diskominfo div{
  display:flex;
  flex-direction:column;
  gap:2px;
}

.footer-logo-diskominfo strong{
  font-size:13px;
  font-weight:700;
  color:#fff;
  letter-spacing:0.3px;
}

.footer-logo-diskominfo span{
  font-size:11px;
  color:rgba(255,255,255,0.75);
}

.footer-copyright{
  display:flex;
  align-items:center;
  gap:16px;
}

.footer-copyright p{
  margin:0;
  font-size:12px;
  color:rgba(255,255,255,0.7);
}

.back-to-top{
  width:38px;
  height:38px;
  border-radius:10px;
  border:1px solid rgba(255,255,255,0.2);
  background:rgba(255,255,255,0.1);
  display:flex;
  align-items:center;
  justify-content:center;
  cursor:pointer;
  transition:all .25s ease;
}

.back-to-top:hover{
  background:rgba(255,255,255,0.2);
  border-color:rgba(255,255,255,0.4);
  transform:translateY(-3px);
}

.back-to-top svg{
  width:18px;
  height:18px;
  color:#fff;
}

@media (max-width:1080px){
  .footer-grid{grid-template-columns:1fr 1fr;}
}

@media (max-width:640px){
  .footer-grid{grid-template-columns:1fr;}
  .footer-bottom{flex-direction:column;align-items:flex-start;}
}

@media (prefers-reduced-motion:reduce){
  *{animation-duration:.001ms !important;animation-iteration-count:1 !important;
    transition-duration:.001ms !important;scroll-behavior:auto !important;}
}
</style>

{{-- Tailwind statis khusus hero (tanpa Vite/npm, tanpa reset global) --}}
<style id="hero-tailwind">
/*! tailwindcss v4.3.3 | MIT License | https://tailwindcss.com */
@layer properties{@supports (((-webkit-hyphens:none)) and (not (margin-trim:inline))) or ((-moz-orient:inline) and (not (color:rgb(from red r g b)))){*,:before,:after,::backdrop{--tw-border-style:solid;--tw-leading:initial;--tw-font-weight:initial;--tw-tracking:initial;--tw-shadow:0 0 #0000;--tw-shadow-color:initial;--tw-shadow-alpha:100%;--tw-inset-shadow:0 0 #0000;--tw-inset-shadow-color:initial;--tw-inset-shadow-alpha:100%;--tw-ring-color:initial;--tw-ring-shadow:0 0 #0000;--tw-inset-ring-color:initial;--tw-inset-ring-shadow:0 0 #0000;--tw-ring-inset:initial;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-offset-shadow:0 0 #0000;--tw-blur:initial;--tw-brightness:initial;--tw-contrast:initial;--tw-grayscale:initial;--tw-hue-rotate:initial;--tw-invert:initial;--tw-opacity:initial;--tw-saturate:initial;--tw-sepia:initial;--tw-drop-shadow:initial;--tw-drop-shadow-color:initial;--tw-drop-shadow-alpha:100%;--tw-drop-shadow-size:initial;--tw-duration:initial;--tw-translate-x:0;--tw-translate-y:0;--tw-translate-z:0}}}@layer theme{:root,:host{--color-amber-50:oklch(98.7% .022 95.277);--color-amber-400:oklch(82.8% .189 84.429);--color-amber-600:oklch(66.6% .179 58.318);--color-amber-950:oklch(27.9% .077 45.635);--color-emerald-400:oklch(76.5% .177 163.223);--color-blue-50:oklch(97% .014 254.604);--color-blue-100:oklch(93.2% .032 255.585);--color-blue-300:oklch(80.9% .105 251.813);--color-blue-400:oklch(70.7% .165 254.624);--color-blue-500:oklch(62.3% .214 259.815);--color-blue-600:oklch(54.6% .245 262.881);--color-blue-700:oklch(48.8% .243 264.376);--color-blue-800:oklch(42.4% .199 265.638);--color-blue-900:oklch(37.9% .146 265.522);--color-slate-50:oklch(98.4% .003 247.858);--color-slate-100:oklch(96.8% .007 247.896);--color-slate-200:oklch(92.9% .013 255.508);--color-slate-400:oklch(70.4% .04 256.788);--color-slate-500:oklch(55.4% .046 257.417);--color-slate-700:oklch(37.2% .044 257.287);--color-slate-800:oklch(27.9% .041 260.031);--color-slate-900:oklch(20.8% .042 265.755);--color-white:#fff;--spacing:.25rem;--text-xs:.75rem;--text-xs--line-height:calc(1 / .75);--text-sm:.875rem;--text-sm--line-height:calc(1.25 / .875);--text-2xl:1.5rem;--text-2xl--line-height:calc(2 / 1.5);--text-3xl:1.875rem;--text-3xl--line-height:calc(2.25 / 1.875);--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--tracking-tight:-.025em;--leading-tight:1.25;--leading-relaxed:1.625;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4, 0, .2, 1)}}@layer base,components;@layer utilities{.pointer-events-none{pointer-events:none}.absolute{position:absolute}.relative{position:relative}.top-0{top:0}.top-\[18\%\]{top:18%}.top-\[22\%\]{top:22%}.top-\[70\%\]{top:70%}.right-0{right:0}.bottom-0{bottom:0}.-left-6{left:calc(var(--spacing) * -6)}.left-0{left:0}.left-8{left:calc(var(--spacing) * 8)}.left-\[6\%\]{left:6%}.left-\[34\%\]{left:34%}.left-\[44\%\]{left:44%}.z-0{z-index:0}.z-10{z-index:10}.order-first{order:-9999}.m-0{margin:0}.mx-auto{margin-inline:auto}.mt-1{margin-top:var(--spacing)}.mt-2\.5{margin-top:calc(var(--spacing) * 2.5)}.mt-5{margin-top:calc(var(--spacing) * 5)}.mt-6{margin-top:calc(var(--spacing) * 6)}.mt-\[22px\]{margin-top:22px}.mb-0{margin-bottom:0}.flex{display:flex}.grid{display:grid}.hidden{display:none}.inline-flex{display:inline-flex}.h-4{height:calc(var(--spacing) * 4)}.h-5{height:calc(var(--spacing) * 5)}.h-8{height:calc(var(--spacing) * 8)}.h-10{height:calc(var(--spacing) * 10)}.h-11{height:calc(var(--spacing) * 11)}.h-16{height:calc(var(--spacing) * 16)}.h-28{height:calc(var(--spacing) * 28)}.h-\[72px\]{height:72px}.h-\[152px\]{height:152px}.h-\[180px\]{height:180px}.h-full{height:100%}.w-4{width:calc(var(--spacing) * 4)}.w-5{width:calc(var(--spacing) * 5)}.w-8{width:calc(var(--spacing) * 8)}.w-11{width:calc(var(--spacing) * 11)}.w-16{width:calc(var(--spacing) * 16)}.w-28{width:calc(var(--spacing) * 28)}.w-36{width:calc(var(--spacing) * 36)}.w-40{width:calc(var(--spacing) * 40)}.w-\[72px\]{width:72px}.w-\[152px\]{width:152px}.w-full{width:100%}.max-w-\[500px\]{max-width:500px}.max-w-\[1240px\]{max-width:1240px}.min-w-0{min-width:0}.flex-1{flex:1}.shrink-0{flex-shrink:0}.cursor-pointer{cursor:pointer}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-baseline{align-items:baseline}.items-center{align-items:center}.items-start{align-items:flex-start}.justify-center{justify-content:center}.gap-2{gap:calc(var(--spacing) * 2)}.gap-3{gap:calc(var(--spacing) * 3)}.gap-3\.5{gap:calc(var(--spacing) * 3.5)}.gap-4{gap:calc(var(--spacing) * 4)}.overflow-hidden{overflow:hidden}.rounded-2xl{border-radius:var(--radius-2xl)}.rounded-full{border-radius:3.40282e38px}.rounded-lg{border-radius:var(--radius-lg)}.rounded-md{border-radius:var(--radius-md)}.rounded-xl{border-radius:var(--radius-xl)}.border{border-style:var(--tw-border-style);border-width:1px}.border-blue-100{border-color:var(--color-blue-100)}.border-slate-200{border-color:var(--color-slate-200)}.bg-amber-50{background-color:var(--color-amber-50)}.bg-amber-400\/35{background-color:#fcbb0059}@supports (color:color-mix(in lab, red, red)){.bg-amber-400\/35{background-color:color-mix(in oklab, var(--color-amber-400) 35%, transparent)}}.bg-blue-50{background-color:var(--color-blue-50)}.bg-blue-400\/35{background-color:#54a2ff59}@supports (color:color-mix(in lab, red, red)){.bg-blue-400\/35{background-color:color-mix(in oklab, var(--color-blue-400) 35%, transparent)}}.bg-blue-400\/40{background-color:#54a2ff66}@supports (color:color-mix(in lab, red, red)){.bg-blue-400\/40{background-color:color-mix(in oklab, var(--color-blue-400) 40%, transparent)}}.bg-blue-500\/40{background-color:#3080ff66}@supports (color:color-mix(in lab, red, red)){.bg-blue-500\/40{background-color:color-mix(in oklab, var(--color-blue-500) 40%, transparent)}}.bg-blue-600{background-color:var(--color-blue-600)}.bg-blue-600\/80{background-color:#155dfccc}@supports (color:color-mix(in lab, red, red)){.bg-blue-600\/80{background-color:color-mix(in oklab, var(--color-blue-600) 80%, transparent)}}.bg-emerald-400\/35{background-color:#00d29459}@supports (color:color-mix(in lab, red, red)){.bg-emerald-400\/35{background-color:color-mix(in oklab, var(--color-emerald-400) 35%, transparent)}}.bg-slate-100{background-color:var(--color-slate-100)}.bg-white{background-color:var(--color-white)}.bg-\[linear-gradient\(90deg\,\#eff6ff_0\%\,\#eef2ff_50\%\,\#dbeafe_100\%\)\]{background-image:linear-gradient(90deg,#eff6ff 0%,#eef2ff 50%,#dbeafe 100%)}.bg-\[linear-gradient\(90deg\,rgba\(238\,242\,255\,1\)_35\%\,rgba\(238\,242\,255\,0\)_100\%\)\]{background-image:linear-gradient(90deg,#eef2ff 35%,#eef2ff00 100%)}.object-cover{object-fit:cover}.p-4{padding:calc(var(--spacing) * 4)}.p-6{padding:calc(var(--spacing) * 6)}.px-2{padding-inline:calc(var(--spacing) * 2)}.px-4{padding-inline:calc(var(--spacing) * 4)}.py-0\.5{padding-block:calc(var(--spacing) * .5)}.text-2xl{font-size:var(--text-2xl);line-height:var(--tw-leading,var(--text-2xl--line-height))}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-xs{font-size:var(--text-xs);line-height:var(--tw-leading,var(--text-xs--line-height))}.text-\[11px\]{font-size:11px}.leading-relaxed{--tw-leading:var(--leading-relaxed);line-height:var(--leading-relaxed)}.leading-tight{--tw-leading:var(--leading-tight);line-height:var(--leading-tight)}.font-bold{--tw-font-weight:var(--font-weight-bold);font-weight:var(--font-weight-bold)}.font-extrabold{--tw-font-weight:var(--font-weight-extrabold);font-weight:var(--font-weight-extrabold)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.font-semibold{--tw-font-weight:var(--font-weight-semibold);font-weight:var(--font-weight-semibold)}.tracking-tight{--tw-tracking:var(--tracking-tight);letter-spacing:var(--tracking-tight)}.whitespace-nowrap{white-space:nowrap}.text-amber-600{color:var(--color-amber-600)}.text-blue-600{color:var(--color-blue-600)}.text-blue-800{color:var(--color-blue-800)}.text-slate-500{color:var(--color-slate-500)}.text-slate-700{color:var(--color-slate-700)}.text-slate-900{color:var(--color-slate-900)}.text-slate-900\!{color:var(--color-slate-900)!important}.text-white\!{color:var(--color-white)!important}.shadow-sm{--tw-shadow:0 1px 3px 0 var(--tw-shadow-color,#0000001a), 0 1px 2px -1px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)}.ring-1{--tw-ring-shadow:var(--tw-ring-inset,) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color,currentcolor);box-shadow:var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)}.ring-slate-900\/10{--tw-ring-color:#0f172b1a}@supports (color:color-mix(in lab, red, red)){.ring-slate-900\/10{--tw-ring-color:color-mix(in oklab, var(--color-slate-900) 10%, transparent)}}.blur-\[2px\]{--tw-blur:blur(2px);filter:var(--tw-blur,) var(--tw-brightness,) var(--tw-contrast,) var(--tw-grayscale,) var(--tw-hue-rotate,) var(--tw-invert,) var(--tw-saturate,) var(--tw-sepia,) var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-transform{transition-property:transform,translate,scale,rotate;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.duration-200{--tw-duration:.2s;transition-duration:.2s}.\[clip-path\:polygon\(48\%_0\%\,100\%_0\%\,52\%_100\%\,0\%_100\%\)\]{clip-path:polygon(48% 0%,100% 0%,52% 100%,0% 100%)}.\[clip-path\:polygon\(60\%_0\%\,100\%_0\%\,40\%_100\%\,0\%_100\%\)\]{clip-path:polygon(60% 0%,100% 0%,40% 100%,0% 100%)}.\[clip-path\:polygon\(100\%_0\%\,100\%_100\%\,0\%_100\%\)\]{clip-path:polygon(100% 0%,100% 100%,0% 100%)}@media (hover:hover){.hover\:-translate-y-0\.5:hover{--tw-translate-y:calc(var(--spacing) * -.5);translate:var(--tw-translate-x) var(--tw-translate-y)}.hover\:bg-blue-700:hover{background-color:var(--color-blue-700)}.hover\:bg-slate-50:hover{background-color:var(--color-slate-50)}.hover\:shadow-md:hover{--tw-shadow:0 4px 6px -1px var(--tw-shadow-color,#0000001a), 0 2px 4px -2px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)}}.active\:scale-\[0\.98\]:active{scale:.98}@media (min-width:40rem){.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.sm\:px-6{padding-inline:calc(var(--spacing) * 6)}}@media (min-width:48rem){.md\:text-3xl{font-size:var(--text-3xl);line-height:var(--tw-leading,var(--text-3xl--line-height))}.md\:text-\[14\.5px\]{font-size:14.5px}}@media (min-width:64rem){.lg\:absolute{position:absolute}.lg\:top-0{top:0}.lg\:right-0{right:0}.lg\:bottom-6{bottom:calc(var(--spacing) * 6)}.lg\:left-6{left:calc(var(--spacing) * 6)}.lg\:z-30{z-index:30}.lg\:order-none{order:0}.lg\:mt-0{margin-top:0}.lg\:block{display:block}.lg\:h-full{height:100%}.lg\:min-h-\[304px\]{min-height:304px}.lg\:w-\[45\%\]{width:45%}.lg\:w-\[calc\(3\*210px\+2\*16px\)\]{width:662px}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:pb-\[152px\]{padding-bottom:152px}}.dark\:border-\[\#1c2f63\]:where(.dark,.dark *){border-color:#1c2f63}.dark\:border-slate-700:where(.dark,.dark *){border-color:var(--color-slate-700)}.dark\:bg-amber-950\/40:where(.dark,.dark *){background-color:#46190166}@supports (color:color-mix(in lab, red, red)){.dark\:bg-amber-950\/40:where(.dark,.dark *){background-color:color-mix(in oklab, var(--color-amber-950) 40%, transparent)}}.dark\:bg-blue-900\/40:where(.dark,.dark *){background-color:#1c398e66}@supports (color:color-mix(in lab, red, red)){.dark\:bg-blue-900\/40:where(.dark,.dark *){background-color:color-mix(in oklab, var(--color-blue-900) 40%, transparent)}}.dark\:bg-slate-800:where(.dark,.dark *){background-color:var(--color-slate-800)}.dark\:bg-slate-900:where(.dark,.dark *){background-color:var(--color-slate-900)}.dark\:bg-\[linear-gradient\(90deg\,rgba\(15\,31\,69\,1\)_35\%\,rgba\(15\,31\,69\,0\)_100\%\)\]:where(.dark,.dark *){background-image:linear-gradient(90deg,#0f1f45 35%,#0f1f4500 100%)}.dark\:bg-\[linear-gradient\(120deg\,\#0f1f45\,\#12295c\)\]:where(.dark,.dark *){background-image:linear-gradient(120deg,#0f1f45,#12295c)}.dark\:text-\[\#9db9ff\]:where(.dark,.dark *){color:#9db9ff}.dark\:text-\[\#aebbdc\]:where(.dark,.dark *){color:#aebbdc}.dark\:text-amber-400:where(.dark,.dark *){color:var(--color-amber-400)}.dark\:text-blue-300:where(.dark,.dark *){color:var(--color-blue-300)}.dark\:text-slate-200:where(.dark,.dark *){color:var(--color-slate-200)}.dark\:text-slate-400:where(.dark,.dark *){color:var(--color-slate-400)}.dark\:text-white:where(.dark,.dark *){color:var(--color-white)}.dark\:text-white\!:where(.dark,.dark *){color:var(--color-white)!important}.dark\:ring-white\/10:where(.dark,.dark *){--tw-ring-color:#ffffff1a}@supports (color:color-mix(in lab, red, red)){.dark\:ring-white\/10:where(.dark,.dark *){--tw-ring-color:color-mix(in oklab, var(--color-white) 10%, transparent)}}@media (hover:hover){.dark\:hover\:bg-slate-700:where(.dark,.dark *):hover{background-color:var(--color-slate-700)}}}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-tracking{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-drop-shadow-color{syntax:"*";inherits:false}@property --tw-drop-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-drop-shadow-size{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}
</style>
</head>
<body class="page-fade">

{{-- Loading Screen --}}
@include('loading_screen.loading_screen')

<div id="content">

@include('navbar.navbar')

{{-- HERO BANNER + KARTU STATISTIK (Tailwind, CSS statis: public/css/hero.css) --}}
<section aria-label="Hero Banner" class="mx-auto mt-[22px] w-full max-w-[1240px] px-4 sm:px-6">
  <div class="relative flex flex-col overflow-hidden rounded-2xl border border-blue-100 bg-[linear-gradient(90deg,#eff6ff_0%,#eef2ff_50%,#dbeafe_100%)] dark:border-[#1c2f63] dark:bg-[linear-gradient(120deg,#0f1f45,#12295c)] lg:block lg:min-h-[304px]">

    {{-- Bulatan dekoratif --}}
    <div class="pointer-events-none absolute left-[6%] top-[18%] h-16 w-16 rounded-full bg-blue-400/35 blur-[2px]"></div>
    <div class="pointer-events-none absolute left-[34%] top-[70%] h-8 w-8 rounded-full bg-amber-400/35 blur-[2px]"></div>
    <div class="pointer-events-none absolute left-[44%] top-[22%] h-5 w-5 rounded-full bg-emerald-400/35 blur-[2px]"></div>

    {{-- Gambar kanan --}}
    <div class="relative order-first h-[180px] w-full lg:absolute lg:right-0 lg:top-0 lg:order-none lg:h-full lg:w-[45%]">
      <img alt="Kantor Gubernur Sulawesi Tengah" class="h-full w-full object-cover" src="{{ asset('image/kantor gubernur.jpeg') }}">
      <div class="absolute left-0 top-0 hidden h-full w-40 bg-[linear-gradient(90deg,rgba(238,242,255,1)_35%,rgba(238,242,255,0)_100%)] dark:bg-[linear-gradient(90deg,rgba(15,31,69,1)_35%,rgba(15,31,69,0)_100%)] lg:block"></div>
      <div class="absolute left-8 top-0 z-0 hidden h-full w-28 bg-blue-600/80 [clip-path:polygon(60%_0%,100%_0%,40%_100%,0%_100%)] lg:block"></div>
      <div class="absolute -left-6 top-0 z-10 hidden h-full w-36 bg-blue-400/40 [clip-path:polygon(48%_0%,100%_0%,52%_100%,0%_100%)] lg:block"></div>
      <div class="absolute bottom-0 right-0 z-10 hidden h-[72px] w-[72px] bg-blue-500/40 [clip-path:polygon(100%_0%,100%_100%,0%_100%)] lg:block"></div>
      <div class="absolute bottom-0 right-0 z-10 hidden h-28 w-28 bg-blue-500/40 [clip-path:polygon(100%_0%,100%_100%,0%_100%)] lg:block"></div>
      <div class="absolute bottom-0 right-0 z-10 hidden h-[152px] w-[152px] bg-blue-500/40 [clip-path:polygon(100%_0%,100%_100%,0%_100%)] lg:block"></div>
    </div>

    {{-- Teks kiri --}}
    <div class="relative z-10 p-6 lg:pb-[152px]">
      <div class="max-w-[500px]">
        <h1 class="m-0 text-2xl font-bold leading-tight tracking-tight text-blue-800 dark:text-[#9db9ff] md:text-3xl">
          Data Provinsi Sulawesi Tengah Dalam <b class="font-extrabold">Satu Portal</b>
        </h1>
        <p class="mb-0 mt-2.5 text-sm leading-relaxed text-slate-700 dark:text-[#aebbdc] md:text-[14.5px]">
          Satu Data Sulawesi Tengah merangkum seluruh data resmi milik Pemerintah Provinsi dalam satu portal, untuk memberikan kemudahan akses dan mendukung akuntabilitas dan pemanfaatan data.
        </p>

        {{-- Tanda "!" di text-white!/text-slate-900! wajib: CSS `a{color:inherit}` di halaman ini akan menimpa warna Tailwind --}}
        <div class="mt-5 flex flex-wrap gap-3">
          <a href="{{ route('dataset') }}"
             class="inline-flex h-10 cursor-pointer items-center gap-2 rounded-md bg-blue-600 px-4 text-sm font-semibold text-white! shadow-sm transition-all duration-200 hover:bg-blue-700 hover:shadow-md active:scale-[0.98]">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5"/><path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/></svg>
            <span>Jelajahi Dataset</span>
          </a>
          <a href="https://sulteng.bps.go.id" target="_blank" rel="noreferrer"
             class="inline-flex h-10 cursor-pointer items-center gap-2 rounded-md border border-slate-200 bg-white px-4 text-sm font-semibold text-slate-900! transition-all duration-200 hover:bg-slate-50 active:scale-[0.98] dark:border-slate-700 dark:bg-slate-800 dark:text-white! dark:hover:bg-slate-700">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M4 20V10M10 20V4M16 20v-7M22 20H2"/></svg>
            <span>BPS Sulteng</span>
          </a>
        </div>
      </div>

      {{-- Kartu statistik (angka dari DashboardController) --}}
      <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:absolute lg:bottom-6 lg:left-6 lg:z-30 lg:mt-0 lg:w-[calc(3*210px+2*16px)] lg:grid-cols-3">

        {{-- Jumlah dataset --}}
        <div class="flex items-start gap-3.5 rounded-xl bg-white p-4 ring-1 ring-slate-900/10 transition-transform duration-200 hover:-translate-y-0.5 dark:bg-slate-900 dark:ring-white/10">
          <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-blue-600 dark:bg-blue-900/40 dark:text-blue-300">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5"/><path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/></svg>
          </div>
          <div class="min-w-0 flex-1">
            <div class="text-xs font-semibold text-slate-700 dark:text-slate-200">Jumlah dataset</div>
            <div class="mt-1 flex flex-wrap items-baseline gap-2">
              <span class="count-up text-2xl font-extrabold text-slate-900 dark:text-white" data-count="{{ $totalDataset ?? 0 }}">{{ $totalDataset ?? 0 }}</span>
              <span class="inline-flex items-center whitespace-nowrap rounded-md bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-500 dark:bg-slate-800 dark:text-slate-400">↑0%</span>
            </div>
            <div class="mt-1 text-[11px] text-slate-500 dark:text-slate-400">Diperbaharui hari ini</div>
          </div>
        </div>

        {{-- Produsen Data --}}
        <div class="flex items-start gap-3.5 rounded-xl bg-white p-4 ring-1 ring-slate-900/10 transition-transform duration-200 hover:-translate-y-0.5 dark:bg-slate-900 dark:ring-white/10">
          <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-amber-50 text-amber-600 dark:bg-amber-950/40 dark:text-amber-400">
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"><path d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H17V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5Z"/></svg>
          </div>
          <div class="min-w-0 flex-1">
            <div class="text-xs font-semibold text-slate-700 dark:text-slate-200">Produsen Data</div>
            <div class="mt-1 flex flex-wrap items-baseline gap-2">
              <span class="count-up text-2xl font-extrabold text-slate-900 dark:text-white" data-count="{{ $totalOrganisasi ?? 0 }}">{{ $totalOrganisasi ?? 0 }}</span>
              <span class="inline-flex items-center whitespace-nowrap rounded-md bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-500 dark:bg-slate-800 dark:text-slate-400">↑0%</span>
            </div>
            <div class="mt-1 text-[11px] text-slate-500 dark:text-slate-400">Organisasi/OPD</div>
          </div>
        </div>

        {{-- Total Pengunjung --}}
        <div class="flex items-start gap-3.5 rounded-xl bg-white p-4 ring-1 ring-slate-900/10 transition-transform duration-200 hover:-translate-y-0.5 dark:bg-slate-900 dark:ring-white/10">
          <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-blue-50 text-blue-600 dark:bg-blue-900/40 dark:text-blue-300">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><circle cx="9" cy="7" r="4"/><path d="M3 21c0-4 2.7-6 6-6s6 2 6 6"/><path d="M19 8v6M16 11h6"/></svg>
          </div>
          <div class="min-w-0 flex-1">
            <div class="text-xs font-semibold text-slate-700 dark:text-slate-200">Total Pengunjung</div>
            <div class="mt-1 flex flex-wrap items-baseline gap-2">
              <span class="count-up text-2xl font-extrabold text-slate-900 dark:text-white" data-count="{{ $totalPengunjung ?? 0 }}">{{ $totalPengunjung ?? 0 }}</span>
              <span class="inline-flex items-center whitespace-nowrap rounded-md bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-500 dark:bg-slate-800 dark:text-slate-400">↑0%</span>
            </div>
            <div class="mt-1 text-[11px] text-slate-500 dark:text-slate-400">Dari awal tahun 2025</div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

{{-- STATS BAND (bagian KPI lama sudah pindah ke hero di atas) --}}
<div class="db-band db-band-blue">
  <div class="wrap">


    {{-- Stats Section --}}
    <div class="db-stats-head">
      <h2>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M3 17l6-6 4 4 8-8"/><path d="M15 7h6v6"/>
        </svg>
        Ringkasan Statistik provinsi Sulawesi Tengah
      </h2>
      <div class="yr-pick">
        Pilih Tahun
        <select id="statsYear">
          <option>2024</option>
          <option>2025</option>
          <option>2026</option>
        </select>
      </div>
    </div>

    <div class="db-stats-grid">
      {{-- Dataset Tersedia --}}
      <div class="db-stat-chart">
        <div class="lbl">Dataset Tersedia</div>
        <div class="num-row">
          <span class="num" style="color:#e88a1c;">0</span>
          <span class="trend neutral" style="color:#9ca3af;background:#f3f4f6;padding:2px 7px;border-radius:20px;font-size:11px;font-weight:700;">↑0%</span>
        </div>
        <div class="db-stat-chart-big">
          <div class="yaxis-lbl">
            <span>400</span>
            <span>300</span>
            <span>200</span>
            <span>100</span>
            <span>0</span>
          </div>
          <svg viewBox="0 0 520 180" preserveAspectRatio="none">
            <line x1="0" y1="6" x2="520" y2="6" stroke="#eef1f6" stroke-width="1"/>
            <line x1="0" y1="51" x2="520" y2="51" stroke="#eef1f6" stroke-width="1"/>
            <line x1="0" y1="96" x2="520" y2="96" stroke="#eef1f6" stroke-width="1"/>
            <line x1="0" y1="141" x2="520" y2="141" stroke="#eef1f6" stroke-width="1"/>
            <line x1="0" y1="174" x2="520" y2="174" stroke="#eef1f6" stroke-width="1"/>
            <path d="M6,174 L52,174 L98,174 L144,174 L190,174 L236,174 L282,174 L328,174 L374,174 L420,174 L466,174 L514,174" fill="none" stroke="#e88a1c" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6,174 L52,174 L98,174 L144,174 L190,174 L236,174 L282,174 L328,174 L374,174 L420,174 L466,174 L514,174 L514,174 L6,174 Z" fill="#e88a1c" opacity=".1"/>
            <circle cx="6" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="52" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="98" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="144" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="190" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="236" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="282" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="328" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="374" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="420" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="466" cy="174" r="4" fill="#e88a1c"/>
            <circle cx="514" cy="174" r="4" fill="#e88a1c"/>
          </svg>
        </div>
        <div class="xaxis-big">
          <span>Jan</span>
          <span>Feb</span>
          <span>Mar</span>
          <span>Apr</span>
          <span>Mei</span>
          <span>Jun</span>
          <span>Jul</span>
          <span>Agu</span>
          <span>Sep</span>
          <span>Okt</span>
          <span>Nov</span>
          <span>Des</span>
        </div>
      </div>

      {{-- Dataset Dilihat --}}
      <div class="db-stat-chart">
        <div class="lbl">Dataset Dilihat</div>
        <div class="num-row">
          <span class="num" style="color:#e02424;">0</span>
          <span class="trend neutral" style="color:#9ca3af;background:#f3f4f6;padding:2px 7px;border-radius:20px;font-size:11px;font-weight:700;">↓0%</span>
        </div>
        <div class="db-stat-chart-big">
          <div class="yaxis-lbl">
            <span>400</span>
            <span>300</span>
            <span>200</span>
            <span>100</span>
            <span>0</span>
          </div>
          <svg viewBox="0 0 520 180" preserveAspectRatio="none">
            <line x1="0" y1="6" x2="520" y2="6" stroke="#eef1f6" stroke-width="1"/>
            <line x1="0" y1="51" x2="520" y2="51" stroke="#eef1f6" stroke-width="1"/>
            <line x1="0" y1="96" x2="520" y2="96" stroke="#eef1f6" stroke-width="1"/>
            <line x1="0" y1="141" x2="520" y2="141" stroke="#eef1f6" stroke-width="1"/>
            <line x1="0" y1="174" x2="520" y2="174" stroke="#eef1f6" stroke-width="1"/>
            <path d="M6,174 L52,174 L98,174 L144,174 L190,174 L236,174 L282,174 L328,174 L374,174 L420,174 L466,174 L514,174" fill="none" stroke="#e02424" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6,174 L52,174 L98,174 L144,174 L190,174 L236,174 L282,174 L328,174 L374,174 L420,174 L466,174 L514,174 L514,174 L6,174 Z" fill="#e02424" opacity=".1"/>
            <circle cx="6" cy="174" r="4" fill="#e02424"/>
            <circle cx="52" cy="174" r="4" fill="#e02424"/>
            <circle cx="98" cy="174" r="4" fill="#e02424"/>
            <circle cx="144" cy="174" r="4" fill="#e02424"/>
            <circle cx="190" cy="174" r="4" fill="#e02424"/>
            <circle cx="236" cy="174" r="4" fill="#e02424"/>
            <circle cx="282" cy="174" r="4" fill="#e02424"/>
            <circle cx="328" cy="174" r="4" fill="#e02424"/>
            <circle cx="374" cy="174" r="4" fill="#e02424"/>
            <circle cx="420" cy="174" r="4" fill="#e02424"/>
            <circle cx="466" cy="174" r="4" fill="#e02424"/>
            <circle cx="514" cy="174" r="4" fill="#e02424"/>
          </svg>
        </div>
        <div class="xaxis-big">
          <span>Jan</span>
          <span>Feb</span>
          <span>Mar</span>
          <span>Apr</span>
          <span>Mei</span>
          <span>Jun</span>
          <span>Jul</span>
          <span>Agu</span>
          <span>Sep</span>
          <span>Okt</span>
          <span>Nov</span>
          <span>Des</span>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- MAIN CONTENT SECTION --}}
<div class="wrap" style="margin-top:36px;">
  <div class="db-main-grid">
    
    {{-- PETA INTERAKTIF --}}
    <div class="db-panel">
      <div class="db-panel-head">
        <div class="db-panel-head-left">
          <div class="db-panel-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M9 20l-6-3V4l6 3 6-3 6 3v13l-6-3-6 3z"/>
              <path d="M9 7v13M15 4v13"/>
            </svg>
          </div>
          <div class="db-panel-head-text">
            <h3>Visualisasi Data dalam Peta Interaktif</h3>
            <p>Pilih wilayah kabupaten/kota untuk melihat informasi terkait</p>
          </div>
        </div>
      </div>
      <div class="db-map-outer">
        <div class="db-map-canvas" id="mapCanvas" style="height:400px;">
          <div class="db-map-zoom">
            <button type="button" data-zoom="in">+</button>
            <button type="button" data-zoom="out">−</button>
          </div>
          <svg id="mapSvg" viewBox="0 0 640 620"></svg>
        </div>
        <div class="db-pop-panel">
          <h4>Peringkat Jumlah Dataset</h4>
          <div class="db-pop-total">
            <span>Sulawesi Tengah (Provinsi)</span>
            <span>0 Dataset</span>
          </div>
          <div class="db-pop-list" id="popList">
            {{-- Will be populated by JavaScript --}}
          </div>
        </div>
      </div>
    </div>

    {{-- FOKUS DATA STRATEGI --}}
    <div class="db-side-col">
      <div class="db-panel db-focus-card">
        <div class="db-focus-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="3" width="7" height="7" rx="1"/>
            <rect x="14" y="3" width="7" height="7" rx="1"/>
            <rect x="3" y="14" width="7" height="7" rx="1"/>
            <rect x="14" y="14" width="7" height="7" rx="1"/>
          </svg>
        </div>
        <div>
          <h3 style="margin:0 0 4px;font-size:15px;">Fokus Data Strategi</h3>
          <p>Informasi penting yang perlu menjadi perhatian</p>
        </div>
      </div>

      <div class="db-side-grid">
        {{-- Card 1: Dataset Perlu Diperbaharui --}}
        <div class="db-mini-card">
          <div class="mini-top">
            <div class="mini-icon" style="background:#fff2e0;color:#e88a1c;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="4" width="18" height="18" rx="2"/>
                <path d="M3 9h18M8 2v4M16 2v4"/>
              </svg>
            </div>
          </div>
          <div class="mini-lbl">Dataset Perlu Diperbaharui</div>
          <div class="mini-num">0 <span style="font-size:11px;font-weight:600;color:var(--ink-500,#5b6478);">Dataset</span></div>
          <svg class="db-mini-spark" viewBox="0 0 120 34" preserveAspectRatio="none">
            <polyline points="0,22 12,22 24,22 36,22 48,22 60,22 72,22 84,22 96,22 108,22 120,22" fill="none" stroke="#e88a1c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <a href="#" style="font-size:11.5px;color:#1c5cf0;font-weight:600;margin-top:4px;display:block;">Lihat Selengkapnya →</a>
        </div>

        {{-- Card 2: Topik Data Terbanyak --}}
        <div class="db-mini-card">
          <div class="mini-top">
            <div class="mini-icon" style="background:#e4f7ea;color:#1a9a52;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4h16v16H4z"/>
                <path d="M8 4v16M14 4v16"/>
              </svg>
            </div>
          </div>
          <div class="mini-lbl" style="margin-bottom:2px;">Topik Data Terbanyak</div>
          <div class="db-topic-row">
            <div class="db-topic-list">
              <div class="t"><span>1. Kependudukan</span><b>0 Dataset</b></div>
              <div class="bar"><span style="width:0%;background:#1a9a52;"></span></div>
              <div class="t"><span>2. Pemerintahan</span><b>0 Dataset</b></div>
              <div class="bar"><span style="width:0%;background:#1a9a52;"></span></div>
              <div class="t"><span>3. Kesehatan</span><b>0 Dataset</b></div>
              <div class="bar"><span style="width:0%;background:#1a9a52;"></span></div>
            </div>
            <div class="db-mini-bars">
              <span style="height:0%;background:#1a9a52;"></span>
              <span style="height:0%;background:#1a9a52;"></span>
              <span style="height:0%;background:#1a9a52;"></span>
              <span style="height:0%;background:#1a9a52;"></span>
              <span style="height:0%;background:#1a9a52;"></span>
              <span style="height:0%;background:#1a9a52;"></span>
            </div>
          </div>
        </div>

        {{-- Card 3: Dataset Tanpa Metadata --}}
        <div class="db-mini-card">
          <div class="mini-top">
            <div class="mini-icon" style="background:#eef0f4;color:#333c4d;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 2h9l5 5v15H6z"/>
                <path d="M15 2v5h5M9 13h6M9 17h6"/>
              </svg>
            </div>
          </div>
          <div class="mini-lbl">Dataset Tanpa Metadata</div>
          <div class="mini-num">0 <span style="font-size:11px;font-weight:600;color:var(--ink-500,#5b6478);">Dataset</span></div>
          <svg class="db-mini-spark" viewBox="0 0 120 34" preserveAspectRatio="none">
            <polyline points="0,26 12,26 24,26 36,26 48,26 60,26 72,26 84,26 96,26 108,26 120,26" fill="none" stroke="#333c4d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <a href="#" style="font-size:11.5px;color:#1c5cf0;font-weight:600;margin-top:4px;display:block;">Lihat Selengkapnya →</a>
        </div>

        {{-- Card 4: Organisasi dengan Dataset Terbanyak --}}
        <div class="db-mini-card">
          <div class="mini-top">
            <div class="mini-icon" style="background:#e8f0fe;color:#1c5cf0;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="10" width="7" height="11"/>
                <rect x="14" y="4" width="7" height="17"/>
              </svg>
            </div>
          </div>
          <div class="mini-lbl" style="margin-bottom:6px;">Organisasi dengan Dataset Terbanyak</div>
          <div class="db-donut-row">
            <svg width="56" height="56" viewBox="0 0 36 36">
              <circle cx="18" cy="18" r="15.5" fill="none" stroke="#eef1f6" stroke-width="5"></circle>
              <circle cx="18" cy="18" r="15.5" fill="none" stroke="#1c5cf0" stroke-width="5" stroke-dasharray="0 100" stroke-dashoffset="25" transform="rotate(-90 18 18)"></circle>
              <circle cx="18" cy="18" r="15.5" fill="none" stroke="#5b8bff" stroke-width="5" stroke-dasharray="0 100" stroke-dashoffset="-14" transform="rotate(-90 18 18)"></circle>
              <circle cx="18" cy="18" r="15.5" fill="none" stroke="#a9c3ff" stroke-width="5" stroke-dasharray="0 100" stroke-dashoffset="-43" transform="rotate(-90 18 18)"></circle>
            </svg>
            <div class="db-donut-legend">
              <div><span class="dot" style="background:#1c5cf0;"></span>1. Diskominfo · <b>0 Dataset</b></div>
              <div><span class="dot" style="background:#5b8bff;"></span>2. BPS Sulteng · <b>0 Dataset</b></div>
              <div><span class="dot" style="background:#a9c3ff;"></span>3. Dinas Pendidikan · <b>0 Dataset</b></div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

</div>

<script>
// Theme toggle
(function(){
  const saved = localStorage.getItem('sd_theme');
  if(saved === 'dark') document.body.classList.add('dark');
  document.querySelectorAll('[data-theme-toggle]').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      document.body.classList.toggle('dark');
      localStorage.setItem('sd_theme', document.body.classList.contains('dark') ? 'dark' : 'light');
    });
  });
})();

// Count Up Animation
function countUp(el){
  const target = parseInt(el.dataset.count, 10) || 0;
  const dur = 900;
  const start = performance.now();
  function tick(now){
    const p = Math.min(1, (now-start)/dur);
    const eased = 1 - Math.pow(1-p, 3);
    el.textContent = Math.round(target*eased).toLocaleString('id-ID');
    if(p < 1) requestAnimationFrame(tick);
    else el.textContent = target.toLocaleString('id-ID');
  }
  requestAnimationFrame(tick);
}

const countObserver = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{
    if(e.isIntersecting){ 
      countUp(e.target); 
      countObserver.unobserve(e.target); 
    }
  });
},{threshold:.4});

document.querySelectorAll('.count-up').forEach(el=>countObserver.observe(el));

// MAP DATA - Sulawesi Tengah
const KAB_DATA = [
  {id:"banggai",name:"Kab. Banggai",color:"#ef4444",path:"M323.0,367.9L319.2,362.9L320.5,353.2L316.9,348.4L320.6,346.9L321.9,343.4L316.3,334.7L320.1,336.1L325.6,330.1L327.5,324.0L319.1,308.5L316.2,311.2L310.1,307.4L307.8,309.6L305.8,305.5L300.8,302.8L298.2,290.5L308.5,292.8L315.9,286.2L327.8,288.4L332.7,283.0L334.4,272.0L337.7,271.7L339.3,268.8L365.0,268.3L370.3,265.3L378.2,268.6L384.9,268.3L389.0,265.7L397.5,271.5L402.5,271.8L410.0,267.4L430.4,264.8L429.1,262.6L422.2,262.8L419.4,259.6L408.9,258.9L402.3,253.6L408.9,254.6L412.0,250.4L416.2,251.3L418.9,248.9L420.6,250.9L429.4,248.5L427.9,249.5L430.0,251.6L431.3,248.6L440.2,245.7L441.9,242.1L466.2,243.8L484.3,252.8L480.6,254.7L485.4,260.4L488.2,259.6L486.1,263.6L489.8,266.7L487.1,270.0L488.1,274.9L481.9,281.1L482.6,288.6L477.4,298.1L473.6,300.1L466.8,299.3L464.5,295.2L452.2,288.6L451.1,282.4L453.4,282.2L453.0,280.2L447.1,274.5L442.3,278.8L444.0,280.1L442.2,281.8L439.5,281.5L440.1,278.9L438.4,280.0L440.0,283.2L435.7,281.5L412.3,286.6L409.5,291.4L411.0,294.6L402.6,304.5L401.0,310.3L395.5,310.7L394.6,313.9L391.4,314.0L391.2,322.4L382.4,326.3L382.4,331.5L365.5,346.9L362.3,353.2L351.8,358.0L340.9,366.7L323.0,367.9Z",cx:385.7,cy:296.5,jiwa:0,rank:3},
  {id:"parmout",name:"Kab. Parigi Moutong",color:"#e88a1c",path:"M235.7,117.5L226.7,116.0L223.6,119.7L217.3,120.0L214.9,125.0L209.1,126.6L205.2,126.9L199.1,121.9L183.5,127.2L178.3,121.6L172.9,120.3L173.0,117.7L167.9,119.9L158.5,113.1L139.4,112.7L128.2,118.8L125.2,117.5L118.3,120.5L105.2,132.8L100.6,142.4L91.6,153.3L92.4,157.9L88.8,163.2L87.5,178.3L84.1,181.7L80.7,181.7L80.9,191.4L77.2,195.8L77.2,208.8L79.8,210.9L81.0,221.3L84.8,227.4L82.0,233.3L83.2,249.8L92.0,267.0L97.0,270.0L99.7,275.8L102.7,275.8L113.1,290.0L125.4,285.1L131.2,293.2L136.9,293.9L139.5,299.8L145.6,306.9L116.5,316.9L118.8,311.7L116.6,312.7L111.6,310.1L108.1,312.4L103.4,309.2L102.3,302.0L85.6,296.1L83.0,290.2L84.7,283.7L78.9,280.2L81.4,273.8L78.3,264.6L80.1,256.5L76.4,250.3L76.3,245.3L67.9,235.0L69.1,229.6L66.8,227.3L65.8,218.6L67.6,210.8L64.7,206.9L68.7,199.7L64.2,190.9L69.8,183.1L69.0,175.9L71.5,164.4L76.3,159.9L80.6,159.0L81.5,153.9L87.6,149.8L87.7,145.3L82.7,140.4L82.9,134.5L86.1,128.3L91.3,125.7L89.7,123.2L91.7,119.7L94.9,118.5L95.1,111.0L100.4,105.7L99.2,100.9L103.6,101.8L118.7,93.4L128.6,95.1L129.8,97.6L140.5,98.5L141.7,103.3L145.0,101.7L151.1,104.2L160.6,94.5L173.6,93.7L178.9,89.7L187.8,92.4L197.0,89.8L201.9,91.9L207.3,91.0L215.2,93.6L219.3,97.7L223.0,97.3L224.4,102.5L232.0,106.5L236.1,105.8L237.7,108.1L235.7,113.3L237.8,115.6L235.7,117.5Z",cx:130.0,cy:172.4,jiwa:0,rank:1},
  {id:"palu",name:"Kota Palu",color:"#1c5cf0",path:"M80.5,276.0L78.2,281.7L67.7,284.7L68.1,287.5L61.3,284.9L55.9,287.2L54.9,279.1L52.2,278.5L48.4,281.4L47.4,274.6L53.2,270.4L56.8,279.7L60.7,280.2L62.3,272.8L59.3,267.6L59.8,260.3L57.4,257.9L59.4,253.3L67.5,250.6L60.8,257.7L70.7,256.0L71.4,258.1L62.1,261.7L63.6,264.4L61.1,266.6L73.0,271.3L77.7,269.5L80.5,276.0Z",cx:65.0,cy:273.7,jiwa:0,rank:2},
  {id:"donggala",name:"Kab. Donggala",color:"#22c55e",path:"M52.8,270.6L47.4,274.6L50.3,282.7L45.7,284.5L43.9,282.3L34.0,290.5L38.2,295.9L46.6,295.2L52.7,304.8L52.8,311.3L45.6,324.7L43.6,335.8L47.8,344.9L43.6,344.5L39.9,348.3L33.2,342.5L27.3,341.6L26.2,345.1L22.0,346.5L21.3,344.7L17.3,348.1L18.5,343.5L16.5,341.2L13.7,341.9L10.0,335.2L12.0,332.3L18.6,331.9L19.1,329.4L14.1,331.2L13.1,329.8L19.2,324.3L21.3,318.2L24.0,318.4L24.9,312.0L28.6,313.2L29.5,310.4L29.1,308.4L27.4,309.1L25.3,296.4L23.1,295.3L22.7,286.8L25.0,279.8L23.6,276.4L29.9,274.4L31.0,270.4L34.6,268.3L34.1,270.8L35.8,270.4L35.1,267.9L38.5,264.2L35.6,260.3L41.4,256.4L44.1,251.6L52.8,270.6Z",cx:56.5,cy:221.8,jiwa:0,rank:4},
  {id:"sigi",name:"Kab. Sigi",color:"#0ea5b7",path:"M78.9,280.2L84.7,283.7L83.0,290.2L85.6,296.1L102.3,302.0L103.4,309.2L108.1,312.4L111.6,310.1L118.9,311.8L117.1,316.6L110.8,318.3L108.5,321.9L103.9,321.1L103.0,324.2L98.3,326.9L107.0,332.8L110.6,339.4L102.6,348.8L96.5,349.0L87.9,360.8L93.2,362.5L92.4,372.1L97.4,387.6L89.0,390.3L88.2,392.7L93.4,400.2L90.9,402.6L88.6,401.6L88.0,412.1L75.2,409.7L64.3,420.5L60.1,415.2L59.0,399.0L61.2,397.4L59.1,392.6L60.7,387.4L51.9,382.6L46.2,371.1L43.6,371.3L44.2,366.5L36.2,357.7L41.4,346.1L47.8,344.9L43.6,335.8L45.6,324.7L52.8,311.3L52.7,304.8L46.6,295.2L38.2,295.9L34.0,290.5L43.9,282.3L45.7,284.5L50.3,282.7L52.2,278.5L54.9,279.1L55.9,287.2L61.3,284.9L68.1,287.5L67.7,284.7L78.9,280.2Z",cx:72.6,cy:342.9,jiwa:0,rank:5},
  {id:"poso",name:"Kab. Poso",color:"#f59e0b",path:"M182.7,343.6L184.1,358.6L191.2,368.8L181.7,369.0L175.9,384.0L179.5,394.9L187.3,403.5L176.7,418.6L176.9,440.0L166.6,442.4L150.6,433.2L124.4,401.3L122.6,401.6L116.8,421.2L108.5,417.2L98.1,418.1L89.9,414.9L88.0,412.1L88.4,402.1L93.4,400.2L88.2,392.7L89.5,389.6L97.4,387.6L92.4,372.1L93.2,362.5L87.9,360.8L89.4,356.4L97.6,348.0L102.6,348.8L106.0,343.6L109.3,342.9L109.3,335.7L98.3,326.9L103.0,324.2L103.7,321.2L108.5,321.9L113.6,316.9L145.5,307.2L147.1,314.2L144.3,319.1L144.5,324.8L152.4,331.0L153.2,337.9L156.9,343.8L159.2,344.3L172.2,336.1L176.7,337.0L177.1,342.5L182.7,343.6Z",cx:138.4,cy:375.5,jiwa:0,rank:6},
  {id:"tolitoli",name:"Kab. Toli-Toli",color:"#7c9dfb",path:"M216.9,23.7L205.4,36.8L207.0,43.7L196.6,51.0L199.0,54.6L196.5,71.4L182.7,80.4L176.4,92.3L166.4,95.3L160.6,94.5L151.1,104.2L145.0,101.7L141.7,103.3L140.5,98.5L129.8,97.6L128.6,95.1L118.7,93.4L103.6,101.8L99.2,100.9L99.6,90.7L92.5,85.0L104.6,78.7L105.7,60.2L109.7,56.6L118.5,56.8L115.3,72.2L119.6,75.4L120.7,70.7L123.6,79.7L132.8,81.5L140.0,79.7L142.4,81.7L141.7,84.2L147.1,84.9L144.8,82.5L149.1,77.7L148.4,70.2L152.1,62.1L156.3,59.0L158.6,60.5L157.3,58.5L159.5,56.5L162.4,57.8L161.4,59.8L163.3,59.4L166.9,53.6L172.8,51.4L169.1,41.6L170.4,35.3L174.5,34.3L175.1,32.0L173.1,28.8L173.0,16.0L180.1,16.9L184.2,12.2L185.6,14.5L183.7,14.9L184.5,16.8L182.6,16.1L183.2,18.5L187.2,16.8L188.8,13.0L203.3,18.7L207.7,17.0L216.9,23.7Z",cx:162.0,cy:63.8,jiwa:0,rank:7},
  {id:"buol",name:"Kab. Buol",color:"#5b8bff",path:"M246.2,32.3L257.0,44.5L262.8,47.5L271.4,47.6L273.6,50.0L274.1,47.1L277.6,46.3L281.1,50.0L280.7,45.1L284.3,47.1L307.3,42.7L309.8,49.9L313.2,52.1L323.5,46.0L335.0,50.9L337.5,48.1L338.8,50.3L320.5,56.1L312.5,66.3L297.6,55.8L292.9,60.8L268.0,70.0L260.0,69.7L259.5,72.4L254.8,74.1L237.6,72.7L238.0,79.4L221.5,79.8L215.2,93.6L197.0,89.8L187.8,92.4L177.3,90.9L182.7,80.4L196.5,71.4L199.0,54.6L196.6,51.0L207.0,43.7L205.4,36.8L213.9,25.9L217.8,23.1L226.3,27.3L236.1,23.5L238.5,25.2L244.2,23.5L249.9,17.6L252.1,18.8L252.3,23.5L245.2,27.1L247.7,26.8L246.2,32.3Z",cx:240.3,cy:57.6,jiwa:0,rank:11},
  {id:"morowali",name:"Kab. Morowali",color:"#a855f7",path:"M316.2,498.3L325.7,508.2L332.1,508.2L335.5,512.2L337.5,512.4L337.7,518.3L340.3,521.6L345.4,518.8L353.1,522.8L352.2,528.3L345.6,535.6L355.6,543.8L359.9,550.4L366.5,548.7L368.7,552.9L371.0,551.4L373.6,554.9L366.7,556.5L367.0,566.4L363.4,562.2L358.4,564.0L359.6,560.5L354.4,561.7L352.6,566.2L350.8,559.7L353.0,553.2L349.5,550.4L342.2,549.8L336.0,543.6L336.9,537.4L327.2,534.4L323.7,527.7L305.8,532.3L298.4,529.2L295.5,530.2L277.8,521.6L275.9,514.7L282.4,510.5L282.2,505.7L290.3,492.4L279.5,477.8L274.1,478.5L270.7,472.5L263.0,472.7L248.6,462.4L250.7,450.1L254.7,444.0L254.7,435.8L260.9,431.6L262.9,434.6L269.2,436.2L276.7,434.4L282.4,437.5L290.8,448.2L294.5,449.1L300.6,462.3L311.3,476.6L315.6,488.9L319.7,492.6L316.6,494.6L316.2,498.3Z",cx:304.1,cy:496.2,jiwa:0,rank:8},
  {id:"morout",name:"Kab. Morowali Utara",color:"#c084fc",path:"M310.3,328.4L311.1,333.8L318.9,336.5L321.9,343.4L320.6,346.9L316.9,348.4L320.5,353.2L319.2,362.9L323.0,367.9L319.0,367.5L310.5,375.5L303.9,378.1L299.0,374.5L298.8,378.2L301.9,378.7L298.5,379.1L297.6,377.1L292.4,381.6L287.1,396.4L281.0,404.8L274.1,408.6L263.2,408.7L253.6,398.3L250.5,399.1L251.8,396.7L249.4,398.0L251.7,394.0L250.3,391.2L245.9,392.6L233.0,386.3L234.1,388.0L231.6,389.6L231.0,396.6L234.9,397.6L237.2,395.8L238.8,398.2L235.3,399.5L237.2,401.9L233.3,405.4L237.3,408.1L236.7,413.9L241.3,410.8L240.9,403.7L244.5,402.7L246.1,408.7L249.6,413.3L255.4,417.0L256.4,420.2L259.3,419.6L260.9,427.0L260.9,431.6L253.8,436.7L254.7,444.0L250.7,450.1L248.6,462.4L223.6,457.1L217.6,458.8L207.8,446.9L199.9,446.8L191.0,441.8L176.9,440.0L176.7,418.6L187.3,403.5L179.5,394.9L176.0,385.2L181.7,369.0L196.6,368.9L204.6,363.6L218.2,362.0L221.0,355.5L226.6,351.1L237.9,350.8L247.6,342.6L251.5,342.6L252.6,339.0L256.3,339.2L264.0,345.0L275.2,337.8L282.4,337.1L294.3,330.8L299.8,331.9L310.3,328.4Z",cx:242.0,cy:391.5,jiwa:0,rank:12},
  {id:"tojo",name:"Kab. Tojo Una-Una",color:"#eab308",path:"M275.8,277.2L274.4,283.8L281.2,288.4L286.9,290.7L293.5,288.9L298.2,290.5L300.0,301.7L306.0,305.6L307.8,309.6L310.1,307.4L316.2,311.2L319.1,308.5L327.5,324.0L325.6,330.1L320.1,336.1L316.8,334.4L315.6,336.6L313.0,335.8L310.9,333.4L311.6,329.0L309.4,328.0L299.8,331.9L294.3,330.8L282.4,337.1L275.2,337.8L264.0,345.0L256.3,339.2L252.6,339.0L251.5,342.6L247.6,342.6L237.9,350.8L226.6,351.1L221.0,355.5L218.2,362.0L204.6,363.6L196.6,368.9L191.2,368.8L184.1,358.6L182.5,343.3L193.5,342.0L200.5,343.6L200.5,346.1L207.9,346.5L215.3,338.1L222.4,318.4L229.2,313.2L236.2,301.8L242.7,298.4L243.2,294.8L249.7,290.7L253.3,282.2L265.9,278.3L267.2,273.3L273.9,270.5L275.8,277.2Z",cx:264.1,cy:308.9,jiwa:0,rank:9},
  {id:"bangkep",name:"Kab. Banggai Kepulauan",color:"#f87171",path:"M455.6,312.0L458.2,312.6L464.8,321.7L461.1,326.6L458.0,325.3L457.1,332.7L462.3,337.2L463.6,341.8L467.4,339.9L469.8,331.1L472.6,330.6L479.7,320.9L484.3,321.3L483.4,324.4L486.1,326.4L488.4,326.1L488.2,322.5L493.4,326.4L501.6,327.5L501.7,333.9L496.5,348.6L491.6,349.5L489.7,356.1L487.7,354.6L484.4,357.7L479.5,353.8L477.5,357.1L477.6,350.8L474.4,348.6L473.8,344.1L469.7,343.8L465.8,347.6L463.6,360.2L465.6,370.6L463.5,371.4L462.5,365.7L453.6,370.7L453.1,367.7L446.8,365.1L447.9,362.0L450.4,362.2L457.2,355.7L454.6,348.4L454.9,330.6L452.2,329.7L449.7,332.3L449.0,330.4L441.9,340.8L434.9,355.9L428.6,359.5L424.5,365.7L419.4,365.5L413.5,352.0L411.0,353.1L409.5,348.8L414.8,327.5L419.4,324.4L423.7,316.0L428.3,316.3L431.9,319.9L439.0,315.5L447.9,313.5L452.2,319.4L455.6,312.0Z",cx:452.2,cy:338.7,jiwa:0,rank:10},
  {id:"banglaut",name:"Kab. Banggai Laut",color:"#fb923c",path:"M498.7,351.4L502.3,359.2L502.0,365.8L504.2,367.2L505.9,365.3L509.6,368.9L509.3,370.7L507.3,369.8L509.1,372.0L508.4,377.8L503.1,381.3L499.3,381.0L497.3,378.4L496.4,380.7L493.5,379.5L491.7,372.5L494.8,365.0L492.5,364.0L492.4,359.8L495.7,353.6L498.3,355.0L498.7,351.4Z",cx:498.1,cy:386.7,jiwa:0,rank:13}
];

const TOTAL_JIWA = 0;

function updatePopulationPanel(selectedId = null) {
  const popList = document.getElementById('popList');
  const popTotal = document.querySelector('.db-pop-total');
  
  if (!popList) return;
  
  let dataToShow = selectedId 
    ? KAB_DATA.filter(k => k.id === selectedId)
    : KAB_DATA.slice().sort((a,b) => b.jiwa - a.jiwa).slice(0,6);
  
  const maxJiwa = dataToShow[0].jiwa || 1;
  
  // Update total
  if (selectedId) {
    const selected = KAB_DATA.find(k => k.id === selectedId);
    popTotal.innerHTML = `<span>${selected.name}</span><span>0 Dataset</span>`;
  } else {
    popTotal.innerHTML = `<span>Sulawesi Tengah (Provinsi)</span><span>0 Dataset</span>`;
  }
  
  // Render list
  popList.innerHTML = dataToShow.map((k, i) => {
    const ratio = k.jiwa / maxJiwa;
    const c1 = [234,241,255], c2 = [28,92,240];
    const rgb = c1.map((v,idx) => Math.round(v + (c2[idx]-v)*ratio));
    const bg = `rgb(${rgb.join(',')})`;
    const textColor = ratio > 0.55 ? '#fff' : '#1c5cf0';
    const fillW = maxJiwa === 1 ? 0 : (k.jiwa / maxJiwa * 100).toFixed(1);
    
    return `
      <div class="db-pop-row">
        <span class="fill" style="width:${fillW}%;background:${bg};"></span>
        <span class="rank" style="background:${bg};color:${textColor};">${selectedId ? k.rank : i+1}</span>
        <span class="name">${k.name}</span>
        <span class="val">0 Dataset</span>
      </div>`;
  }).join('');
}

const mapSvg = document.getElementById('mapSvg');
if(mapSvg){
  // Render paths
  const paths = KAB_DATA.map(k => `<path d="${k.path}" fill="${k.color}" data-id="${k.id}"${k.id==='palu'?' class="active"':''}><title>${k.name}</title></path>`).join('');
  
  // Render labels
  const labels = KAB_DATA.map(k => `<text class="kab-label" x="${k.cx}" y="${k.cy}" text-anchor="middle">${k.name.replace('Kab. ','').replace('Kota ','')}</text>`).join('');
  
  mapSvg.innerHTML = paths + labels;
  
  // Click handler with toggle functionality
  let currentSelectedId = null;
  
  document.querySelectorAll('#mapSvg path').forEach(el=>{
    el.addEventListener('click', ()=>{
      const selectedId = el.dataset.id;
      
      // Toggle: if clicking the same region, deselect it and show all data
      if (currentSelectedId === selectedId) {
        // Deselect - show all data
        document.querySelectorAll('#mapSvg path').forEach(p=>p.classList.remove('active'));
        updatePopulationPanel(null);
        currentSelectedId = null;
        console.log('Deselected - showing all data');
      } else {
        // Select new region - show only that region's data
        document.querySelectorAll('#mapSvg path').forEach(p=>p.classList.remove('active'));
        el.classList.add('active');
        updatePopulationPanel(selectedId);
        currentSelectedId = selectedId;
        console.log('Selected:', selectedId);
      }
    });
  });
  
  // Initialize with default (all data)
  updatePopulationPanel();
  
  // Zoom functionality
  let mapZoom = 1;
  document.querySelectorAll('[data-zoom]').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      mapZoom = btn.dataset.zoom === 'in' ? Math.min(2.4, mapZoom + 0.2) : Math.max(1, mapZoom - 0.2);
      mapSvg.style.transform = `scale(${mapZoom})`;
    });
  });
}

</script>

{{-- FOOTER --}}
<footer class="site-footer">
  <div class="wrap">
    <div class="footer-grid">
      {{-- Column 1: Satu Data Info --}}
      <div class="footer-col">
        <div class="footer-brand">
          <img src="{{ asset('image/logo-kominfo.png') }}" alt="Logo Kominfo" style="width:48px;height:48px;border-radius:10px;background:#fff;padding:4px;">
          <div>
            <h3>SATU DATA</h3>
            <span>PROVINSI SULAWESI TENGAH</span>
          </div>
        </div>
        <p class="footer-desc">Mewujudkan data yang akurat, mutakhir, terpadu, dapat dipertanggungjawabkan, serta mudah diakses untuk mendukung pembangunan Provinsi Sulawesi Tengah.</p>
      </div>

      {{-- Column 2: Kontak Kami --}}
      <div class="footer-col">
        <h4>Kontak Kami</h4>
        <ul class="footer-links">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
            <span>Jl. R.A. Kartini No. 106 94117</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span>04513459909</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="4" width="20" height="16" rx="2"/>
              <path d="m2 7 10 7 10-7"/>
            </svg>
            <span>dinsa@diskominfo.sultengprov.go.id</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
              <path d="M2 12h20"/>
            </svg>
            <span>www.kominfo.sultengprov.go.id</span>
          </li>
        </ul>
      </div>

      {{-- Column 3: Peta Lokasi (Koordinat Diskominfo Kota Palu: -0.9015484, 119.8840406) --}}
      <div class="footer-col">
        <h4>Peta Lokasi</h4>
        <div class="footer-map">
          <iframe src="https://www.google.com/maps?q=-0.9015484,119.8840406&hl=id&z=16&output=embed" width="100%" height="180" style="border:0;border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      {{-- Column 4: Informasi --}}
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
        <img src="{{ asset('image/logo-sulteng.png') }}" alt="Logo Sulteng" style="height:40px;">
        <div>
          <strong>PEMERINTAH PROVINSI SULAWESI TENGAH</strong>
          <span>DINAS KOMUNIKASI, INFORMATIKA, PERSANDIAN DAN STATISTIK</span>
        </div>
      </div>
      <div class="footer-copyright">
        <p>© 2026 Dinas Komunikasi, Informatika, Persandian dan Statistik Provinsi Sulawesi Tengah</p>
        <button class="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 19V5M5 12l7-7 7 7"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</footer>

</body>
</html>