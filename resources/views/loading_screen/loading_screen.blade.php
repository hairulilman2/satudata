{{-- Loading Screen Component --}}
<?php
$logo = $logo ?? 'image/logo-sulteng.png';
$logo2 = $logo2 ?? 'image/logo-kominfo.png';
$text = $text ?? 'SATUDATA SULTENG';
?>

<div id="loader">
    <div class="logo-group">
        <img class="logo" src="{{ asset($logo) }}" alt="Logo {{ $text }}">
        @if ($logo2)
            <img class="logo" src="{{ asset($logo2) }}" alt="Logo Kominfo">
        @endif
    </div>
    <div id="brand-text" data-text="{{ $text }}"></div>
</div>

<style>
    #loader {
        position: fixed;
        inset: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 18px;
        background: #e9ecef;
        z-index: 9999;
        transition: opacity .6s ease, visibility .6s ease;
    }
    #loader.hide {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }
    #loader .logo-group {
        display: flex;
        align-items: center;
        gap: 18px;
    }
    #loader .logo {
        width: 64px;
        height: auto;
        opacity: 0;
        transform: translateY(-8px) scale(.9);
        animation: fadeInLogo .9s ease-out forwards;
    }
    #loader .logo-group .logo:nth-child(2) {
        animation-delay: .15s;
    }
    #brand-text {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 6px;
        font-family: "Segoe UI", Arial, sans-serif;
        opacity: 0;
        animation: fadeInText .9s ease-out forwards;
        animation-delay: .15s;
    }
    #brand-text span {
        display: inline-block;
        color: #afafaf;
        animation: wave 1.8s ease-in-out infinite;
        animation-delay: var(--wave-delay, 0s);
    }
    #brand-text span.space { width: .6em; }

    @keyframes wave {
        0%, 100% { color: #afafaf; }
        50%      { color: #4078ab; }
    }
    @keyframes fadeInLogo { to { opacity: 1; transform: translateY(0) scale(1); } }
    @keyframes fadeInText { to { opacity: 1; } }

    #content {
        min-height: 100%;
        opacity: 0;
        transition: opacity .6s ease;
    }
    #content.show { opacity: 1; }
</style>

<script>
    (function () {
        const brandEl = document.getElementById('brand-text');
        const waveDelayStep = 0.08;
        const text = brandEl.dataset.text || '';

        [...text].forEach((char, i) => {
            const span = document.createElement('span');
            if (char === ' ') {
                span.classList.add('space');
                span.textContent = '\u00A0';
            } else {
                span.textContent = char;
                span.style.setProperty('--wave-delay', (i * waveDelayStep) + 's');
            }
            brandEl.appendChild(span);
        });

        function hideLoader() {
            const loader = document.getElementById('loader');
            const content = document.getElementById('content');
            loader.classList.add('hide');
            content?.classList.add('show');
        }

        window.addEventListener('load', () => {
            setTimeout(hideLoader, 1200);
        });
    })();
</script>