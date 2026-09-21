{{-- NAVBAR --}}
<header class="site-header">
  <div class="wrap">
    <a href="{{ route('dashboard') }}" class="brand">
      <span class="logo-mark-wrap">
        <img src="{{ asset('image/logo-sulteng.png') }}" alt="Logo Sulawesi Tengah">
      </span>
      <div class="brand-text"><b>SATU DATA</b><span>PROVINSI SULAWESI TENGAH</span></div>
    </a>
    <nav class="main-nav">
      <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M3 11l9-8 9 8"/><path d="M5 10v10h14V10"/>
        </svg>
        Home
      </a>
      <a href="{{ route('dataset') }}" class="{{ request()->routeIs('dataset') ? 'active' : '' }}">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5"/><path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/>
        </svg>
        Datasets
      </a>
      <a href="{{ route('organisasi') }}" class="{{ request()->routeIs('organisasi') ? 'active' : '' }}">
        <svg viewBox="0 0 24 24" fill="currentColor">
          <path d="M21 19H23V21H1V19H3V4C3 3.44772 3.44772 3 4 3H14C14.5523 3 15 3.44772 15 4V19H17V11H17V9H20C20.5523 9 21 9.44772 21 10V19ZM5 5V19H13V5H5Z"/>
        </svg>
        Organizations
      </a>
      <a href="#">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/>
        </svg>
        Panduan API
      </a>
    </nav>
    <div class="header-actions">
      <a href="{{ route('login') }}" class="btn btn-primary" style="padding:8px 16px;font-size:13px;">Masuk</a>
      <button class="icon-btn" data-theme-toggle title="Ganti tema">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4"/>
        </svg>
      </button>
    </div>
  </div>
</header>