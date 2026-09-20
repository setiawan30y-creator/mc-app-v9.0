<x-layouts.app title="Appearance" page-title="Appearance">
    <div class="mc-appearance">
        <div class="mc-card">
            <div class="mc-card-body mc-appearance-hero">
                <div>
                    <div class="mc-appearance-eyebrow">Design System</div>
                    <h1 class="mc-appearance-title">Appearance</h1>
                    <p class="mc-appearance-description">
                        Atur tampilan MC-App V9.0 dari satu tempat. Perubahan tersimpan otomatis di browser ini dan akan dipakai oleh seluruh modul aplikasi.
                    </p>
                </div>
            </div>
        </div>

        <div class="mc-card">
            <div class="mc-appearance-section">
                <h2 class="mc-appearance-section-title">Theme mode</h2>
                <p class="mc-appearance-section-help">Pilih tampilan terang, mengikuti sistem, atau gelap.</p>
                <div class="mc-choice-grid">
                    <button type="button" class="mc-choice" data-appearance-choice="theme" data-value="light" aria-pressed="false">
                        <span class="mc-choice-icon">☀</span>
                        <span class="mc-choice-label">Light</span>
                        <span class="mc-choice-help">Tampilan terang</span>
                    </button>
                    <button type="button" class="mc-choice" data-appearance-choice="theme" data-value="system" aria-pressed="false">
                        <span class="mc-choice-icon">◐</span>
                        <span class="mc-choice-label">System</span>
                        <span class="mc-choice-help">Ikuti perangkat</span>
                    </button>
                    <button type="button" class="mc-choice" data-appearance-choice="theme" data-value="dark" aria-pressed="false">
                        <span class="mc-choice-icon">☾</span>
                        <span class="mc-choice-label">Dark</span>
                        <span class="mc-choice-help">Tampilan gelap</span>
                    </button>
                </div>
            </div>

            <div class="mc-appearance-section">
                <h2 class="mc-appearance-section-title">Accent color</h2>
                <p class="mc-appearance-section-help">Warna aksen digunakan pada tombol aktif, indikator, link, dan elemen interaktif.</p>
                <div class="mc-swatch-row" aria-label="Accent color">
                    <button type="button" class="mc-color-choice" style="--swatch:#19735f" data-appearance-choice="accent" data-value="emerald" aria-label="Emerald" aria-pressed="false"></button>
                    <button type="button" class="mc-color-choice" style="--swatch:#bc903d" data-appearance-choice="accent" data-value="gold" aria-label="Gold" aria-pressed="false"></button>
                    <button type="button" class="mc-color-choice" style="--swatch:#2f6f9f" data-appearance-choice="accent" data-value="blue" aria-label="Blue" aria-pressed="false"></button>
                    <button type="button" class="mc-color-choice" style="--swatch:#7356a8" data-appearance-choice="accent" data-value="violet" aria-label="Violet" aria-pressed="false"></button>
                    <button type="button" class="mc-color-choice" style="--swatch:#ad4a45" data-appearance-choice="accent" data-value="red" aria-label="Red" aria-pressed="false"></button>
                </div>
            </div>

            <div class="mc-appearance-section">
                <h2 class="mc-appearance-section-title">Page background</h2>
                <p class="mc-appearance-section-help">Pilih karakter warna area kerja aplikasi.</p>
                <div class="mc-choice-grid">
                    <button type="button" class="mc-choice" data-appearance-choice="background" data-value="warm" aria-pressed="false">
                        <span class="mc-choice-label">Warm</span>
                        <span class="mc-choice-help">Ivory / warm neutral</span>
                    </button>
                    <button type="button" class="mc-choice" data-appearance-choice="background" data-value="cool" aria-pressed="false">
                        <span class="mc-choice-label">Cool</span>
                        <span class="mc-choice-help">Cool grey</span>
                    </button>
                    <button type="button" class="mc-choice" data-appearance-choice="background" data-value="clean" aria-pressed="false">
                        <span class="mc-choice-label">Clean</span>
                        <span class="mc-choice-help">Neutral white</span>
                    </button>
                </div>
            </div>

            <div class="mc-appearance-section">
                <h2 class="mc-appearance-section-title">Card & shadow</h2>
                <p class="mc-appearance-section-help">Atur karakter kartu yang akan menjadi dasar tampilan modul-modul V9.0.</p>
                <div class="mc-choice-grid">
                    <button type="button" class="mc-choice" data-appearance-choice="card" data-value="flat" aria-pressed="false">
                        <span class="mc-choice-label">Flat</span>
                        <span class="mc-choice-help">Tanpa bayangan</span>
                    </button>
                    <button type="button" class="mc-choice" data-appearance-choice="card" data-value="elevated" aria-pressed="false">
                        <span class="mc-choice-label">Elevated</span>
                        <span class="mc-choice-help">Shadow standar</span>
                    </button>
                    <button type="button" class="mc-choice" data-appearance-choice="card" data-value="soft" aria-pressed="false">
                        <span class="mc-choice-label">Soft</span>
                        <span class="mc-choice-help">Shadow lebih terasa</span>
                    </button>
                </div>
            </div>

            <div class="mc-appearance-section">
                <h2 class="mc-appearance-section-title">Corner radius</h2>
                <p class="mc-appearance-section-help">Atur tingkat ketegasan atau kelembutan sudut komponen.</p>
                <div class="mc-choice-grid">
                    <button type="button" class="mc-choice" data-appearance-choice="radius" data-value="sharp" aria-pressed="false">
                        <span class="mc-choice-label">Sharp</span>
                        <span class="mc-choice-help">Lebih tegas</span>
                    </button>
                    <button type="button" class="mc-choice" data-appearance-choice="radius" data-value="soft" aria-pressed="false">
                        <span class="mc-choice-label">Soft</span>
                        <span class="mc-choice-help">Seimbang</span>
                    </button>
                    <button type="button" class="mc-choice" data-appearance-choice="radius" data-value="round" aria-pressed="false">
                        <span class="mc-choice-label">Round</span>
                        <span class="mc-choice-help">Lebih membulat</span>
                    </button>
                </div>
            </div>

            <div class="mc-appearance-section">
                <h2 class="mc-appearance-section-title">Interface density</h2>
                <p class="mc-appearance-section-help">Tentukan seberapa padat ruang kerja tabel dan komponen aplikasi.</p>
                <div class="mc-choice-grid">
                    <button type="button" class="mc-choice" data-appearance-choice="density" data-value="compact" aria-pressed="false">
                        <span class="mc-choice-label">Compact</span>
                        <span class="mc-choice-help">Lebih banyak data di layar</span>
                    </button>
                    <button type="button" class="mc-choice" data-appearance-choice="density" data-value="comfortable" aria-pressed="false">
                        <span class="mc-choice-label">Comfortable</span>
                        <span class="mc-choice-help">Ruang lebih lega</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="mc-card mc-appearance-preview">
            <aside class="mc-preview-sidebar">
                <div class="mc-preview-brand">MC-APP V9.0</div>
                <div class="mc-preview-nav">
                    <span class="active">Dashboard</span>
                    <span>Teller</span>
                    <span>Transaction</span>
                    <span>Closing Rp</span>
                </div>
            </aside>
            <div class="mc-preview-content">
                <div class="mc-preview-topbar"></div>
                <div class="mc-preview-cards">
                    <div class="mc-preview-card"><strong>USD Stock</strong><div class="mc-preview-line"></div></div>
                    <div class="mc-preview-card"><strong>Today Sales</strong><div class="mc-preview-line"></div></div>
                </div>
            </div>
        </div>

        <div class="mc-card mc-appearance-actions">
            <span class="mc-appearance-status">Pengaturan tersimpan otomatis di browser.</span>
            <button type="button" class="mc-appearance-reset" data-appearance-reset>Reset to default</button>
        </div>
    </div>
</x-layouts.app>
